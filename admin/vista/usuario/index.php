<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>USUARIO LOGEADO</title>
</head>
<body>
    <table style="width:100%">
        <tr>
            <th>Cedula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Direccion</th>
            <th>Correo</th>
            <!--<th>Telefono</th>-->
        </tr>
        <?php

            include '../../../config/conexioBD.php';
            $v1 = $_GET['codigo'];
            
            $sql = "SELECT * FROM usuario WHERE usu_codigo='$v1'";

            $usuario = isset($_POST["usuario69"]) ? trim($_POST["usuario69"]) : null;

            $sql = "SELECT * FROM usuario";
            $result = $conn->query($sql);

            if($result->num_rows > 0) {

                while($row = $result->fetch_assoc()) {

                    echo "<tr>";
                    echo " <td>" .$row["usu_cedula"] . "</td>";
                    echo " <td>" .$row["usu_nombres"] . "</td>";
                    echo " <td>" .$row["usu_apellidos"] . "</td>";
                    echo " <td>" .$row["usu_direccion"] . "</td>";
                    echo " <td>" .$row["usu_correo"] . "</td>";
                    //echo " <td>" .$row["tel_numero"] . "</td>";
                    echo " <td> <a href='eliminar.php?codigo=" .$row['usu_codigo'] . "'>Eliminar</a> </td>";
                    echo " <td> <a href='modificar.php?codigo=" .$row['usu_codigo'] . "'>Modificar</a> </td>";
                    echo " <td> <a href='cambiar_contrasena.php?codigo=" .$row['usu_codigo'] . "'>Cambiar Contraseña</a> </td>";
                    echo "</tr>";

                }

            } else {

                echo "<tr>";
                echo " <td colspan='7'>No existen usuarios registrados en el sistema </td>";
                echo "</tr>";

            }

            $conn->close();

        ?>
    </table>
    
</body>
</html>