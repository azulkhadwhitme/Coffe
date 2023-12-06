<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="formulario";

    $conv =mysql_connect($servername,$username,$password,$database);

    $nombre = $_POST['fnombre']
    $apellido = $_POST['fapellido'];
    $dni = $_POST['fdni'];
    $telefono = $_POST['ftelefono'];

    $sql = "INSERT INTO formu (nombre,apellido,dni,telefono) VALUES ('$nombre','$apellido','$dni','$tel')";

    if (mysql_query($conv,$sql)) 
    {
        echo "Nuevo archivo guardado";  
    }
    else
    {
        echo "Error: ".$sql. "<br>" .mysql_error($conv);
    }
?>