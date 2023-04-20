<?php
// Empfänger-E-Mail-Adresse
$to = "deine@email.de";

// Betreff der E-Mail
$subject = "Kontaktformular Nachricht";

// Sammeln Sie die Informationen aus dem Formular
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"]; // Fügen Sie die Telefonnummer hinzu
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
$email_body .= "E-Mail: $email\n";
$email_body .= "Telefon: $phone\n\n"; // Fügen Sie die Telefonnummer zum E-Mail-Text hinzu
$email_body .= "Nachricht:\n$message\n";

// Setzen Sie den "From" Header für die E-Mail
$headers = "From: $email";

// Senden Sie die E-Mail
mail($to, $subject, $email_body, $headers);

// Senden Sie dem Benutzer eine Kopie der E-Mail
$user_subject = "Kopie Ihrer Kontaktformular Nachricht";
$user_message = "Vielen Dank f&uuml;r Ihre Nachricht. Hier ist eine Kopie Ihrer E-Mail:\n\n";
$user_message .= $email_body;
mail($email, $user_subject, $user_message, "From: $to"); // Senden Sie die Kopie an den Benutzer

header("Location: danke.html"); // Leiten Sie den Benutzer zurück zur Hauptseite
?>
