<?php
// Activar errores visibles
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h2>Validando conexión a bases de datos...</h2>";

// MySQL con puerto 3306 explícito
$mysql = mysqli_connect("mysqlprod21.mysql.database.azure.com", "Tiancris", "#Zarache060221", "", 3306);

if ($mysql) {
    echo "<p style='color:green;'>✅ Conexión exitosa a MySQL</p>";
} else {
    echo "<p style='color:red;'>❌ Error MySQL: " . mysqli_connect_error() . "</p>";
}

// PostgreSQL ya especifica puerto 5432 en la cadena
$conn = pg_connect("host=postprd21.postgres.database.azure.com port=5432 dbname=postgres user=Tiancris password=#Zarache060221 sslmode=require");

if ($conn) {
    echo "<p style='color:green;'>✅ Conexión exitosa a PostgreSQL</p>";
} else {
    echo "<p style='color:red;'>❌ Error PostgreSQL: " . pg_last_error() . "</p>";
}
?>
