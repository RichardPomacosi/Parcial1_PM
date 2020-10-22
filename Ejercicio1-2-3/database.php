<?php
    $server='localhost';
    $username='root';
    $password='';
    $database='academico';

    try {
        $conn=new PDO("mysql: host=$server; dbname=$database;",$username, $password );
    } catch (PDOException $e) {
        die('Fallo en la conexion: '.$e->getMessage());
    }
?>