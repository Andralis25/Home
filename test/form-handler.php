<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $serviciu = $_POST['serviciu'];
  $nume = $_POST['nume'];
  $email = $_POST['email'];
  $telefon = $_POST['telefon'];
  $data = $_POST['data'];
  $ora = $_POST['ora'];
  $observatii = $_POST['observatii'];

  // Include config Google API + Mail
  require 'google-api-config.php';
  require 'mailer-config.php';

  // Creează eveniment Google Calendar
  create_calendar_event($serviciu, $nume, $email, $telefon, $data, $ora, $observatii);

  // Trimite email confirmare
  send_confirmation_email($serviciu, $nume, $email, $telefon, $data, $ora, $observatii);

  echo "<h2>Programarea a fost trimisă cu succes!</h2>";
  echo "<a href='programari.html'>Înapoi la programare</a>";
} else {
  header("Location: programari.html");
  exit();
}
?>
