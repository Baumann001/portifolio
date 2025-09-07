<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Simple validation
    if (!empty($name) && !empty($email) && !empty($message)) {
        // For demonstration, just echo the data. In production, send email or save to DB.
        echo "<h2>Obrigado, $name!</h2>";
        echo "<p>Sua mensagem foi recebida. Email: $email</p>";
        echo "<p>Mensagem: $message</p>";
        // To send email: mail($to, $subject, $message, $headers);
    } else {
        echo "<p>Erro: Todos os campos são obrigatórios.</p>";
    }
} else {
    echo "<p>Método não permitido.</p>";
}
?>
