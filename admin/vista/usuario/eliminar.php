<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Eliminar Datos de Persona Normal</title>
</head>
<body>
    <?php

        $codigo = $_GET["codigo"];
        $sql = "SELECT * FROM usuario where usu_codigo=$codigo";
        
        include '../../../config/conexioBD.php';

        $result = $conn->query($sql);

        if($result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
            ?>

                <form id="formularioEliminar" method="POST" action="../../controladores/eliminar_norm.php">
                    <input type="hidden" id="codigo" name="codigo" value="<?php echo $codigo ?>" />
                    <label for="cedula">Cedula(*)</label>
                    <input type="text" id="cedula" name="cedula" value="<?php echo $row["usu_cedula"]; ?>" disabled/>
                    <br>
                    <label for="nombres">Nombres(*)</label>
                    <input type="text" id="nombres" name="nombres" value="<?php echo $row["usu_nombres"]; ?>" disabled/>
                    <br>
                    <label for="apellidos">Apellidos(*)</label>
                    <input type="text" id="apellidos" name="apellidos" value="<?php echo $row["usu_apellidos"]; ?>" disabled/>
                    <br>
                    <label for="direccion">Direccion(*)</label>
                    <input type="text" id="direccion" name="direccion" value="<?php echo $row["usu_direccion"]; ?>" disabled/>
                    <br>
                    <label for="correo">Correo(*)</label>
                    <input type="text" id="correo" name="correo" value="<?php echo $row["usu_correo"]; ?>" disabled/>
                    <br>
                    <input type="submit" id="eliminar" name="eliminar" value="Eliminar" />
                    <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
                </form>

            <?php
            }

        } else {

            echo "<p>Ha ocurrido un error inesperado !!!</p>";
            echo "<p>" . mysqli_error($conn) . "</p>";

        }

        $conn->close();

    ?>
</body>
</html>