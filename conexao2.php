<?php

Class DatabaseConnection{

    private static $instance = null;
    private $dbconn;

    private function __construct(){
    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new PDO('mysql:dbname=clientes;host=localhost','root','');
        }

        return self::$instance;
    }
}
$db = DatabaseConnection::getInstance();
$result = $db->query("select * from cadastrados");
foreach ($result as $row) {
    echo $row["NOME"] . "\n";
}

?>
