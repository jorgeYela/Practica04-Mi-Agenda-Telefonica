<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/ventana_admin.css" type="text/css" />
    <script src="../JS/ventana_admin.js"></script>
    <title>Admin</title>
</head>

<body id="contenedor"> 
    <section id="cabecera">
        <p>LOGO</p>
    </section>
  
    <section id="menu">
        <div id="fotoAdmin">
            <p>LOGO</p>
        </div>
        <div id="margen">
            <p>NOMBRE ADMIN</p>
        </div>

        <div id="margen">
            <input type="submit" id="botones" name="agregarA" value="Agregar Administrador" onclick="aparecer1()"/>
            <input type="submit" id="botones" name="agregarU" value="Agregar Usuario" onclick="aparecer2()"/>
            <input type="submit" id="botones" name="eliminar" value="Eliminar Usuario/Admin" onclick="aparecer3()"/>
            <input type="submit" id="botones" name="modificar" value="Modificar Usuario/Admin" onclick="aparecer4()"/>
            <input type="submit" id="botones" name="buscar" value="Buscar Usuario" onclick="aparecer5()"/>
            <input type="submit" id="botones" name="listar" value="Listar Usuarios" onclick="aparecer6()"/>
            <input type="submit" id="botones" name="cambiarContrasena" value="Recuperar Contrasena" onclick="aparecer7()"/>
        </div>

    </section>
  
    <section id="contenido">
        <!--AGREGAR USUARIO ADMINISTRADOR-->
        <div id="margenCF1">
            <form  class="formulario" name="formulario_registro1" method="POST" action = "/Practica04-Mi-Agenda-Telefonica/admin/controladores/crear_admin.php">
                <input class="controles" type="text" name="Acedula" id="n1" placeholder="Ingrese su Cedula" onkeyup="validarCedula()">
                <span id="mensajeCedula" ></span><br>
    
                <input class="controles" type="text" name="Anombre" id="n1" placeholder="Ingrese su Nombre" onkeyup="validarNombre()">
                <span id="mensajenombre" ></span><br>
    
                <input class="controles" type="text" name="Aapellido" id="n1" placeholder="Ingrese su Apellidos" onkeyup="validarApellido()">
                <span id="mensajeapellido" ></span><br>
    
                <input class="controles" type="text" name="Adireccion" id="n2" placeholder="Ingrese su Direccion" >
    
                <input class="controles" type="text" name="Acorreo" id="n1" placeholder="Ingrese su Correo" onkeyup="validarCorreo()">
                <span id="mensajecorreo" ></span><br>
    
                <input class="controles" type="password" name="Apsw" id="n1" placeholder="Ingrese su Contrasena" onkeyup="validarContrasena()">
                <span id="mensajepsw" ></span><br>
    
                <p>Estoy de acuerdo con <a href="#">Terminos y condiciones</a></p>
                <input class="botones" type="submit" value="Registrar" onclick="validarCampos()">
            </form>
        </div>
        <!--AGREGAR USUARIO NORMAL-->
        <div id="margenCF2" style="display: none;">
            <form class="formulario" name="formulario_registro2" method="POST" action="/Practica04-Mi-Agenda-Telefonica/admin/controladores/cread_user.php">
                <input class="controles" type="text" name="Ucedula" id="n11" placeholder="Ingrese# su Cedula" onkeyup="validarCedula()">
                <span id="mensajeCedula" ></span><br>
    
                <input class="controles" type="text" name="Unombre" id="n12" placeholder="Ingrese su Nombre" onkeyup="validarNombre()">
                <span id="mensajenombre" ></span><br>
    
                <input class="controles" type="text" name="Uapellido" id="n13" placeholder="Ingrese su Apellidos" onkeyup="validarApellido()">
                <span id="mensajeapellido" ></span><br>
    
                <input class="controles" type="text" name="Udireccion" id="n24" placeholder="Ingrese su Direccion" >
    
                <input class="controles" type="text" name="Ucorreo" id="n51" placeholder="Ingrese su Correo" onkeyup="validarCorreo()">
                <span id="mensajecorreo" ></span><br>
    
                <input class="controles" type="password" name="Upsw" id="n16" placeholder="Ingrese su Contrasena" onkeyup="validarContrasena()">
                <span id="mensajepsw" ></span><br>
    
                <p>Estoy de acuerdo con <a href="#">Terminos y condiciones</a></p>
                <input class="botones" type="submit" value="Registrar" onclick="validarCampos()">
            </form>
        </div>

        <!--ELIMINAR USUARIO O ADMINISTRADOR-->
        <div id="margenCF3" style="display: none;">
            <form class="formulario" name="formulario_registro3" method="POST" action="/Practica04-Mi-Agenda-Telefonica/admin/controladores/EliminarUsuarioAdmin.php">
                <input class="controles" type="text" name="Ecedula" id="n172" placeholder="Ingrese# su Cedula" onkeyup="validarCedula()">
                <span id="mensajeCedula" ></span><br>
                <input class="botones" type="submit" value="Eliminar" onclick="validarCampos()">
            </form>
        </div>

        <!--EDITAR USUARIOS-->
        <div id="margenCF4" style="display: none;">
            <form class="formulario" name="formulario_registro4" method="POST" action="/Practica04-Mi-Agenda-Telefonica/admin/controladores/editarUser.php">
                <input class="controles" type="text" name="editarCedula" id="n81" placeholder="Ingrese# su Cedula" onkeyup="validarCedula()">
                <span id="mensajeCedula" ></span><br>
                <input class="botones" type="submit" value="Buscar" onclick="validarCampos()">
            </form>
        </div>

        <!--BUSCAR USUARIOS-->
        <div id="margenCF5" style="display: none;">
            <form class="formulario" name="formulario_registro4" method="POST" action="/Practica04-Mi-Agenda-Telefonica/admin/controladores/buscar.php">
                <input class="controles" type="text" name="BuscarCedula" id="n82" placeholder="Ingrese# su Cedula" onkeyup="validarCedula()">
                <span id="mensajeCedula" ></span><br>
                <input class="botones" type="submit" value="Buscar" onclick="validarCampos()">
            </form>
        </div>

        

    </section>
  
    <footer id="pie">
        <P>PARTE DE PIE DE PAGINA</P>
    </footer>
    
    
</body>
</html>