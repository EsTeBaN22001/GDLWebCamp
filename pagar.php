<?php
include('./includes/functions/functions.php');

if(!isset($_POST['submit'])){
  exit('Hubo un error');
}

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

require 'includes/paypal.php';

if(isset($_POST['submit'])){
  
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $date = date('Y-m-d H:i:s');

  // Orders
  $tickets = $_POST['tickets'];
  $numTickets = $tickets;

  $shirtsAmount = $_POST['extra_request']['shirts']['amount'];
  $shirtsPrice = $_POST['extra_request']['shirts']['price'];

  $labelsAmount = $_POST['extra_request']['labels']['amount'];
  $labelsPrice = $_POST['extra_request']['labels']['price'];

  $extraRequest = $_POST['extra_request'];

  $order = productsJson($tickets, $shirts, $labels);

  // Events (registry[])
  $events = $_POST['registry'];
  $registry = eventsJson($events);
  
  $gift = $_POST['gift'];
  $total = $_POST['total-order'];

  try {

    require_once('includes/functions/db_conection.php');

    $query = "INSERT INTO registered (name_registered, surname_registered, email_registered, date_registered, passes_articles, workshop_registered, gift, total_paid) VALUES (?,?,?,?,?,?,?,?);";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssssssis", $name, $surname, $email, $date, $order, $registry, $gift, $total);
    $stmt->execute();
    $idRegistry = $stmt->insert_id;
    $stmt->close();
    $conn->close();

    // header('Location: validate_registration.php?success=1');

  }catch(\Exception $e){

    echo $e->getMessage();

  }

}



// PayPal

$purchase = new Payer();
$purchase->setPaymentMethod('paypal');

$i = 0;
$arrayRequested = array();

foreach ($numTickets as $key => $value) {
  if( (int) $value['amount'] >  0 ){

    ${"article$i"} = new Item();
    $arrayRequested[] = ${"article$i"};
    ${"article$i"}->setName("Pase: " . $key)
                  ->setCurrency('USD')
                  ->setQuantity( (int) $value['amount'] )
                  ->setPrice( $value['price'] );

    $i++;
  }
}

foreach ($extraRequest as $key => $value) {
  if( (int) $value['amount'] >  0 ){

    if($key == 'shirts'){
      $price = (float) $value['price'] * .93 ;
    }else{
      $price = (int) $value['price'];
    }

    ${"article$i"} = new Item();
    $arrayRequested[] = ${"article$i"};
    ${"article$i"}->setName("Extras: " . $key)
                  ->setCurrency('USD')
                  ->setQuantity( (int) $value['amount'] )
                  ->setPrice( $price );

    $i++;
  }
}

$articleList = new ItemList();
$articleList->setItems($arrayRequested);

$amount = new Amount();
$amount->setCurrency('USD');
$amount->setTotal($total);

$transaction = new Transaction();
$transaction->setAmount($amount);
$transaction->setItemList($articleList);
$transaction->setDescription('Pago GDLWEBCAMP');
$transaction->setInvoiceNumber($idRegistry);

$redirect = new RedirectUrls();
$redirect->setReturnUrl(URL_SITIO . "/includes/paypal/pago_finalizado.php?id_pago={$idRegistry}");
$redirect->setCancelUrl(URL_SITIO . "/includes/paypal/pago_finalizado.php?id_pago={$idRegistry}");

$payment = new Payment();
$payment->setIntent("sale");
$payment->setPayer($purchase);
$payment->setRedirectUrls($redirect);
$payment->setTransactions(array($transaction));

try {
  $payment->create($apiContext);
} catch (PayPal\Exception\PayPalConnectionException $pce) {
  print_r(json_decode($pce->getData()));
  exit;
}

$aprobado = $payment->getApprovalLink();

header("Location: {$aprobado}");

?>