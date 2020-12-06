<?php
    function Abrir(){
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $baseDatos = "tickets"; //desconocida
        $conn = new mysqli($servidor,$usuario,$password,$baseDatos) or die("Error al conectar: " . $conn -> error);
        return $conn;
    }

    function Cerrar($conn) {
        $conn -> close();
    }
?>