<!-- <?php //Funciona si mi pagina esta en un servidor online, en un servidor local no funciona

//Estructura general

// $name = $_POST['name'];
// $email = $_POST['email'];

// $formcontent="
//     Nombre: $name \n
//     E-mail: $email
// ";

// $recipient = "REEMPLAZAR ESTO POR EL MAIL AL QUE QUERES QUE LLEGUE"; --> podemos poner muchos "email1,email2,email3"

// $subject = "REEMPLAZAR ESTO POR ASUNTO";

// $header = "From: $email \r\n";
// $header .= "Content-Type: text/plain; charset=UTF-8";
// mail($recipient, $subject, $formcontent, $header) or die("Error!");
// header("Location: index.html");

// ?> -->
<?php 

$nombre = $_POST['nombre']; //Lo que esta entre[] debe coincidir con el name del input
$correo = $_POST['correo']; //No hay limite de input, podemos poner lo que quiera
$acepto = $_POST['acepto'];

$formcontent= "
Nombre:$nombre \n
Correo electronico:$correo \n
Acepta terminos y condiciones?:$acepto


"; //El form content es lo que va a llegar al correo, si yo pongo HOLA adentro, llegara un hola --> el \n es un salto de linea para que llegue asi al correo,espaciado
  

$recipient = "gonzalohaag@gmail.com,$correo"; //La variable correo para que me llegue a mi email, y al usuario tambien,esa variable es el email que el pondra en el form

/$subject = "Este es un email de prueba-Consulta via web";
//Para personalizarlo un poco mas: $subject = "Consulta via web de ${nombre}"; y saldra el nombre completado en el formulario

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: index.html");

?>