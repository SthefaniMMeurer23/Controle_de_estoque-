<?php
    include 'conexao.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nomeOperador'];
        $nascimento = $_POST['dataNascinento'];
        $tempo = $_POST['tempoServico'];

        $comandosql = "INSERT INTO operadorEmpilhadeira (nomeOperador, dataNascmento, tempoServico)
                       VALUES ('$nome', '$nascimento', '$tempo')";

        if ($mysqli->query($comandosql)) {
            echo "Pessoa cadastrada";
        } else {
            echo "Erro: " . $mysqli->error;
        }
    }
?>
