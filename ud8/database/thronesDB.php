<?php

class thronesDB {
    public static function connect() {
        $mysqli = new mysqli('localhost', 'root', '', 'gameofthrones');
        $mysqli->query("SET NAMES 'utf8'");
        
        if ($mysqli->connect_errno) {
            echo 'Hay un error en la conexion';
            
            die();
        }
        
        return $mysqli;
    }
}