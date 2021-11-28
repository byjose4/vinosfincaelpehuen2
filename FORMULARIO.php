<?php 
$con=mysqli_connect('localhost','root','','finca')or die('error en la conexion');
$nom=$_POST['nombre'];
$cel=$_POST['telefono'];
$mensaje=$_POST['mensaje'];
$insertar="INSERT INTO registro VALUES('$nom','$cel','$mensaje')";
$accion=mysqli_query($con,$insertar);
if($accion)
{echo "<script>alert('Operacion Exitosa! Tus datos han sido guardados!');window.location='formulario.html'</script>";}
mysqli_close($con);
?>