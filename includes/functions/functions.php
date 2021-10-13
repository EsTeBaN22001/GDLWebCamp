<?php 

// Función para convertir un array de los productos de reservations a JSON
function productsJson(&$tickets, &$shirts = 0, &$labels = 0){
  $days = array(0 => 'pass-day', 1 => 'complet-day', 2 => 'pass-two-days');

  // Combinar los arrays de la base de datos con $day
  $totalTickets = array_combine($days, $tickets);

  // Convertir el array $totalTickets a un JSON
  $json = array();

  // Guardamos el boleto si existe o hay más de 0
  foreach($totalTickets as $key => $tickets){
    if((int) $tickets > 0){
      $json[$key] = (int) $tickets;
    }
  }

  // Agregando las camisas al array de json
  $shirts = (int) $shirts;
  if($shirts > 0){
    $json['shirts'] = $shirts;
  }

    // Agregando las etiquetas al array de json
    $labels = (int) $labels;
    if($labels > 0){
      $json['labels'] = $labels;
    }
  

  // Retornamos el json
  return json_encode($json);
}

// Función para convertir el array de los eventos de reservations a JSON
function eventsJson(&$events){
  $eventsJson = array();
  foreach ($events as $event){
    $eventsJson['events'][] = $event;
  }

  return json_encode($eventsJson);
}

// Función para debugear (var_dump)
function debuguear($var){
  echo "<pre>";
  var_dump($var);
  echo "</pre>";
}

?>