<?php

class DatabaseConnection {
    
    private static $instance = null;
    private $pdo;
    
    private function __construct() {
        //construtor privado para impedir a criação de instâncias
    }
    
    public static function getInstance() {
        if (self::$instance == null) {
        $dsn = 'mysql:dbname=clientes;host=localhost';
        $username = 'root';
        $password = '';
        self::$instance = new PDO($dsn, $username, $password);;
        }
        return self::$instance;
    }
}

$db = DatabaseConnection::getInstance();
$result = $db->query("select * from cadastrados");
foreach ($result as $row) {
    echo $row["NOME"] . "<br>";
}
?>
