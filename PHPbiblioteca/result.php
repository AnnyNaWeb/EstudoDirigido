<!doctype html>
<html>
<head>

<meta charset="ISO-8859-1">
<style>
#um {
	width: 25%;
	margin-left:auto;
	margin-right:auto;
	padding: 5px;
	height: auto;
	background-color:#CCC5B5;
	border: solid 3px black;
	border-radius: 10px;
	font-size:18px;
}

#dois {
	padding: 5px;
	height: auto;
	border-top: solid 3px black;
	font-size:16px;
}
</style>
<meta charset="iso-8859-1">
<title>Recibo</title>
</head>

<body>

<div id="um">
Caro <?php echo $_GET["ocup"]; ?> confira abaixo, os dados de sua locacao:

<div id="dois">
<br>
<strong>Livro:</strong> <?php echo $_GET['bookname']; 



$f = array();
array_push($f, )



?> <br/>
<strong>Data da Locação: <?php echo date("d/m/Y"); ?> </strong>  <br/>
<strong>Data de devolução:</strong>
</div>



</div>
</body>
</html>