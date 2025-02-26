<html>
  <head>
    <title>Title of page</title>
  </head>
  <body>
	Hoje é <?php echo date('d/m/Y'); ?>
	<br/>
	<?php 
	
	$variavel = 15;
	$variavel = "<b style='color: #FF0000;'>Agora</b> é um texto, antes era o valor $variavel.";
	echo $variavel;
		
	?> 
  </body>
</html>
