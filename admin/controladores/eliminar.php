<?php
    //incluir conexión a la base de datos
    include '../../config/conexioBD.php';

    $cedula =  isset($_POST["codigo"]) ? trim($_POST["codigo"]) : null;
    $sql = "DELETE  FROM usuario WHERE usu_cedula LIKE '%" .$cedula. "%'";
    if ($conn->query($sql) === TRUE) {
        echo '<script language="javascript">alert("Usuario Eliminado Exitosamente"); window.location.href="../../admin/vista/html/ventana_admin.php"</script>';
    } else {
        echo "<p>Error: " . $sql . "<br>" . mysqli_error($conn) . "</p>";
    }
    echo "<a href='../../vista/usuario/index.php'>Regresar</a>";
    $conn->close();

?>
