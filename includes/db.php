<?php
$conn = new mysqli('localhost', 'root', '', 'serplus');
if ($conn->connect_error) { die('Erro: ' . $conn->connect_error); }
?>