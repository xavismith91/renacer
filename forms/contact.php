<?php

    $nombre =$_POST["nombre"];
    $correo = $_POST["correo"]; // correo que ingresan en el formulario
    $telefono = $_POST['telefono']; // Telefono de cliente o prospecto
    $fecha = $_POST['fecha'];
    $departamento = $_POST['departamento']; 
    $especialista = $_POST['especialista'];
    $mensaje = $_POST["message"];
    $hora = $_POST['hora'];
    $correo2 = 'sistemas@ce2000.mx';// correo en donde van a llegar los datos del formulario 
    
    // $tiposervicio = $_POST['servicio'];
    $remitente= "Centro RENACER";
    // $asunto=$_POST["subject"];
    $cuerpo="
    <html> 
    <meta charset='UTF-8'>
    <body>

    <h1>Estimado/a Colaborador</h1>
    <p>Nos complace informarle que hemos recibido su solicitud de cita y hemos programado una reunión con uno de nuestros especialistas. A continuación, encontrará los detalles de la cita:</p>
    
      <h2> Cliente: $nombre</h3>
      <h2> Correo: $correo </h3> 
      <h2> Teléfono de Contacto: $telefono</h3>
      <h2> Fecha de Cita: $fecha</h3>
      <h2> Departamento: $departamento </h3>
      <h2> Especialista: $especialista </h3>
      <h2> Horario de Consulta: $hora </h3>
      <br>
      <br>
      <h5> $mensaje </h5>
      <br>
      <br>
      <p>
      Por favor, confirme su asistencia a esta cita respondiendo a este correo electrónico o poniéndose en contacto con nosotros si necesita reprogramarla.
      </p>

      <h3> Centro RENACER </h3>
      
    </body> 
    </html> 
    ";
    $sheader="From:".$remitente."\n";
    $sheader=$sheader."X-Mailer:PHP/".phpversion()."\n";
    $sheader=$sheader."Mime-Version: 1.0\n";
    $sheader=$sheader."Content-Type: text/html; charset=utf-8\n";
    mail($correo2,$asunto,$cuerpo,$sheader,$mensaje); 


      header("Location: ../index.html");
      


?>
 
