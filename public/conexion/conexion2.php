<?php
header("access-control-allow-origin: *");
$hostname = 'localhost'; // Máquina local 
$database = 'fotos_db';
$username = 'root';
$password = '11235813';
// Conectarse a MySQL con extensión MySQLi 
$mysqli = new mysqli($hostname, $username, $password, $database);


$queryConexion = "";
$queryView = array();
$query = "SELECT id, idproject, document
FROM documents";
$resultado = $mysqli->query($query);
while ($rows = $resultado->fetch_assoc()) {
    $documentid = trim ($rows['id']);
    $idproject = trim ($rows['idproject']);
    $document = trim ($rows['document']);
    $queryView [] = array (
        'id' => $documentid,
        'idproject' => $idproject,
        'document' => $document,
    );
}

$queryConexion = json_encode($queryView);
echo $queryConexion;
