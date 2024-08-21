<?php
    class Cadastro {
        public $nome, $senha, $email, $dataNascimento;
        function imprimir ($nome, $senha, $email, $dataNascimento){
            echo "Nome: $nome </br>";
            echo "Senha: $senha </br>";
            echo "Email: $email </br>";
            echo "Data de Nascimento: $dataNascimento </br>";
        }
    }
    $pessoa = new Cadastro();
    $pessoa->imprimir($_POST["nome"],
                      $_POST["senha"],
                      $_POST["email"],
                      $_POST["dataNascimento"]);






?>