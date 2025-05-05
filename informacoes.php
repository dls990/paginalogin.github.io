<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $nome = $_POST['nome'] ?? 'Visitante';
    $sobrenome = $_POST['SobreNome'] ?? 'Visitante';
    $email = $_POST['Email'] ?? 'Visitante';
    $datadenascimento = $_POST['Data-de-nascimento'] ?? 'Visitante';

    echo "<h1>Olá, $nome $sobrenome</h1>";
    echo "<p>Seu email é: $email</p>";
    echo "<p>Data de Nascimento: $datadenascimento</p>";
    ?>
</body>
</html>