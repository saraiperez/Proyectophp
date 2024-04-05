<?php
$totalcompra = $_POST["precio"]; 
 $tipocompra=$_POST["tipo"]; 
 $codigo= DESC33 ;
 $DESC33=20;   
echo"<br></br>";
echo '<center><h2>tienda online</h2></center>';
switch ($totalcompra) {
    case ($totalcompra <= 15 && $tipocompra=='ropa') :
        echo "los costos de envio son de 8 dolares"; 
       
     break;
    case ($totalcompra >= 45 && $tipocompra=='ropa') :
     echo "los costos de envio son gratis";
     break;
    case ($totalcompra > 200 && $tipocompra=='ropa') :
        echo( "los costos de envio son gratis y se le da el siguiente codigo de descuento " .$codigo);
         break;
    default:
        break;
}
switch ($tipocompra) {
    case 'mascotas':
        if( $totalcompra > 0  && $tipocompra = 'mascotas'){
    echo "no se puede realizar el envio ";

        }
   case'ropa':
       if($tipocompra = 'ropa'){
       }
    break;
    default:
        break;
}