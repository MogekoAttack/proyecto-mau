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

    $req = (strlen($var1)*strlen($var2)*strlen($var3)*strlen($var4)*strlen($var5)) or die("No se han llenado todos los campos");
    
    $sql1= "INSERT INTO `gpu` (`ID_GPU`, `mar`, `nom_lar`, `nom_cor`, `mem_gib`, `mem_tip`, `ter`) VALUES (NULL, '$var1', '$var2', '$var3', '$var4', '$var5', '$var5');";

    mysqli_query($con, $sql1) or die ("Error en capturar datos");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="../gpu.html";
		</script>
	';
?>