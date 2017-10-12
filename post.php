<html>
<head>
<title>Post</title>
</head>
<body>
<h1 align="center">Modulo con post</h1>
<header>
<nav align="center"> <a href="index.html">Home</a>
    <a href="get.php">Get</a>
    <a href="post.php">Post</a>
    <a href="server.php">Server</a>
</nav>
</header>
<br><br>
<form align="center" action="post.php" method="post">
Nome <input type="text" name="nome" size="20">
<br><br>
Cognome <input type="text" name="cognome" size="20">
<br><br>
Sesso: 
<input type="radio" name="genere" value="maschio" checked>Maschio
<input type="radio" name="genere" value="femmina">Femmina
<input type="radio" name="genere" value="altro">Altro<br>
<br>
E-mail <input type="text" name="email" size="30"><br><br>
<input type="submit" name="invio" value="Registra" />
<input type="reset" name="cancella" value="Anulla" />
</form><hr>
<?php
if(isset($_POST["invio"]))
{
	$nome = $_POST["nome"];
	$cognome = $_POST["cognome"];
	$genere = $_POST["genere"];
	$email = $_POST["email"];
	echo "La richiesta a nome di $nome $cognome ($genere) è stata registrata.<br>";
	echo "Con indirizzo e-mail: $email.<br>";
	echo "La richiesta è arrivata alle ore ", date("H:i:s "),"del giorno: ", date("d-m-Y");
}
?>
<br><br>
<footer><hr>
<p align="center">
Creato da Daniele Luciani e Mattia Orazi
</p>
</footer>
</body>
</html>