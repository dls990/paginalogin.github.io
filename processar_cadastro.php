<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $data_nascimento = $_POST["data_nascimento"];
    $email = $_POST["email"];

    // Aqui você pode adicionar a lógica para salvar os dados do participante
    // em um banco de dados, enviar um e-mail de confirmação, etc.

    echo "<!DOCTYPE html>";
    echo "<html lang='pt-br'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Cadastro Realizado | Feira Tecnológica 2025</title>";
    echo "<link rel='stylesheet' href='style.css'>";
    echo "</head>";
    echo "<body>";
    echo "<header>";
    echo "<div class='container'>";
    echo "<h1>Cadastro Realizado</h1>";
    echo "<nav>";
    echo "<ul>";
    echo "<li><a href='index.html'>Início</a></li>";
    echo "<li><a href='sobre_curso.html'>Sobre o Curso</a></li>";
    echo "<li><a href='cadastro.html'>Cadastro</a></li>";
    echo "<li><a href='contato.html'>Contato</a></li>";
    echo "</ul>";
    echo "</nav>";
    echo "</div>";
    echo "</header>";
    echo "<section class='container content-section'>";
    echo "<h2>Cadastro Realizado com Sucesso!</h2>";
    echo "<p>O participante <strong>" . htmlspecialchars($nome) . "</strong> foi cadastrado com sucesso.</p>";
    echo "<p>Aguarde novidades sobre a feira!</p>";
    echo "</section>";
    echo "<footer>";
    echo "<div class='container'>";
    echo "<p>&copy; 2025 Feira Tecnológica | Todos os direitos reservados.</p>";
    echo "</div>";
    echo "</footer>";
    echo "</body>";
    echo "</html>";

} else {
    // Se alguém tentar acessar diretamente este arquivo
    header("Location: cadastro.html");
    exit();
}
?>