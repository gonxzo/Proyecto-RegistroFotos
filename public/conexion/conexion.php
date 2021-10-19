<?php
header("access-control-allow-origin: *");
$hostname = 'localhost'; // Máquina local 
$database = 'asistencia_bd';
$username = 'root';
$password = '';
// Conectarse a MySQL con extensión MySQLi 
$mysqli = new mysqli($hostname, $username, $password, $database);


$queryConexion = "";
$queryView = array();
$query = "SELECT id, nombre, localidad, latlon
FROM proyectos";

$resultado = $mysqli->query($query);

while ($rows = $resultado->fetch_assoc()) {
    $ubicacionid = trim ($rows['id']);
    $ubicacionnombre = trim ($rows['nombre']);
    $ubicacionlocalidad = trim ($rows['localidad']);
    $ubicaciongeoloc  = trim($rows['latlon']);
    $latlon = explode(",", $ubicaciongeoloc);
    $latitud = $latlon[0];
    $longitud  = $latlon[1];
	$queryView [] = array (
        'id' => $ubicacionid,
        'nombre' => $ubicacionnombre,
        'localidad' => $ubicacionlocalidad,
        'latitud' => $latitud,
        'longitud' => $longitud
    );
}

$queryConexion = json_encode($queryView);
echo $queryConexion;
