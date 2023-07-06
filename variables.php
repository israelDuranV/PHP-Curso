<?php
//imprimir variables
//echo "Hola mundo";
//print "hola mundo";
//var_dump("Hola mundo");
//echo phpinfo();


//asignar variables
$codigo_producto = 245455322; //int
$nombre_producto = "Gansito  congelado 200g"; //string
$precio = 3.50; //flot
$hay_stock = True; //bolean

$codigo_producto_copia = "El nombre del producto es : {$codigo_producto} y el producto es muy caro";

//echo $codigo_producto;
//echo "<br>";
//echo $codigo_producto_copia;

/*
Ejemplo en MVC
mipagina.com/544545/ticket/5242211
/usuarios/resumen/25
ventasController.php
public function ticket(5242211){
    return view("ticket");
}

*/

$tipo = gettype($nombre_producto);
echo $tipo;

/*
//vaciar variables
$codigo_producto = 245455322; 
//var_dump($codigo_producto);
//unset($codigo_producto);
$codigo_producto = NULL;

var_dump($codigo_producto);
*/

/*Comentario hecho por Gonzalo*/
?>