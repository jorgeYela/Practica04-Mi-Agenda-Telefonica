<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Eliminar datos de persona</title>
</head>
<body>
 <?php

 $editarCedula =  isset($_POST["editarCedula"])?trim($_POST["editarCedula"]):null;
 
 $sql = "SELECT * FROM usuario where usu_cedula LIKE '%" .$editarCedula. "%'";
 
 include '../../config/conexioBD.php'; 
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {
 ?>
 <form id="formulario01" method="POST" action="../../admin/controladores/editar.php">
 <label for="codigo">Codigo (*)</label>
 <input type="text" id="codigov" name="codigoEditar" value="<?php echo $row["usu_codigo"]; ?>"/>
 <br>
 <label for="cedula">Cedula (*)</label>
 <input type="text" id="cedulva" name="cedulaEditar" value="<?php echo $row["usu_cedula"]; ?>"
/>
 <br>
 <label for="nombres">Nombres (*)</label>
 <input type="text" id="nombvres" name="nombresEditar" value="<?php echo $row["usu_nombres"];
?>"/>
 <br>
 <label for="apellidos">Apelidos (*)</label>
 <input type="text" id="apevllidos" name="apellidosEditar" value="<?php echo $row["usu_apellidos"];
?>"/>
 <br>
 <label for="direccion">Dirección (*)</label>
 <input type="text" id="direvccion" name="direccionEditar" value="<?php echo $row["usu_direccion"];
?>"/>
 <br>
 <label for="correo">Correo electrónico (*)</label>
 <input type="email" id="correvo" name="correoEditar" value="<?php echo $row["usu_correo"]; ?>"
/>
 <br>

 <input type="submit" id="eliminar" name="editar" value="Editar" />
 <input type="reset" id="cancelar" name="cancelar" value="Cancelar" />
 </form>
 <?php
 }
 } else {
 echo "<p>Ha ocurrido un error inesperado !</p>";
 echo "<p>" . mysqli_error($conn) . "</p>";
 }
 $conn->close();
 ?>
</body>
</html>
