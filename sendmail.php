<?php
// Empfänger-E-Mail-Adresse
$to = "deine@email.de";

// Betreff der E-Mail
$subject = "Kontaktformular Nachricht";

// Sammeln Sie die Informationen aus dem Formular
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$captcha = $_POST["captcha"];
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

// Überprüfen Sie die CAPTCHA-Antwort
$correct_answer = $num1 + $num2;
if ($captcha != $correct_answer) {
    header("Location: index.html?captcha_error=true");
    exit;
}

// Erstellen Sie den E-Mail-Text
$email_body = "Name: $name\n";
$email_body .= "E-Mail: $email\n\n";
$email_body .= "Nachricht:\n$message\n";


// Setzen Sie den "From" Header für die E-Mail
$headers = "From: $email";

// Senden Sie die E-Mail
mail($to, $subject, $email_body, $headers);
header("Location: index.html"); // Leiten Sie den Benutzer zurück zur Hauptseite
?>
