<?php

    include '../../../config/conexioBD.php';

    $salida = "";
    $query = "SELECT * FROM usuario ORDER BY usu_codigo";

    if(isset($_POST['consulta'])) {
        $q = $conn->real_escape_string($_POST['consulta']);
        $query = "SELECT usu_codigo, usu_cedula, usu_nombres, usu_apellidos, usu_direccion, usu_correo FROM usuario
        WHERE usu_nombres LIKE '%" .$q. "%' OR usu_cedula LIKE '%" .$q. "%'";
    }

    $resultado = $conn->query($query);

    if($resultado->num_rows > 0) {

        $salida.="<table class='tabla_datos'>
                    <thead>
                        <tr>
                            <td>Codigo</td>
                            <td>Cedula</td>
                            <td>Nombres</td>
                            <td>Apellidos</td>
                            <td>Direccion</td>
                            <td>Correo</td>
                        </tr>
                    </thead>
                    <tbody>";
        while($fila = $resultado->fetch_assoc()){

            $salida.="<tr>
                        <td>" .$fila['usu_codigo']."</td>
                        <td>" .$fila['usu_cedula']."</td>
                        <td>" .$fila['usu_nombres']."</td>
                        <td>" .$fila['usu_apellidos']."</td>
                        <td>" .$fila['usu_direccion']."</td>
                        <td>" .$fila['usu_correo']."</td>
                    </tr>";
        }

        $salida.="</tbody></table>";

    } else {

        $salida.="No hay datos :(";

    }

    echo $salida;

    $conn->close();

?>