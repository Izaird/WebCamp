<?php if(isset($_POST['submit'])): 

$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$email= $_POST['email'];
$regalo= $_POST['regalo'];
$total= $_POST['total_pedido'];
$fecha= date('Y-m-d H:i:s');

///////////////////////////////////////////////////////////////////////////////////
//Pedidos
///////////////////////////////////////////////////////////////////////////////////
$boletos = $_POST['boletos'];
$camisas = $_POST['pedido_camisas'];
$etiquetas = $_POST['pedido_etiquetas'];
include_once 'includes/funciones/funciones.php';
$pedido = productos_json($boletos, $camisas, $etiquetas);


///////////////////////////////////////////////////////////////////////////////////
//Eventos
///////////////////////////////////////////////////////////////////////////////////
$eventos = $_POST['registro'];
$registro = eventos_json($eventos);

///////////////////////////////////////////////////////////////////////////////////
//Conexion base de datos
///////////////////////////////////////////////////////////////////////////////////
try {
  require_once('includes/funciones/bd_conexion.php');
  //Se le dice a SQL que se prepare para una insercion a la DB
  $stmt =  $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");

  
  //Se le indican los datos (las "s" es para string e "i" enteros)
  $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);


  //Se ejecuta
  $stmt->execute();


  //Se cierra el Stament y la consulta
  $stmt->close();
  $conn->close();
  header('Location: validar_registro.php?exitoso=1');
} catch (\Exception $e) {
  echo $e->getMessage();

}




?>


<?php endif; ?>

<?php include_once 'includes/templates/header.php';?>
<section class="seccion contenedor">
<h2>Resumen registro</h2>
<?php 
    if(isset($_GET['exitoso'])):
     if($_GET['exitoso']==1):
        echo "<h3>";
        echo "Registro exitoso";
        echo "</h3>";
     endif;
    endif;


?>


</section>

<?php include_once 'includes/templates/footer.php';?>
