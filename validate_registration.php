<?php include_once('includes/functions/functions.php'); ?>
<?php if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $date = date('Y-m-d H:i:s');

    // Orders
    $tickets = $_POST['tickets'];
    $shirts = $_POST['order-shirt'];
    $labels = $_POST['order-labels'];
    $order = productsJson($tickets, $shirts, $labels);

    // Events (registry[])
    $events = $_POST['registry'];
    $registry = eventsJson($events);
    
    $gift = $_POST['gift'];
    $total = $_POST['total-order'];

    try {
      require_once('includes/functions/db_conection.php');
      $stmt = $conn->prepare("INSERT INTO registered (name_registered, surname_registered, email_registered, date_registered, passes_articles, workshop_registered, gift, total_paid) VALUES (?,?,?,?,?,?,?,?);");
      $stmt->bind_param("ssssssis", $name, $surname, $email, $date, $order, $registry, $gift, $total);
      $stmt->execute();
      $stmt->close();
      $conn->close();
      // header('Location: validate_registration.php?success=1');
    }catch(\Exception $e){
      echo $e->getMessage();
    }
    
  } ?>

<?php include_once('includes/templates/header.php'); ?>
<section class="section container">
  <h2>Resumen de registro</h2>

  <?php if(isset($_GET['success']) && isset($_GET['success']) == '1'){
    echo "Registro exitoso";
  };?>

</section>

<?php include_once('includes/templates/footer.php'); ?>