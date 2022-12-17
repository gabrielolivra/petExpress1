<?php
include 'conexao.php';

session_start();


$email = $_POST['email'];
$novoemail = $_POST['novoEmail'];
$senha = $_POST['senha'];
$novasenha = $_POST['novaSenha'];



  
    $nome = "SELECT name, email FROM cadastro";

    $resultado_nome = mysqli_query($conn, $nome);
    $resultado = mysqli_fetch_assoc($resultado_nome);
    $total = mysqli_num_rows($resultado_nome);
    
    while ($row = mysqli_fetch_array( $resultado_nome)) { 
        
        $row['email'];

        $email = $row['email'];


        if($email == $_SESSION['email']){
            $row['email'];
            $emailantigo = $row['email'];
            echo $emailantigo;

            if($email != $novoemail and $senha != $novasenha){
                $inserir = $conn -> query("UPDATE cadastro SET email = '$novoemail', senha = '$novasenha' where email = '$emailantigo'");
                header("Location:\petExpress\login.php");
                }
                else{
                    header("Location:erro.php");
            
                }

        

        }
}
    
    ?>






























