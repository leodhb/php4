<!DOCTYPE html>
<html>
<head>
	<title>aaaaaaaa</title>
	<link rel="stylesheet" type="text/css" href="css/prism.css">
</head>
<body>
	<script type="text/javascript" src="js/prism.js"></script>
		<h1>PHP - Comparações</h1>
		<h4>Strcmp</h4>
		<p>Esta função surgiu na linguagem C e serve para comparar <b>somente</b> variáveis do tipo String. <br><br>Exemplo:</p>


		<pre style="width: 600px;"><code class="language-php" >$trator = 'trator';
if(strcmp($trator,'trator') == 0)
{
	echo 'true';
}
else
{
	echo 'false';
}</code></pre>

<p><i>Retorno: <b>
<?php  
		$trator = 'trator';
		if(strcmp($trator,'trator') == 0)
		{
			echo 'true';
		}
		else
		{
			echo 'false';
		}

?>
</b>
</i>
</p>

<br>
<p>Em PHP, ela também serve para comparar números<br><br>Exemplo:</p>

<pre style="width: 600px;"><code class="language-php" >if(strcmp(1,'1') == 0)
{
	echo 'true';
}
else
{
	echo 'false';
}</code></pre>

<p><i>Retorno: <b>
<?php  

		if(strcmp(1,'1') == 0)
		{
			echo 'true';
		}
		else
		{
			echo 'false';
		}

?>
</b>
</i>
</p>



		
</body>
</html>