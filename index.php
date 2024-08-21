<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Formulário de Cadastro</h1> 
        <form action="Cadastro.php" method="POST">
            <p>Insira seu nome completo:</p>
            <input type="text" name="nome">
            <p>Senha:</p>
            <input type="password" name="senha">
            <p>Insira seu nome email:</p>
            <input type="email" name="email">
            <p>Insira sua data de nascimento</p>
            <input type="date" name="dataNascimento" min="1960-01-01" max="2100-08-21">
            </br>
            <input type="submit">
        </form>
    </div>
</body>
</html>