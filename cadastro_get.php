<?php

$nome=$_GET["nome"];

$email=$_GET["email"];

$telefone=$_GET["telefone"];

$conexao=mysqli_connect("fdb25.awardspace.net","3250829_finalizandosop","0804rosa","3250829_finalizandosop");
if (!$conexao)
	die ("Ocorreu o seguinte erro -> ".msqli_error());

$query="INSERT INTO `3250829_finalizandosop`.`asuost` (`nome`,`email`, `telefone`, `id`) VALUES ('".$nome."','".$email."', '".$telefone."', default)";

mysqli_query($conexao,$query);

?>
