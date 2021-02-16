<html>
	<head>
		<title> Primo </title>			

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
					$res=0;
					$n=$_POST["numero"];
					if($n==null||$n=="")
						echo "Preencha o campo";
					else
					{
					if($n==0)
						echo "Zero não é nenhum dos dois";
					else
					{
					if($n==1)
						echo "O número não é primo";
					else
					{
					if($n==2)
						echo "O número é primo";
					else
					{
					for ($i=2; $i<$n;$i++)
					{
					if($n%$i==0)
						$res=1;
					}				
					if($res==0)
						echo "O número é primo";
					if($res==1)
						echo "O número não é primo";
					}
					}
					}
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