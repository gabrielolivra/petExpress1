
<?php

include './conexao.php';

    $num_cartao = $_POST['num_cartao'];
    $data = $_POST['data'];
    $cvv = $_POST['cvv'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $id_card = $_POST['id_card'];
 

    if($num_cartao != ''){
    $inserir = $conn -> query("INSERT INTO cadastrocard values('$id_card','$num_cartao','$data','$cvv','$nome','$cpf')");
    header("Location:pagamentos.php");
    }
    else{
        header("Location:erro.php");

    }
    ?>