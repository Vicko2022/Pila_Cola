<!DOCTYPE html>
<html lang="en">
<head>
    <title>Testing COLA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php require_once 'tda_cola.php'; ?>
<?php
// Crear una cola vacía
$cola = [];

// Encolar el primer elemento
$cola = enqueue($cola, "A");
echo "Cola: <br>"; //salto de linea
print_r($cola); 
echo "</br>"; // Mostrará: Array ( [0] => A )
echo "<br>"; 


// Encolar el segundo elemento
$cola = enqueue($cola, "B");
echo "Cola: <br>";
print_r($cola); 
echo "</br>"; // Mostrará: Array ( [0] => A [1] => B )
echo "<br>"; 


// Encolar el tercer elemento
$cola = enqueue($cola, "C");
echo '<b style="color:black;">Cola :</b><br>';
print_r($cola); 
echo "</br>";// Mostrará: Array ( [0] => A [1] => B [2] => C )
echo "<br>";
echo "<br>";
//////////////////////////////////////////////////////////////////////////////////
// Crear la segunda cola
$cola2 = ["D", "E", "F"];
echo '<b style="color:black;">Cola 2 :</b><br>';

print_r($cola2);
echo "<br><br>"; // Mostrará: Array ( [0] => D [1] => E [2] => F )

// Concatenar las dos colas
$cola_concatenada = concatenar_dos_colas($cola, $cola2);
echo '<b style="color:black;">Cola concatenada:</b><br>';
print_r($cola_concatenada);
echo "<br><br>";
//////////////////////////////////////////////////////////////////////////////////////////////////////

// Desencolar un elemento
$cola_concatenada  = dequeue($cola_concatenada );
echo '<b style="color:black;">Cola despues de desencolar el primer elemento : </b><br>';
if (is_array($cola_concatenada )) {
    print_r($cola_concatenada );
} else {
    echo "$cola_concatenada  Se encuentra vacia"; // Mostrar el mensaje si la cola está vacía
}
echo "<br><br>"; 

// Desencolar otro elemento
$cola_concatenada  = dequeue($cola_concatenada );
echo '<b style="color:black;">Cola despues de desencolar el segundo elemento : </b><br>';
if (is_array($cola_concatenada)) {
    print_r($cola_concatenada);
} else {
    echo " $cola_concatenada Se encuentra vacia"; // Mostrar el mensaje si la cola está vacía
}
echo "<br><br>"; 

// Intentar desencolar cuando la cola está vacía


while (!isEmpty($cola_concatenada)) {// mientras
    $cola_concatenada = dequeue($cola_concatenada);//descolar hata que este vacia
    echo "Cola después de desencolar un elemento:<br>";
    print_r($cola_concatenada);
    echo "<br><br>";}

?> 
</body>
</html>
