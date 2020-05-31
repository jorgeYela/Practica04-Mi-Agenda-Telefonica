<?php

    session_start();

    include '../../config/conexioBD.php';

    $usuario = isset($_POST["usuario69"]) ? trim($_POST["usuario69"]) : null;
    $contrasena = isset($_POST["contrasena69"]) ? trim($_POST["contrasena69"]) : null;

    $sql = "SELECT * FROM usuario WHERE usu_correo = '$usuario' and usu_contrasena = MD5('$contrasena')";

    $result = $conn->query($sql);

    if($result->num_rows > 0) {

        $_SESSION['isLogged'] = TRUE;
        echo "<p>Muy Bien</p>";
        header("Location: ../../admin/vista/usuario/index.php");

    } else {

        echo "<p>Muy Mal</p>";
        header("Location: ../vista/login.html");

    }

    $conn->close();

?>