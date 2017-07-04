<?php 
// Conexión a la base de datos 
$connection=pg_connect("host=localhost port=5432 password=123456 user=postgres dbname=proyecto"); 
$query ="INSERT INTO lonlat (lon,lat) VALUES ('$lon', '$lat')"; 

$result=pg_insert($connection, $query, $_POST );
if (!$result) {
$error.="pg_last_error($connection)<li>";
}

echo $lon;
echo $lat;

?> 