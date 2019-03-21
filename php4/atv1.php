<!DOCTYPE html>
<html>
<head>
	<title>Atividade PHP 4</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/prism.css">
	<link rel="stylesheet" type="text/css" href="estilos.css">
	
</head>
<body class="container-fluid">
	<script type="text/javascript" src="js/prism.js"></script>
	<div class="row">
	<h1>PHP - Comparações</h1>
	<h4>Strcmp</h4>

	<p>Esta função surgiu na linguagem C e serve para comparar <b>somente</b> variáveis do tipo String</p>

	    <pre><code class="language-php">$trator = 'trator';
if(strcmp($trator,'trator') == 0)
{
	echo 'true';
}
else
{
	echo 'false';
}
//retorna um erro, pois a variável trator não existe</code></pre>



		<pre><code class="language-php">
if(strcmp(trator,'trator') == 0)
{
	echo 'true';
}
else
{
	echo 'false';
}
//retorna um erro, pois a variável trator não existe
		</code></pre>


		<pre><code class="language-php">
if(1 === '1')
    echo 'igual';
else
   echo 'diferente'; //Esta será a resposta
		</code></pre>

		<pre><code class="language-php">
if(1 == '1')
    echo 'igual'; //Esta será a resposta
else
    echo 'diferente';
		</code></pre>
	</div>
	
</body>
</html>