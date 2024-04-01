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
    $remitente= "Centro RENACER";
    $cuerpo="
    <html> 
    <meta charset='UTF-8'>
    <body>
      <h3> Cliente: $nombre</h3>
      <h3> Correo: $correo </h3> 
      <h3> Teléfono de Contacto: $telefono</h3>
      <h3> Fecha de Cita: $fecha</h3>
      <h3> Departamento: $departamento </h3>
      <h3> Especialista: $especialista </h3>
      <h3> Horario de Consulta: $hora </h3>
      <h3> $mensaje </h5>
      <h4>Centro RENACER 2024</h4>
    </body> 
    </html> 
    ";
    $sheader="From:".$remitente."\n";
    $sheader=$sheader."X-Mailer:PHP/".phpversion()."\n";
    $sheader=$sheader."Mime-Version: 1.0\n";
    $sheader=$sheader."Content-Type: text/html; charset=utf-8\n";
    mail($correo2,$cuerpo,$sheader,$mensaje); 


      header("Location: ../index.html");
      


?>
 
