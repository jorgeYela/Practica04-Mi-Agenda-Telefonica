# Practica04---Mi-Agenda-Telefonica
<ul>
  <li>1.	Diseñar adecuadamente elementos gráficos en sitios web en Internet. </li>
  <li>2.	Crear sitios web aplicando estándares actuales. </li>
  <li>3.	Desarrollar aplicaciones web interactivas y amigables al usuario.</li>
</ul>

<h2>Desarrollo BD</h2>
<p>La BD consiste de dos tablas para poder almacenar los datos tanto de Usuarios como de Teléfonos pertenecientes a cada usuario. En las características del usuario consta un código único para su identificación, en los datos personales podemos encontrar la cedula, nombres, apellidos, dirección de domicilio, correo, contraseña para que pueda entrar al sistema y la especificación del tipo de usuario(A para administrador y U para usuario normal). En la tabla Telefono encontramos un código que sirve como identificador, su respectivo numero de teléfono el tipo de operadora (C Claro, T Tuenti, M Movistar y O otros) y la clave foránea para poderla relacionar con el usuario.</p>
<p></p>
<h2>2.Los usuarios “anónimos” pueden registrarse en la aplicación a través de un formulario de creación de cuentas.</h2>
<p>CrearUsUARIO. La implementación del código se da en una etiqueta de tipo form la cual mediante el metodo POST no dirigirá a una página la cual insertará los datos en la Base de Datos.</p>
<p>Básicamente lo que hace esta pagina es tomar los valores de las etiquetas input, identifica los valores(name) de cada etiqueta input, toma estos valores y los almacena en cada variable. Posteriormente se procede a elaborar una consulta sql en la cual usamos un INSERT para poder insertar los datos antes mencionados en la tabla Usuario, luego en el caso de que este proceso fue satisfactorio regresaremos a la pagina de crear usuario caso contrario nos dará un error avisandonos cual fue la excepción. </p>
<p></p>
<h2>3.Un usuario puede iniciar sesión usando su correo y contraseña:</h2>
<p>Se reciben los parámetros por id, haciendo con esto una consulta para obtener el usuario solicitado</p>
<p></p>
<h2>4.Los usuarios con rol de “admin” pueden: agregar, modificar, eliminar, buscar, listar y cambiar la contraseña de cualquier usuario de la base de datos.</h2>
<p>interfaz Administrativa.La interfaz gráfica cuenta con todo lo especificado se puede ingresar los datos en la misma interfaz luego en caso de ser necesario se redirecciona a otra interfaz pero siempre se regresa a la misma. </p>
<p>Agregar Administrador. El formulario cuenta con los inputs necesarios para llenar los registros de la tabla usuarios. Esta ventana se implementó para agregar Administrador y Usuario.El siguiente archivo recibe como parámetros la cedula, nombres, apellidos, dirección, correo y una contraseña. El archivo al momento de ser llamado toma los datos de los inputs mediante el método post posteriormente se procede a crear una consulta sql de tipo Insert con el fin de implementar estos datos en nuestra BD. En caso de que todo salga correcto no saldrá nada y nos redirigirá a la ventana administrativa caso contrario nos avisara la excepción y nos llevará a la ventana administrativa.El siguiente archivo recibe como parámetros la cedula, nombres, apellidos, dirección, correo y una contraseña. El archivo al momento de ser llamado toma los datos de los inputs mediante el método post posteriormente se procede a crear una consulta sql de tipo Insert con el fin de implementar estos datos en nuestra BD. En caso de que todo salga correcto no saldrá nada y nos redirigirá a la ventana administrativa caso contrario nos avisara la excepción y nos llevará a la ventana administrativa.L a única diferencia entre este método y el de agregar Administrador es que para el administrador en el campo final del INSERT se le asigna el carácter “A” en cambio para usuario normal el carácter “U”.</p>
<p>Eliminar Usuario. En este formulario se pide el numero de cedula de la persona a la que se quiere eliminar de la BD. Posteriormente se le da en el botón eliminar el cual ara el proceso antes mencionado. Después de Haber clickeado en el botón aceptar, el formulario nos dirigirá al formulario antes presentado, el cual, de acuerdo a las especificaciones nos solicitaba que se presente el formulario con los datos de la persona la cual se va a eliminar el registro. Este archivo consta de dos tipos de código, uno html y otro php. En si lo que hace el archivo es tomar el código de la persona el cual fue presentado en el primer input en el formulario anterior. Posteriormente con este código se crea una consulta de tipo SELECT la cual nos retorna un conjunto de datos, en el caso de que no sea así nos dará una excepción diciendo que el numero de cedula o el usuario no están registrados en la BD.</p>
<p>Modificar Usuario. En este formulario se pide el numero de cedula de la persona a la que se quiere eliminar de la BD. Posteriormente se le da en el botón eliminar el cual ara el proceso antes mencionado. Este archivo consta de dos tipos de código, uno html y otro php. En si lo que hace el archivo es tomar el código de la persona el cual fue presentado en el primer input en el formulario anterior. Posteriormente con este código se crea una consulta de tipo SELECT la cual nos retorna un conjunto de datos, en el caso de que no sea así nos dará una excepción diciendo que el numero de cedula o el usuario no están registrados en la BD.Para finalizar el formulario nos redireccionará a la ventana principal del Administrado.</p>
<p>Listar Usuario. La tabla posee todos los atributos más relevantes de la tabla usuario. Para que el administrador pueda reconocer y llevar un correcto registro de las personas también se le agregó la característica de tipo de Usuario. La siguiente página es una mezcla de código PHP con HTML. Básicamente lo que hace esta pagina es crear una tabla con columnas que corresponden a los atributos de la tabla de la BD Usuario. Dentro del codigo php encontramos lo que es el codigo php el cual establece la conexión con la BD posteriormente se realiza una sentencia sql la cual selecciona todos los datos de la tabla usuario, luego estos datos son almacenados o escritos dentro de las celdas de la tabla que es visible al usuario, una vez terminado este proceso se cierra la conexion con la BD.</p>
<p>Recuperar Contraseña . Para poder Restablecer la Contraseña de un usuario se piden dos parámetros en el formulario: el numero de cedula y la nueva contraseña.Primeramente se establece la conexión con la base de datos, luego se toman los valores de la cédula y la contraseña del formulario anterior mediante el método $_POST, posteriormente se implementa una sentencia sql de tipo UPDATE con el fin de buscar y editar los cambios deseados, en el caso de que el usuario exista y el proceso se desarrolle con éxito nos redireccionará a la página principal del administrador, caso contrario nos presentará la excepción y igual nos redireccionará a la página principal del administrador.</p>
<p></p>
<h2>5.Los usuarios con rol de “user” pueden modificar, eliminar y cambiar la contraseña de su usuario.</h2>
<p>En esta ventana hemos agregado la posibilidad de agregar cuantos números telefónicos el usuario desee.
A continuación, el código de la modificación de usuario sin privilegios. 
Donde se le paso como parámetro mediante el método GET el código del usuario logeado, y mediante este se harán las respectivas modificaciones que el usuario desee. 
</p>
<p>A continuación, el código de la eliminación de usuario sin privilegios.
Donde se le paso como parámetro mediante el método GET el código del usuario logeado, y mediante este se eliminara el usuario en cuestion. 
</p>
<p></p>
<h2>1.Un usuario “anónimo”, es decir, un usuario que no ha iniciado sesión puede acceder únicamente a los archivos de la carpeta pública.
2.Un usuario con rol de “admin” puede acceder únicamente a los archivos de la carpeta admin → vista → admin; y admin → controladores → admin
 3.Un usuario con rol de “user” puede acceder únicamente a los archivos de la carpeta admin → vista → user; y admin → controladores → user
</h2>
<p>El código presentado nos permite manejar sesiones mediante el método $_SESSION. este código fue implementado al momento del login. Nuestro login lo que hace es, dependiendo del tipo de usuario redirecciona a una ventana en específico, por eso esta repetido el código.</p>
<p>El codigo presentado esta dentro del php cerrarSesion, tal como su nombre indica este archivo destruye la sesion iniciada y nos redirecciona a la ventana principal.</p>
<p></p>
<h2>Resultados Obtenidos</h2>
<ul>
  <li>1.	Los estudiantes son capaces de implementar herramientas web (HTML, CSS, JS, PHP, SQL) para poder desarrollar soluciones a diferentes problemas.</li>
  <li>2.	Los estudiantes son capaces de establecer una conexión a una BD desde una página Web y desarrollar diferentes tipos de interacciones.</li>
  <li>3.	Los estudiantes son capaces de interactuar con la BD mediante el uso de PHP.</li>
  <li>4.	Los estudiantes son capaces de desarrollar interfaces gráficas con un funcionamiento interno óptimo.</li>
  <li>5.	Los estudiantes son lo suficiente hábiles para manejar lenguajes desarrollados para la Web.</li>
  <li>6.	Los estudiantes aprendieron a programar en PHP.</li>
</ul>

<h2>Concluciones</h2>
<ul>
  <li>1.	Los estudiantes son lo suficiente capaces para desarrollar páginas web de diferentes tipos y con la facultad de satisfacer las diferentes necesidades que se dan en la actualidad mediante el uso de diferentes herramientas, así como su correcta implementación de una BD para almacenar la información que sea pertinente.</li>
  <li>2.	Los estudiantes han desarrollado diferentes habilidades y competencias en la programación orientada a la web, utilizando herramientas basadas en HTML, CSS, JS, PHP.</li>
  <li>3.	El lenguaje de programación es una herramienta muy útil al momento de que nos encontremos en la necesidad de que nuestra página web necesite almacenar algún tipo de información, PHP a demostrado ser una herramienta lo suficientemente poderosa para llevar a cabo esta función como intermediaria entre Web y BD.</li>
</ul>

<h2>Recomendaciones</h2>
<ul>
  <li>1.	Tratar de verificar el diseño en diferentes navegadores. </li>
  <li>2.	En caso de dudas recurrir a la información proporcionada por el docente o consultarlo en las horas prácticas.</li>
  <li>3.	En caso de que nuestras sentencias SQL retornan valores vacíos revisar que el método POST este tomando algún dato, en el caso de que no esté tomando nada verificar el name de las variable input.</li>
  <li>4.	En caso de que al momento de tratar de un objeto y este nos retorne varios tratar de verificar nuestras sentencias SQL y verificar que los datos se traten de la manera que se debe(tipo varchar o Integer)</li>
  <li>5.	Tener cuidado con los nombres repetidos de las variables ya que pueden dar errores y alargar el tiempo de desarrollo </li>
  <li>6.	En caso de que hagamos cambios en las aplicaciones y estas no se vean en el navegador(aun estando en modo incógnito), una solución sería cerrar el navegador, detener xampp y posteriormente volver abrir el navegador y probar,</li>
</ul>
