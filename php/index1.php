<html>
	<head>
		<meta charset="UTF-8">
        <script language="javascript">
            /*
            function pag_1(){
                window.open()
                location.href = http://127.0.0.1/a/proyecto/cpu.html
            }
            
            function pag_1 (url){
                window.open(url, "Captuar CPU", "width=401, height=401").moveTo(0,0).resizeTo(401,401);
            }
            function pag_2 (url){
                window.open(url, "Registrarse", "width=400, height=400");
            }
            function pag_3(url){
                window.open(url, "Capturar GPU", "width=400, height=400");
            }
            funcion pag_4(url){
                window.open(url, "Capturar memoria", "width=400, height=400");
            }
            */
        </script>
	</head>
	<body>
        <!--
		<div id="content">
			<form action="php/ejec.php" method="get">
				<table>
					<tr>
						<td colspan="4"><input type="text" name="var1" placeholder="Usuario"></td>
					</tr>
					<tr>
						<td colspan="4"><input type="password" name="var2" placeholder="Contraseña"></td>
					</tr>
					<tr>
						<td><input type="submit" name="btn1" value="Iniciar sesión"></td>
						<td></td>
                        <td></td>
					</tr>
				</table>
			</form>
            <input type="submit" value="Registrarse" onclick = "location='http://127.0.0.1:80/a/proyecto/index.html'"/>
            <input type="submit" value="Capturar CPU" onclick = "pag_1()"/>
		</div>
        -->
        <input type="submit" onclick="pag_1('http://127.0.0.1/a/proyecto/cpu.html')" value="Capturar CPU">
        <input type="submit" onclick="pag_4('http://127.0.0.1/a/proyecto/memoria.html')" value="Capturar memoria">
        <input type="submit" onclick="pag_3('http://127.0.0.1/a/proyecto/gpu.html')" value="Capturar GPU">
        <form action="php/car.php" method="get">
            <input type="submit" onclick="new()" value="Nuevo">
        </form>
        <input type="submit" onclick="pag_2('http://127.0.0.1/a/proyecto/reg1.html')" value="Registrarse">
        <input type="submit" onclick="pag_4('http://127.0.0.1/a/proyecto/login.html')" value="Iniciar sesión">
        <script src="scripts/pag.js"></script>
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

        $sql0 = "select * from cpu;";
        

        if ($result = mysqli_query($con,$sql0)) {

        /* saltar a la fila numero 400 */
        $result->data_seek(1);

        /* obtener fila */
        $row = $result->fetch_row();

        printf ("Ciudad: %s  Código de país: %s\n", $row[0], $row[1]);

        /* librar resultados */
        $result->close();
        }
    ?>
    </body>
</html>