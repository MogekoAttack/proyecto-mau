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
	$var1 = $_GET['var1'];
	$var2 = $_GET['var2'];

    $mdpass = password_hash($var2, PASSWORD_DEFAULT);

    $ent = "select con from usup where correo = '$var1' and con = '$mdpass';";
    mysqli_set_charset($con, "utf8");

	if(!$result = mysqli_query($con, $ent) or die ("Error en la consulta, revise php"))
        
    $dato = array();
    while($row = mysqli_fetch_array($result)){
        
    }
    if(password_verify($mdpass, $res1)){
        echo 'correcto';
    }else{
        echo 'incorrecto';
    }
?>