<?php
$servername = "fdb30.awardspace.net";
$database = "3640376_bdphp";
$username = "3640376_bdphp";
$password = "!4978Gelo";
// criando conexão com o banco
$conn = mysqli_connect($servername, $username, $password, $database);
// verificando a conexão
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo 'Connected successfully - ';

?>