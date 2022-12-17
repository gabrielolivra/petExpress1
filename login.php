<!DOCTYPE html>
<?php
	//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <title>Pet Express</title>
</head>
<body>
<div class="logo">
        <img src="https://i.ibb.co/FbGNHy1/icon-2.png" alt="">
</div>
<form action="valida.php" method="post">
    <input type="text" placeholder="Insira seu email" name="email" required>
    <input type="password" placeholder="Insira sua senha" name="senha" required>
    <button class="login">Login</button>
    <p class="p-link">Não tem uma conta?<span><a href="cadastro.php" class="link">CADASTRE-SE</span></a></p>
</form>
</body>
<?php

include './conexao.php';

?>

<?php 
			//Recuperando o valor da variável global, os erro de login.
			if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>

<?php 
			//Recuperando o valor da variável global, deslogado com sucesso.
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>



<style>@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap');


*{list-style: none;
    margin:0;
    padding: 0;
    font-family: Inter;
    }

html{background-color: #132E3F;}


.logo{display:flex;
justify-content: center;
align-items: center;
flex-direction: column;}

form{display: flex;
flex-direction: column;
justify-content: center;
align-items: center;}

form input{width:400px;
    height: 35px;
border: none;
border-radius: 10px;
padding-left: 5px;
outline: none;
margin:10px auto;}

.login{width: 350px;
border: none;
background-color: #0DA613;
border-radius: 10px;
height: 40px;
color: white;
font-size: 14px;
margin-bottom: 30px;}

.p-link{color: white;}

.link{color:#0DA613;
text-decoration: none;
margin-left: 10px;}

p{color:red; 
text-align: center;
margin:10px auto;
font-size: 16px;}


@media only screen and (max-width:700px){

     /*Login.html*/ 

form input{width: 80%;
margin:10px auto;
height: 40px;
border-radius: 10px;;
outline:none;
border: none;
padding-left: 5px;}

form .login{
    width: 80%;
    height: 40px;
    border-radius:10px;
    margin:10px auto;
    background-color: #D99511;
    border:none;
    color:white;
    font-size: 12px;
    outline: none;
    padding-left: 5px;
}
form .p-link{color:white;
font-weight: 400;
font-size: 12px;
}
form p span .link{color: #0DA613;
    text-decoration: none;
margin-left: 10px;}

/*Login.html*/ 
p{color:red; 
text-align: center;
margin:10px auto;
font-size: 14px;}


}</style>
</html>
