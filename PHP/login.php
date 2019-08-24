<?php 
	$user=$_POST['usuario'];
	$pass=$_POST['clave'];
	
	$con=@mysqli_connect("bu5pswicivyflpadpywl-mysql.services.clever-cloud.com","uzg6leluhbydut8d","6hdfHS1rofLaSMbPdD7A","bu5pswicivyflpadpywl");
	$consulta="SELECT * FROM usuarios WHERE idnom='$user' and password='$pass'";
	$resultado=mysqli_query($con, $consulta);
	
	$filas=mysqli_num_rows($resultado);
	
	if($filas>0){
		header("location: ..\INICIO.html");
	}else{
		echo "error no hay ningun usuarios";
	}
?>