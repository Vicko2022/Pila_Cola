<!DOCTYPE html>
<html lang="en">
<head>
<title>Testing Pila</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<?php require_once 'tda_pila.php';

  $pila_inicial = [1, 2, 3, 4];
  $nuevo_elemento = 5;
  $pila_actualizada = apilar($nuevo_elemento, $pila_inicial);
  print_r($pila_actualizada);
  echo "<br>";
  echo "<br>";
   ///////////////////////

    //Buscar elementos 
    // Defino el elemento que quiero buscar
$elemento_a_buscar = 4;
// Llamo a la función buscar_elemento
$encontrado = buscar_elemento($pila_actualizada, $elemento_a_buscar);
// Muestra el resultado de la búsqueda
if ($encontrado) {
    echo "El elemento $elemento_a_buscar está en la pila.";
    echo "<br>";
  echo "<br>";
} else {
    echo "El elemento $elemento_a_buscar no está en la pila.";
    echo "<br>";
  echo "<br>";
}

/////////////////////////////////////////////////////////////
//DESAPILAR
echo "Desapilando todos los elementos:<br>";
echo "<br>";

while (!esta_vacia($pila_actualizada)) {
    $pila_actualizada = desapilar($pila_actualizada);
}
echo "Pila después de desapilar todos los elementos:<br>";
print_r($pila_actualizada);
   

 ?>
  
</body>
</html>