<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imePrezime = $_POST["ime_prezime"];
    $email = $_POST["email"];
    $predmet = $_POST["predmet"];
    $poruka = $_POST["poruka"];

    $to = "jelena.milosavljevic.advokat@gmail.com"; // Postavite svoj e-mail
    $subject = "Novi upit sa web stranice";
    $message = "Ime i prezime: $imePrezime\n";
    $message .= "Email: $email\n";
    $message .= "Predmet: $predmet\n";
    $message .= "Poruka: $poruka\n";

    // Dodatne opcionalne postavke (samo ako su potrebne)
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Pošalji e-mail
    mail($to, $subject, $message, $headers);

    // Dodatna logika nakon slanja e-maila (npr. preusmjeravanje na zahvalnu stranicu)
    header("Location: thank_you.html");
    exit();
}
?>
