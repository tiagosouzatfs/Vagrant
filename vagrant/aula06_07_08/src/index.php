<?php
echo "Testando conexao <br /> <br />";
$servername = "192.168.1.62"; # na aula 05 usamos o mysql e na aula 06 o mysqlserver
$username = "phpuser";
$password = "pass";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
echo "Connetado com sucesso";

?>
