

<?php

include 'conexao.php';

$id_historico = $_POST['id_historico'];
$cidade = $_POST['cidade'];
$petshop = $_POST['petshop'];
$pet = $_POST['pet'];
$num_cartao = $_POST['pagamento'];


    if($cidade != ''){
    $inserir = $conn -> query("INSERT INTO historico values('$id_historico','$cidade','$petshop','$pet','$num_cartao')");
    header("Location:pagconfirmado.php");
    }
    else{
        header("Location:erro.php");

    }
    ?>