<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $empresa = $_POST["empresa"];
    $servico = $_POST["servico"];
    $descricao = $_POST["descricao"];
    $preferencia_contato = $_POST["preferencia-contato"];

    $to = "alfredo.novela@outlook.com"; // Substitua pelo seu endereço de e-mail

    $subject = "Nova solicitação de cotação - Consultoria de TI";

    $message = "Nome: " . $nome . "\n";
    $message .= "E-mail: " . $email . "\n";
    $message .= "Telefone: " . $telefone . "\n";
    $message .= "Empresa: " . $empresa . "\n";
    $message .= "Serviço: " . $servico . "\n";
    $message .= "Descrição do Projeto: " . $descricao . "\n";
    $message .= "Preferência de Contato: " . $preferencia_contato . "\n";

    $headers = "From: " . $email;

    // Tente enviar o e-mail
    if (mail($to, $subject, $message, $headers)) {
        // Redirecione o usuário para uma página de confirmação após o envio bem-sucedido
        header("Location: obrigado.html");
    } else {
        // Redirecione o usuário para uma página de erro em caso de falha no envio
        header("Location: erro.html");
    }
} else {
    // Se o formulário não foi enviado corretamente, redirecione para uma página de erro
    header("Location: erro.html");
}
?>

