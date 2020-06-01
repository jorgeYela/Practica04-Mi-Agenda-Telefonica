<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Crear Nuevo Usuario</title>
 <style type="text/css" rel="stylesheet">
    .error{
        color: red;
    }
 </style>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['isLogged']) || $_SESSION['isLogged'] === FALSE){
        header("Location: /Practica04-Mi-Agenda-Telefonica/public/vista/html/index.html");
        }
        //incluir conexión a la base de datos
        include '../../config/conexioBD.php'; 

        $cedula =  isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;
        $nombres = isset($_POST["nombre"]) ? mb_strtoupper(trim($_POST["nombre"]), 'UTF-8') : null;
        $apellidos = isset($_POST["apellido"]) ? mb_strtoupper(trim($_POST["apellido"]), 'UTF-8') : null;
        $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;
        $correo = isset($_POST["correo"]) ? trim($_POST["correo"]): null;
        $contrasena = isset($_POST["psw"]) ? trim($_POST["psw"]) : null;
        $numero = isset($_POST["telfini"]) ? trim($_POST["telfini"]) : null;
        $operadora = isset($_POST["operadora"]) ? trim($_POST["operadora"]) : null;

        $sql = "INSERT INTO usuario VALUES (0, '$cedula', '$nombres', '$apellidos', '$direccion',
        '$correo', MD5('$contrasena'), 'U')"; 

        if ($conn->query($sql) === TRUE) {

            echo "<p>Se ha creado los datos personales correctamemte!!!</p>";

            header("Location: ../controladores/agregar_numero.php/?cedula=$cedula");

            header("Location: ../controladores/agregar_numero.php?cedula=$cedula&numero=$numero&operadora=$operadora");

        } else {
        if($conn->errno == 1062){
            echo "<p class='error'>La persona con la cedula $cedula ya esta registrada en el sistema </p>";
        }else{
            echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
            }
        }
   

        //Cerrar BD
        //cerrar la base de datos
        $conn->close();
        echo "<a href='../vista/html/crear_usuario.html'>Regresar</a>";
    ?>

</body>
</html>