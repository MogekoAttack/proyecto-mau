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
	$var3 = $_GET['var3'];
	$var4 = $_GET['var4'];
	$var5 = $_GET['var5'];
	$var6 = $_GET['var6'];
    $var7 = $_GET['var7'];
    $var8 = $_GET['var8'];
    $var9 = $_GET['var9'];
    $var10 = $_GET['var10'];
    $var11 = $_GET['var11'];
    $var12 = $_GET['var12'];
    $var13 = $_GET['var13'];
    $var14 = $_GET['var14'];
    $var15 = $_GET['var15'];
    $var16 = $_GET['var16'];
    $var17 = $_GET['var17'];
    $var18 = $_GET['var18'];
    $var19 = $_GET['var19'];
    $var20 = $_GET['var20'];
	$con1 = false;
    $cont = "var";
	$sql1 = "";

    $cont = (strlen("$var1") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var2") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var3") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var4") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var5") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var6") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var7") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var8") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var9") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var10") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var11") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var12") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var13") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var14") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var15") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var16") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var17") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var18") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var19") or die ("No se han llenado todos los campos"));
    $cont = (strlen("$var20") or die ("No se han llenado todos los campos"));

    /*
	$req = (strlen($var1)*strlen($var2)*strlen($var3)*strlen($var4)*strlen($var5)*strlen($var6)*strlen($va)) or die("No se han llenado todos los campos");
    */
    
	if ($var5 != $var6){
		die('Las contraseñas no coinciden');
	}
    
    $opciones = [
        'memory_cost' => 1<<11,
        'time_cost'   => 4,
        'threads'     => 2
    ];

    $mdpass = password_hash($var5, PASSWORD_DEFAULT);

	$sql1 = "INSERT INTO usuario VALUES ('','$var1','$var2','$var3','$var4','$mdpass','$var7','$var8','$var9','$var10','$var11','$var12','$var13','$var14','$var15','$var16','$var17','$var18','$var19','$var20');";
	mysqli_query($con,$sql1) or die ("Error en capturar datos");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="../reg.html";
		</script>
	';
?>