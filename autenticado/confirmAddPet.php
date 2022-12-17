
<?php

include './conexao.php';

    $nome_pet = $_POST['nome_pet'];
    $raca = $_POST['raca'];
    $porte = $_POST['porte'];
    $obs = $_POST['obs'];
    $id = $_POST['id_pet'];
 

    if($nome_pet != ''){
    $inserir = $conn -> query("INSERT INTO cadastropet values('$nome_pet','$raca','$porte','$obs','$id')");
    header("Location:pet.php");
    }
    else{
        header("Location:erro.php");

    }
    ?>