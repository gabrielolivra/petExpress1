<?php
    session_start(); 
        //Incluindo a conexão com banco de dados   
        include './conexao.php';   
    //O campo usuário e senha preenchido entra no if para validar
    if((($_POST['email'])) && (($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
            
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM cadastro WHERE email = '$usuario' and senha ='$senha'";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['name'] = $resultado['name'];
            $_SESSION['email'] = $resultado['email'];
            $_SESSION['senha'] = $resultado['senha'];
            if($_SESSION['email'] == $resultado['email'] && $_SESSION['senha'] == $resultado['senha']) {
                header("Location: ./autenticado/index.php");
                
            }else{
                header("Location: login.php");
            }
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
           $_SESSION['loginErro'] = "<p>Usuário ou senha Inválido</p>";
            
            header("Location: login.php");
            
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] =  "<p class='user'>Usuário ou senha inválido</p>";
        
        header("Location: login.php");
    }

  
?>


