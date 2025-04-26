<?php
echo "<h2>Validando conexión a bases de datos...</h2>";

// Conexión a MySQL
$mysql_host = "mysqlprod21.mysql.database.azure.com";
$mysql_user = "Tiancris";
$mysql_pass = "#Zarache060221";

$mysql = mysqli_connect($mysql_host, $mysql_user, $mysql_pass);

if ($mysql) {
    echo "<p style='color:green;'>✅ Conexión exitosa a MySQL</p>";
} else {
    echo "<p style='color:red;'>❌ Error MySQL: " . mysqli_connect_error() . "</p>";
}

// Conexión a PostgreSQL
$pg_host = "postprd21.postgres.database.azure.com";
$pg_user = "Tiancris";
$pg_pass = "#Zarache060221";
$pg_db   = "postgres";

$conn_string = "host=$pg_host port=5432 dbname=$pg_db user=$pg_user password=$pg_pass sslmode=require";
$pg = pg_connect($conn_string);

if ($pg) {
    echo "<p style='color:green;'>✅ Conexión exitosa a PostgreSQL</p>";
} else {
    echo "<p style='color:red;'>❌ Error PostgreSQL: " . pg_last_error() . "</p>";
}
?>
