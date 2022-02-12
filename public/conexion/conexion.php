<?php
header("access-control-allow-origin: *");
$hostname = 'localhost'; // Máquina local 
$database = 'registro_fotos_bd';
$username = 'root';
$password = '';
// Conectarse a MySQL con extensión MySQLi 
$mysqli = new mysqli($hostname, $username, $password, $database);


$queryConexion = "";
$queryView = array();
$query = "SELECT id, name, location, latlon
FROM projects";
$resultado = $mysqli->query($query);
while ($rows = $resultado->fetch_assoc()) {
    $ubicacionid = trim ($rows['id']);
    $ubicacionnombre = trim ($rows['name']);
    $ubicacionlocalidad = trim ($rows['location']);
    $ubicaciongeoloc  = trim($rows['latlon']);
    $latlon = explode(",", $ubicaciongeoloc);
    $latitud = $latlon[0];
    $longitud  = $latlon[1];
	$queryView [] = array (
        'id' => $ubicacionid,
        'name' => $ubicacionnombre,
        'location' => $ubicacionlocalidad,
        'latitud' => $latitud,
        'longitud' => $longitud
    );
}

$queryConexion = json_encode($queryView);
echo $queryConexion;
