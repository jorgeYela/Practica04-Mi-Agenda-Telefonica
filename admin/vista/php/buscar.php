<?php

    include '../../../config/conexioBD.php';

    $salida = "";
    $query = "SELECT * FROM usuario, telefono WHERE telefono.tel_fk_usuario = usuario.usu_codigo ORDER BY usu_codigo";

    if(isset($_POST['consulta'])) {
        $q = $conn->real_escape_string($_POST['consulta']);
        $query = "SELECT usuario.usu_codigo, usuario.usu_cedula, usuario.usu_nombres, usuario.usu_apellidos, usuario.usu_direccion, usuario.usu_correo, telefono.tel_numero
                  FROM usuario, telefono
                  WHERE telefono.tel_fk_usuario = usuario.usu_codigo AND usu_nombres LIKE '%" .$q. "%' OR usu_cedula LIKE '%" .$q. "%'";
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
                            <td>Numero</td>
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
                        <td>" .$fila['tel_numero']."</td>
                    </tr>";
        }

        $salida.="</tbody></table>";

    } else {

        $salida.="No hay datos :(";

    }

    echo $salida;

    $conn->close();

?>