<?php
$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$db   = getenv('DB_NAME');
$user = getenv('DB_USERNAME');
$pass = getenv('DB_PASSWORD');

echo "<pre>";
echo "Intentando conectar a $host:$port / BD=$db\n";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $mysqli = new mysqli($host, $user, $pass, $db, (int)$port);
    echo "✅ Conectado correctamente\n";
} catch (mysqli_sql_exception $e) {
    echo "❌ ERROR: " . $e->getMessage() . "\n";
}
