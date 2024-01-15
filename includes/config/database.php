<?php
    //Conection to database
    function conectDb($host, $user, $pass = '', $database) : mysqli{
        $connection = mysqli_connect($host, $user, $pass, $database);

        if(!$connection){
            echo 'Error al conectarse a la base de datos';
            exit;
        }

        return $connection;
    }
?>