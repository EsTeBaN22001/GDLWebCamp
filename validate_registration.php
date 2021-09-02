<?php include_once('includes/templates/header.php'); ?>
<!-- <?php include_once('includes/functions/functions.php'); ?> -->

<section class="section container">
  <h2>Resumen de registro</h2>
  <?php if(isset($_POST['submit'])): 
  
  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $email = $_POST['email'];
  $gift = $_POST['gift'];
  $total = $_POST['total-order'];
  $date = date('Y-m-d H:i:s');

  // Orders
  $tickets = $_POST['tickets'];
  $shirts = $_POST['order-shirt'];
  $labels = $_POST['order-labels'];

  // $order = productsJson($tickets, $shirts, $labels);
  // echo "<pre>";
  //   var_dump($order);
  // echo "</pre>";
  
  ?>
  <!-- <pre>
    <?php var_dump($_POST); ?>
  </pre> -->
  <?php endif; ?>
</section>

<?php include_once('includes/templates/footer.php'); ?>