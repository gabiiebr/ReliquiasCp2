<html>
	<head>
		<title> Maximo </title>			

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
					$numero1=$_POST["numero1"];
					$numero2=$_POST["numero2"];
					if($numero1==null||$numero1==""||$numero2==null||$numero2=="")
						echo "Preencha o campo";
					else
					{
					if ($numero1==$numero2)
					echo "Os números são iguais";
					if ($numero1>$numero2)
					echo "O máximo é $numero1";
					if ($numero1<$numero2)
					echo "O máximo é $numero2";
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