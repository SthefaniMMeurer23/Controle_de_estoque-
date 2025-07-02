<?php
    include 'conexaoEstoque.php';

    $sql = "SELECT * FROM cadastro";
    $resultado = $mysqli->query($sql);

    if ($resultado->num_rows > 0) {
        echo " <table border='1' cellpading='5' > ";  
        echo "
        <tr><th>idUsuario</th>
        <th>Nome</th>
        <th>Senha</th>
        <th>Tempo Logado</th></tr>" ;   

        while ($row = $resultado->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['senha'] . "</td>";
            echo "<td>" . $row['tempoLogado'] . "</td>" ;   
            echo "</tr>";
        }
        echo "</table>";
       } else {
        echo "<p>Nenhum cliente cadastrado</p>";
        }
    










?>