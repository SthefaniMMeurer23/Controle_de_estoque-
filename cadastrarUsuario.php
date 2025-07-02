<?php
    ini_set('display_erros',1);
    error_reporting(E_ALL);
    include 'conexaoEstoque.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nomeUsuario = $_POST['nomeUsuario'];
        $senha = $_POST['senha'];
        $tempoLogado = $_POST['tempoLogado'];
    
        $sql = "INSERT INTO cadastro(nome, senha,tempo logado)
         VALUES ('$nomeUsuario', '$senha','$tempoLogado')";

         if ($mysqli->query($sql)) {
            echo "Usuario cadastrado";
         } else {
            echo "Erro " . $mysql->error;
         }
    }
?>