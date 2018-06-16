<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="CSS/index.css" />
</head>
<body>
	<div id="capa">
        <?php
            
        ?>
        <p>
            <center>
                <h3>
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

                        $titulo = "Bienvenido a cecyexpress";
                        $sql0 = "select nick,sesion from usup where sesion='0';";
                        if($ret = mysqli_query($con,$sql0)){
                            $row = $ret->fetch_row();
                            if ($row[0] =! ""){
                                echo $titulo;
                            }else{
                                echo "Bienvenido ... ".$row[0]." a cecyexpress";
                            }
                        }


                        mysqli_close($con);
                    ?>
                </h3>
            </center>
        </p>
        <hr>
        
		<div id="capa1"> 
			<table border="1">
				<tr>
					<td>
                        <a href="index.html">Inicio</a>
                    </td>
                    <td>
                        <a href="carrito.html">Carrtio de compras</a>
                    </td>
                    <td>
                        <a href="cpu.html">Registrar CPU</a>
                    </td>
                    <td>
                        <a href="gpu.html">Registrar GPU</a>
                    </td>
                    <td>
                        <a href="memoria.html">Registrar memoria RAM</a>
                    </td>
                    <td>
                        <a href="login.html">Login</a>
                    </td>
                    <td>
                        <a href="http://127.0.0.1/html/mau/reg1.html">¿Eres Nuevo?</a>
                        <!--
                            <input type="submit" onclick="pag_4('http://127.0.0.1/a/proyecto/login.html')" value="Iniciar sesión">
                        -->
                    </td>
				</tr>
			</table>
		</div>
		<div id="capa2">
			<table>
				<tr>
					<td><img src="img/p1.jpg" width="200" height="170" /></td>
				</tr>
				<tr>
					<td><center><input type="submit" name="p2" value="Añadir al carrito"/></center></td>
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
                        
                    ?>
				</tr>
			</table>
		</div>
		<div id="capa3">
			<table>
				<tr>
					<td><img src="img/p2.jpg" width="200" height="170" /></td>
				</tr>
				<tr>
					<td><center><input type="submit" name="p3" value="Añadir al carrito"/></center></td>
				</tr>
			</table>
		</div>
		<div id="capa4">
			<table>
				<tr>
					<td><img src="img/p3.jpg" width="200" height="170" /></td>
				</tr>
				<tr>
					<td><center><input type="submit" name="p4" value="Añadir al carrito"/></center></td>
				</tr>
			</table>
		</div>
		<div id="capa5">
			<table>
				<tr>
					<td><img src="img/p4.jpg" width="200" height="170" /></td>
				</tr>
				<tr>
					<td><center><input type="submit" name="p5" value="Añadir al carrito"/></center></td>
				</tr>
			</table>
		</div>
		<div id="capa6">
			<table>
				<tr>
					<td><img src="img/p5.jpg" width="200" height="170" /></td>
				</tr>
				<tr>
					<td><center><input type="submit" name="p6" value="Añadir al carrito"/></center></td>
				</tr>
			</table>
		</div>
		<div id="capa7">
			<table>
				<tr>
					<td><img src="img/p6.jpg" width="200" height="170" /></td>
				</tr>
				<tr>
					<td><center><input type="submit" name="p7" value="Añadir al carrito"/></center></td>
				</tr>
			</table>
		</div>
		<div id="capa8">
			<table>
				<tr>
					<td><img src="img/p7.jpg" width="200" height="170" /></td>
				</tr>
				<tr>
					<td><center><input type="submit" name="p8" value="Añadir al carrito"/></center></td>
				</tr>
			</table>
		</div>
		<div id="capa9">
			<table>
				<tr>
					<td><img src="img/p8.jpg" width="200" height="170" /></td>
				</tr>
				<tr>
					<td><center><input type="submit" name="p9" value="Añadir al carrito"/></center></td>
				</tr>
			</table>
		</div>
		<div id="capa10">
			<table>
				<tr>
					<td><img src="img/p9.jpg" width="200" height="170" /></td>
				</tr>
				<tr>
					<td><center><input type="submit" name="p10" value="Añadir al carrito"/></center></td>
				</tr>
			</table>
		</div>
		<div id="capa11">
			<table>
				<tr>
					<td><img src="img/p10.jpg" width="200" height="170" /></td>
				</tr>
				<tr>
					<td><center><input type="submit" name="p11" value="Añadir al carrito"/></center></td>
				</tr>
			</table>
		</div>
		<div id="capa12">
			<table>
				<tr>
					<td><img src="img/p11.jpg" width="200" height="170" /></td>
				</tr>
				<tr>
					<td><center><input type="submit" name="p12" value="Añadir al carrito"/></center></td>
				</tr>
			</table>
		</div>
		<div id="capa13">
			<table>
				<tr>
					<td><img src="img/p12.jpg" width="200" height="170" /></td>
				</tr>
				<tr>
					<td><center><input type="submit" name="p13" value="Añadir al carrito"/></center></td>
				</tr>
			</table>
		</div>
		
	</div>
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
        $sql0 = "select * from car;";
        

        if ($result = mysqli_query($con,$sql0)) {

        /* saltar a la fila numero 400 */
        for($z = 0; $z<=20; $z++){
            $result->data_seek($z);
        }

        /* obtener fila */
        $row = $result->fetch_row();

        printf ($row[0]);

        /* librar resultados */
        $result->close();
        }
    ?>
</body>
</html>