<?php
$conn = new mysqli('localhost', 'root', '', 'bethera');
if ($conn->connect_error) { die('Erro: ' . $conn->connect_error); }
?>