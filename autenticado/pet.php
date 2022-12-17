

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus pets</title>
</head>
<body>
<div class="sair" style="display:flex; justify-content:flex-start"><a href="index.php" style="color: white; text-decoration:none; font-weight:600; padding:20px;">Voltar</a></div>

    <div class="logo-meus-pets">
    <h1>Meus pets</h1>
    <img src="https://i.ibb.co/hF6YDH0/bro.png" alt="">
    </div>
    <section class="container-btns">
       <a href="meuspets.php" style="text-decoration: none;"> <div class="btn-pet">
            <p>Meus pets</p>
        </div></a>
        <a href="addPet.php" style="text-decoration: none;"><div class="btn-pet">
            <p>Adicionar novo pet</p>
        </div></a>
    </section>
</body>
</html>
<style>

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap');
html{font-family: Inter;
background-color: #132E3F;}
    .container-btns{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .btn-pet{
        width:400px;
        height: 100px;
        color:#132E3F;
        border-radius: 10px;
        background-color: #FFFFFF;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin:20px;
    }

    .btn-pet p{font-size: 18px;
    font-weight: 600;}

    .logo-meus-pets{display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;}

    .logo-meus-pets h1{color:white}
</style>


