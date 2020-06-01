<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Datos Persona</title>
</head>
<body>
    <?php

    include '../../config/conexioBD.php';

    $codigo = $_POST["codigo"];

    date_default_timezone_set("America/Guayaquil");

    $fecha = date("Y-m-d H:i:s", time());
    $sql = "DELETE FROM usuario WHERE usu_codigo = $codigo";

    if($conn->query($sql) === TRUE) {
        echo "<p>Se ha eliminado los datos correctamente !!!</p>";
    } else {
        echo "<p>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
    }

    echo "<a href='../../vista/usuario/index.php'>Regresar</a>";

    $conn->close();

    ?>

</body>
</html>