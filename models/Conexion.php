<?php

//conexión a la db
class Database
{
    public static function Conexion()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=mydb;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        return $pdo;
	echo 'Conectado a '.$pdo->getAttribute(PDO::ATTR_CONNECTION_STATUS);
    }
}

    