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

    $mdpass = password_hash($var1, PASSWORD_DEFAULT);

    $co = mysqli_real_escape_string($var0); 
    $pa = mysqli_real_escape_string($mdpass);

    $sql0 = "select correo,pass from usup where correo= '"$var0"' and pass= '"$var1"';";
    
    $res = mysqli_query($sql0);
    $lin = mysqli_fetch_object($res);
    $obj = mysqli_num_rows($res);

    if($obj == 1){
        echo'
		<script>
			alert("Iniciando sesión");
			location.href="../index.phpz";
		</script>
	';
    }else if($obj == 0) {
        echo $var0;
        echo $mdpass;
    }
?>