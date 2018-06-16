<?php
	$a1 = "127.0.0.1";
	$a2 = "root";
	$a3 = "";
	$a4 = "cecyexpress";
	//$mysql = new mysqli($a1,$a2,$a3,$a4);
	$con = mysqli_connect($a1,$a2,$a3,$a4);
	if(mysqli_connect_errno()){
		echo "Error con la conexion";
	}
    
    $var0 = $_GET['mail'];
    $var1 = $_GET['pass'];
    $var2 = $_GET['conf_pass'];
    $var3 = $_GET['nick'];
    
    $cont = (strlen($var0)*strlen($var1)*strlen($var2)*strlen($var3)) or die ("No se han llenado todos los campos");

    if($var3 > 10){
        echo 'El nombre de usuario no puede ser mayor a 10 caracteres :)';
    }

    if($var1 > 20){
        echo 'La contraseña no puede ser mayor a 20 caracteres';
    }

    if($var1 =! $var2){
        echo 'Las contraseñas no coinciden';
    }

    $mdpass = password_hash($var2, PASSWORD_DEFAULT);

        $sql0 = "INSERT INTO `usup` (`ID_Usu`, `correo`, `pass`, `nick`, `sesion`) VALUES (NULL, '$var0', '$var1', '$var3','0');";
    
    mysqli_query($con,$sql0) or die ("Error en capturar datos");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="../reg1.html";
		</script>
	';

    $sql1= "INSERT INTO `car` (`ID_CARRITO`, `ID_Usu`, `pro`, `pre`, `fin`) VALUES (NULL, '1', 'producto1', '1', '0');";
?>