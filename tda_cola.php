<?php
//enqueue-encolar
//queue-desencolar
//front-primer elemento
//isEmpty-esta vacio
//cantidad elementos - size
//
//ordenar elemento 
//consultar el ultimo elemento que llego a la cola
//mostrar todos elementos 
//concatenar dos colas
//comparar colas en longitud
//invertir elementos de la cola

/** Encola un elemento a la cola
*   @param elemento, elemento a encolar
*   @param cola, cola a modificar
*   @return cola, cola modificada
*/

function enqueue($cola, $elemento)
{   
    $nueva_cola = [];
    for($i=0; $i<count($cola); $i++)
    {
        $nueva_cola[$i] = $cola[$i];
    }
    $nueva_cola[$i] = $elemento; //verificar
    return $nueva_cola;
}

/** Verifica si la cola tiene elementos
 * @param cola, cola a verificar
 * @return bool, verdadero si no tiene elementos, falso caso contrario
 */

function isEmpty($cola)
{
    return count($cola) == 0;
}


/** Desencola el primer elemento de la cola
 *  @param cola, cola a modificar
 *  @return cola, cola modificada
 */

function dequeue($cola)
{
    //Verificar si la cola esta vacia
    if(isEmpty($cola))
    {
        echo "Cola Vacia"; //POR AHORA
        return [];
    }

    $nueva_cola = [];
    for($i=1; $i<count($cola); $i++)
    {
        $nueva_cola[$i-1] = $cola[$i];
    }

    return $nueva_cola;
}

/** Devuelve el primer elemento de la cola
 *  @param cola
 *  @return elemento, elemento que se encuentra en la primer posicion de la cola
 */

 function front($cola)
 {
    //Verificar si la cola esta vacia
    if(isEmpty($cola))
    {
        echo "Cola vacia"; //POR AHORA
        return null;
    }

    return $cola[0];
 }

 /** Devuelve la cantidad de elementos de una cola
  *    @param cola
*   @return int, cantidad de elementos de la cola
  */

  function cantidad_elementos($cola)
  {
    return count($cola);
  }

//concatenar dos colas

/** concatena dos colas del mismo tipo elemento
 * @param cola1
 * @param cola2
 * @return nueva_cola
 */
function concatenar_dos_colas($cola1, $cola2)
{
    $nueva_cola = [];
    //contador = 0;
    for($i=0; $i<count($cola1); $i++)
    {
        $nueva_cola[] = $cola1[$i];
    }
    //contador = i;
    for($j=0; $j<count($cola2); $j++)
    {   // Continuar agregando elementos de cola2 al final de nueva_cola
        //$nueva_cola[count($nueva_cola)++] = $cola2[$j]; //verificar - no sirve "++" no los toma
         $nueva_cola[] = $cola2[$j];
         //$nueva_cola[count($nueva_cola)-1] = $cola2[$j];// no sirve se sobre escribe
        //$nueva_cola[i++] = $cola2[$j];
        //$nueva_cola[contador] = $cola2[$j];
        //contador++;
    }
    return $nueva_cola;
}

function concatenar_colas($cola1, $cola2)
{
    if(isEmpty($cola1) && isEmpty($cola2))
    {
        echo "Alguna de las colas esta vacia.";
        return [];//devuelve colas vacias en lugar d enull
    }

    $cola_nueva = [];// se crea un array vacio llamado cola nueva

    while(!isEmpty($cola1)) //mientras la cola1 NO este vacia...
    {
        $elemento = dequeue($cola1);
        $cola_nueva.enqueue($cola_nueva, $elemento);
    }
    //$cola_nueva.enqueue(dequeue($cola1));
    while(!isEmpty($cola2))
    {
        $elemento = dequeue($cola2);
        $cola_nueva.enqueue($cola_nueva,$elemento);
    }
    return $cola_nueva;
}

?>