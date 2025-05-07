<?php
function send_confirmation_email($serviciu, $nume, $email, $telefon, $data, $ora, $observatii) {
  $to = $email;  // Trimite către client
  $subject = "Confirmare programare Andralis";
  $message = "Bună, $nume!\n\n"
    . "Programarea ta a fost înregistrată:\n"
    . "Serviciu: $serviciu\n"
    . "Data: $data\n"
    . "Ora: $ora\n"
    . "Observații: $observatii\n\n"
    . "Ne vedem la salonul Andralis!";

  $headers = "From: andralis25@gmail.com";

  // Trimite email
  mail($to, $subject, $message, $headers);
}
?>
