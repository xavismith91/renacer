<?php
    $nombre =$_POST["nombre"];
    $correo = $_POST["correo"]; // correo que ingresan en el formulario
    $correo2 = 'contacto@centrorenacermx.com';// correo en donde van a llegar los datos del formulario 
    $telefono = $_POST['telefono']; // Telefono de cliente o prospecto
    $fecha = $_POST['fecha'];
    $departamento = $_POST['departamento']; 
    $especialista = $_POST['especialista'];
    $mensaje = $_POST["message"];
    $hora = $_POST['hora'];
    $remitente="contacto@centrorenacermx.com";
    $asunto= 'Confirmación de Cita';
    $cuerpo="
    <html> 
    <meta charset='UTF-8'>
    <body>

    <h1>Estimado/a Colaborador</h1>
    <h2>Nos complace informarle que hemos recibido una solicitud de cita. A continuación, encontrará los detalles de la cita:</h2>
    
      <h3> Cliente: $nombre</h3>
      <h3> Correo: $correo </h3> 
      <h3> Teléfono de Contacto: $telefono</h3>
      <h3> Fecha de Cita: $fecha</h3>
      <h3> Departamento: $departamento </h3>
      <h3> Especialista: $especialista </h3>
      <h3> Horario de Consulta: $hora </h3>
      <br>
      <br>
      <h2> $mensaje </h2>
      <br>
      <br>
      <h3>
      Por favor, confirme su asistencia a esta cita dando clic en el correo para responder esta solicitud, o para reprogramarla a la brevedad.
      </h3>
      
    </body> 
    </html> 
    ";
    $sheader="From:".$remitente."\n";
    $sheader=$sheader."X-Mailer:PHP/".phpversion()."\n";
    $sheader=$sheader."Mime-Version: 1.0\n";
    $sheader=$sheader."Content-Type: text/html; charset=utf-8\n";
   

   // if (mail($remitente,$asunto,$cuerpo,$sheader,$mensaje)) {
    if (mail($correo2,$asunto,$cuerpo,$sheader,$mensaje)) {
      // echo '<script>alert("Su Cita ha sido enviada correctamente, espere su confirmación");</script>';
    }else {
      echo '<script>alert("Verifique su información e intente de nuevo");</script>';
    }

    echo '<script>window.location.href = "../index.html";</script>';
    
?>
 

