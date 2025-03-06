<?php
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'musica';
                //Concecta con el SGBD, pero no le indicamos la base de datos
        $conn = mysqli_connect($hostname, $username, $password, $dbname);

        if(!$conn)
        {
            echo ("Error en la conexion: " . mysqli_connect_error());
        };
        
    ?>