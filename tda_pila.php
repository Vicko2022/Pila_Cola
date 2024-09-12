<?php
//buscar un elemento
//ordenar creciente - decreciente
//concatenar pilas
//agregar un elemento - apilar - push X
//eliminar elemento - desapilar - pop  X
//verificar si hay elementos - isempty X
//cantidad de elementos X
//top - obtener el primer elemento sin desapilarlo X


/** Apilar sola la pila
 * @param elemento, elemento
 * @param pila, pila
 * @return pila_nueva, pila con el nuevo elemento apilado
 */
function apilar($elemento, $pila)
{
    $pila_nueva = []; //creo la pila que voy a devolver
    for($i=0; $i<count($pila); $i++) //copio la pila vieja a la pila nueva
    {
        $pila_nueva[$i] = $pila[$i];
    }
    $pila_nueva[$i] = $elemento; //apilo el nuevo elemento

    /*for($i=1; $i<=count($pila); $i++) manejo de indices dentro de un arreglo
    {
        $pila[$i-1]
        mostrar_por_pantalla($pila);
    }*/ 

    return $pila_nueva;
}

/** Desapilo el ultimo elemento que apilamos 
 * @param pila, pila
 * @return pila, pila sin el elemento desapilado
 */
// Función para desapilar un elemento de la pila
function desapilar($pila)
{
    if (esta_vacia($pila)) {
        echo "La pila está vacía."; // Por ahora un mensaje
        return $pila; // Devuelve la pila sin cambios
    }

    // Obtén el tope de la pila
    $elemento_tope = tope($pila);

    // Crea una nueva pila con todos los elementos excepto el último
    $pila_nueva = [];
    for ($i = 0; $i < count($pila) - 1; $i++) {
        $pila_nueva[$i] = $pila[$i];
    }

    // Muestra el elemento desapilado (opcional)
    echo "Elemento desapilado: $elemento_tope<br>";
    return $pila_nueva;
}

 /* function desapilar($pila)
 {
    if (esta_vacia($pila))
    {
        echo "La pila esta vacia."; //por ahora un cartel
        return null;
    }
    /*$pila_nueva = [];
    for($i=count($pila); $i>=0; $i--)
    {
        $pila_nueva[$i] = $pila[$i];
    }

    $pila[count($pila)-1] = null;

    return $pila;
 } */

 /** Obtener el elemento del tope de la pila
  * @param pila, pila
  * @return elemento, elemento del tope de la pila
  */

  function tope($pila)
  {
    if(esta_vacia($pila))
    {
        echo "La pila esta vacia."; //por ahora un cartel
        return null;
    }

    return $pila[count($pila)-1];
  }

 /** Verifica si la pila tiene elementos
  * @param pila, pila
  * @return bool, verdadero si no tiene elementos, caso contrario falso.
  */
 function esta_vacia ($pila)
 {
    return count($pila) == 0;
 }

 /** Cantidad de elementos
  * @param pila, pila
  * @return cantidad, cantidad de elementos de la pila
  */
 function cantidad_elementos($pila)
 {
    return count($pila);
 }

 /** Busco un elemento dentro de la pila
  * @param pila, pila
 * @param elemento, elemento que deseo buscar
 * @return bool, verdadero si esta, caso contrario falso.
  */
  function buscar_elemento($pila, $elemento)
{
    if (esta_vacia($pila)) {
        echo "La pila está vacía";
        return false; // La pila está vacía, así que no se puede encontrar ningún elemento
    }
    
    // Si la pila no está vacía, buscamos el elemento
    $esta = false;
    for ($i = 0; $i < count($pila); $i++) {
        if ($pila[$i] == $elemento) {
            $esta = true;
            break;
        }
    }
    
    return $esta;
}


 /*  function buscar_elemento($pila, $elemento)
  {
    $esta = false;
    if(esta_vacia($pila))
    {
        echo "La pila esta vacia";
    }
    return $esta;
} */
    /**
     * pila_aux;
     * mientras la pila tenga elementos hacer {
     *      tope() //miro el primer elemento a desapilar
     *      si el elemento del tope es igual al elemento que busco
     *          esta = verdadero
     *      ***** si no quiero perder la pila****
     *      apilo ne pila_aux(elemento del tope())
     *      desapilo()
     * }
     * 
     * mientras la pila_aux tenga elementos hacer {
     *      elemento_aux = tope de pila_aux ()
     *      apilo en pila
     *      desapilo pila_aux()
     * }
     * 
     */

   
?>