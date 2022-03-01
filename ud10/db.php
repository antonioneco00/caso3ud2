<?php

class db {
    public function connect() {
        $mysql = new mysqli('localhost', 'root', '', 'clubbasket');
        
        if ($mysql->errno) {
            echo 'Conexion fallida';
        }
        
        return $mysql;
    }
}