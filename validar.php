<?php
$usuario=$_POST['num_empleado'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['num_empleado']=$usuario;

$conexion=mysqli_connect("localhost","root","","hpp");

$consulta="SELECT*FROM usuarios where num_empleado='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    header("location:admin.php");

}else
if($filas['id_cargo']==2){ //cliente
header("location:cliente.php");
}
else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
