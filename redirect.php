<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalização</title>
</head>
<body>
<div class="logo">
    <img src="https://i.ibb.co/FbGNHy1/icon-2.png" alt="">
    </div>
    <?php

    include 'conexao.php';

    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $conpassword = $_POST['conpassword'];
 

    if($password == $conpassword){
    $inserir = $conn -> query("INSERT INTO cadastro (name, email, senha) values('$name','$email','$password')");
    }
    else{
        header("Location:cadastro.php");

    }
    
    
   
 echo '<section>
  
   <div> 
   </br>
   </br>
    <p class="teste"> Olá '. $name.' seu cadastro foi realizado com sucesso!</p>
    </br>
    </br>
    <p class="teste"> Confirme seu cadastro no '.$email.' para verificar sua conta</p>
  </div>
</section>';
?>   
<a href="login.php"><p class="return-login" >Clique aqui para redirecionar para tela inicial e efetuar seu login!</p></a>
</body>
</html>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap');


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

.teste{color:white;
text-align:center;}

.return-login{margin:50px auto;
text-align:center;
padding:10px;
color:green;}

a{list-style: none;
text-decoration: none;}

</style>

