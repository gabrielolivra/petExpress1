<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="voltar">
    <img src="https://i.ibb.co/GvkBjpR/voltar.png" alt="">

        <a href="login.php"><p>Voltar</p></a>
    </div>
<div class="logo">
    <img src="https://i.ibb.co/FbGNHy1/icon-2.png" alt="">
    </div>
    <section>
        <form action="redirect.php" method="post">
            <input type="text" placeholder="Digite seu nome" name="name" required>
            <input type="text" placeholder="Digite seu E-mail" name="email" required>
            <input type="password" name="password" placeholder="Digite sua senha"  id="senha" required>
            <input type="password" name="conpassword" placeholder="Confirme sua senha" id="confirmsenha" required>
            <div class="btns">
            <input type="submit" value="Registrar" onclick="validatePassword()">
            <input type="reset" value="Resetar">
            </div>
             
        </form>
    </section>
</body>
</html>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap');


*{list-style: none;
    margin:0;
    padding: 0;
    font-family:Inter;
    }

    .voltar p{color:green;
    font-size: 18px;
padding:10px;}

    input[type=submit] {
     background-color:#0DA613;
     width: 200px;
     color:white;
    }

    input[type=reset] {
     background-color: #D99511;
     color:white;
     width: 200px;
     margin-bottom: 50px;
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

.voltar a{
    text-decoration: none;
        border:none;
    color:white;
    font-size: 12px;
    width: 100%;
    height: 40px;
    border-radius:10px;
    margin:5px auto;
}
.voltar a p{text-decoration: none;
font-weight: 600;
color: white;}

.voltar{display: flex;
justify-content: center;
align-items: center;
padding:10px;}



@media only screen and (max-width:700px){

form input{width: 80%;
margin:10px auto;
height: 40px;
border-radius: 10px;;
outline:none;
border: none;
padding-left: 5px;
font-size: 12px;}

form button{
    width: 80%;
    height: 40px;
    border-radius:10px;
    margin:5px auto;
    background-color: #D99511;
    border:none;
    color:white;
    font-size: 12px;
}

.cadastro{
background-color: #0DA613;
}

.voltar a{
    text-decoration: none;
    background-color: #D99511;
    border:none;
    color:white;
    font-size: 12px;
    width: 100%;
    height: 40px;
    border-radius:10px;
    margin:5px auto;
}
.voltar a p{text-decoration: none;}

}
</style>

<script>
   var password = document.getElementById("senha")
  , confirm_password = document.getElementById("confirmsenha");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;


</script>