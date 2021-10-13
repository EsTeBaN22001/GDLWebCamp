<?php 

include_once('../templates/header.php'); 
include('../paypal.php');
include('../functions/functions.php');

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Rest\ApiContext;


?>

<section class="section container">
  <h2>Resumen de registro</h2>

  <?php 

    $paymentId = $_GET['paymentId'] ?? "";
    $idPago = (int) $_GET['id_pago'];

    // Petición a Rest Api de PayPal
    $pago = Payment::get($paymentId, $apiContext);
    $execution = new PaymentExecution();
    $execution->setPayerId($_GET['PayerID']);

    // Resultado tiene la información de la transacción
    $result = $pago->execute($execution, $apiContext);

    $response = $result->transactions[0]->related_resources[0]->sale->state;

    if($response == "completed"){

      echo '<div class="result correct">';
      echo 'El pago se realizó correctamente <br>';
      echo 'El id es: ' . $paymentId;
      echo '</div>';

      require_once('../functions/db_conection.php');

      $query = "UPDATE registered SET paid_out = ? WHERE id_registered = ?";
      $stmt = $conn->prepare($query);
      $paid_out = 1;
      $stmt->bind_param('ii', $paid_out, $idPago);
      $stmt->execute();
      $stmt->close();
      $conn->close();

    }else{
      echo '<div class="result error">';
      echo "El pago no se realizó";
      echo '</div>';
    }
    
  ?>

</section>

<?php include_once('../templates/footer.php'); ?>