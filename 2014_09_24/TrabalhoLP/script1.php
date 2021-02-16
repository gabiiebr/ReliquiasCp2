<html>
	<head>
		<title> Equacao do 2º Grau </title>			

	</head>

	<body>

		<div id="container" style="width:1000px;height:1000px">

			<div id="header" style="background-color:#4F94CD;text-align:center;">	
				<h1 style="margin-bottom:0;">Funcoes Matematicas</h1>			
			</div>
	
			<div id="menu" style="background-color:#5CACEE;height:500px;width:100px;float:left;">
				<b>Menu</b><br>	
				<a href="c1.html">Eq. 2 Grau</a><br>	
				<a href="c2.html">Primo</a><br>	
				<a href="c3.html">Minimo</a><br>	
				<a href="c4.html">Maximo</a><br><br>
			</div>	

			<div id="conteudo" style="background-color:#EEEEEE;height:500px;width:900px;float:left;"><br><br><br><br><br>	
				<center>
					<?php
					$a = $_POST["numero1"];
					$b = $_POST["numero2"];
					$c = $_POST["numero3"];
					if($a==null||$a==""||$b==null||$b==""||$c==null||$c=="")
						echo "Preencha o campo";
					else
					{
					$delta = ($b*$b)-((4*$a)*$c);
					
					$x1 = (-$b + sqrt($delta)) / (2 * $a);
					$x2 = (-$b - sqrt($delta)) / (2 * $a);
					
					echo "Resultados:<br>"; 
					echo "x1 = $x1<br>";
					echo "x2 = $x2<br>";
					}
					?>
				</center>
			</div>
			
			<div id="rodape" style="background-color:#4F94CD;clear:both;text-align:center;">
				<b>Colegio Pedro II - PHP</b>
			</div>

		</div>

	</body>

</html>