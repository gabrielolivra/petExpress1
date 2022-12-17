<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Express</title>
</head>
<body style="background-color: #05283F;">
<div class="sair" style="display:flex; justify-content:flex-end"><a href="\petExpress\login.php" style="color: white; text-decoration:none; font-weight:600; padding:20px;">Sair</a></div>
   <?php
    session_start();  
    

?>

<section>
    <h1 style="text-align:center; color:white;">Pet Express</h1>
    <div class="logo">
        <div class="text"><p style="text-align: center; color:white;">Uma maneira simples, rápida e segura de levar seu amiguinho para qualquer lugar!</p></div>
        </section>
<section class="buttons">
    </div>
    <div class="btns" style="display:flex; flex-wrap:wrap; justify-content:center">
        <div class="btn"><a href="transporte.php" style="text-decoration: none;"><img src="https://i.ibb.co/y87fy2m/transporte.png" alt=""><p>Transporte</p></a></div>
        <div class="btn"><a href="petshop.php" style="text-decoration:none;"><img src="https://i.ibb.co/LhXPD1G/petshop.png" alt=""><p>PetShop</p></a></div>
        <div class="btn"><a href="convideAmigos.php"><img src="https://i.ibb.co/m9qkH4t/conAmg.png" alt=""></a><p>Convide amigos</p></div>
        <div class="btn"><a href="historico.php"><img src="https://i.ibb.co/K0391Xx/historico.png" alt=""></a><p>Historico</p></div>
        <div class="btn"><a href="pagamentos.php" style="text-decoration: none;"><img src="https://i.ibb.co/FJ8dtrD/bxs-coupon.png" alt=""><p>Cartões</p></a></div>
        <div class="btn"><a href="pet.php"><img src="https://i.ibb.co/CJMWnWH/dashicons-pets.png" alt=""></a><p>Pets</p></div>
        <div class="btn"><a href="perfil.php" style="text-decoration:none;"><img src="https://i.ibb.co/KXSKcYJ/user.png" alt="" style="width:30px; height:30px;"><p>Perfil</p></a></div>
        <div class="btn"><img src="https://i.ibb.co/LhXPD1G/petshop.png" alt=""><p>Configurações</p></div>
        <div class="btn"><img src="https://i.ibb.co/LhXPD1G/petshop.png" alt=""><p>Cupons</p></div>



    </div>
    </section>

</body>
</html>

<style>@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap');
html{font-family: Inter;}

.btns{width:300px;
height: 200px;}

.btn{width:70px;
height: 70px;
margin:10px;
border-radius: 10px;
background-color: white;
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;}

.btn img{width:40px;
height:40px;
margin-top: 10px;}

.btn p{font-size: 9px;}

.buttons{display: flex; 
flex-direction: column;
align-items: center;
justify-content: center;
margin:100px auto;}
</style>

<?php


if((isset ($_SESSION['email']) == false) && (isset ($_SESSION['senha']) == false))
{
  #header('location:\petExpress/login.php');
  #session_destroy();
  }
  else{
    #session_destroy();
    }


?>


