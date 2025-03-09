<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletando os dados do formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Configurações do e-mail
    $to = "alinemendes.interiores@gmail.com"; // Substitua com o seu e-mail
    $subject = "Mensagem de Contato de $name";
    $body = "Nome: $name\nE-mail: $email\nMensagem:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    // Enviar e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Mensagem enviada com sucesso!</p>";
    } else {
        echo "<p>Erro ao enviar a mensagem. Tente novamente.</p>";
    }
}
?>