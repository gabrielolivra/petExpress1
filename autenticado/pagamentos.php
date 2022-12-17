<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Express</title>
</head>
<body>
<div class="sair" style="display:flex; justify-content:flex-start"><a href="./index.php" style="color: white; text-decoration:none; font-weight:600; padding:20px;">Voltar</a></div>

    <div class="title">
        <h1>Pagamentos</h1>
        <img src="https://i.ibb.co/2dPNLFp/pana.png" alt="">
    </div>
    <section>
        <a href="card.php" style="text-decoration:none;"><div class="card">
            <p>Meus cartões</p>
        </div></a>

        <a href="addCard.php" style="text-decoration:none;"><div class="card">
            <p>Adicionar cartão</p>
        </div></a>
    </section>
    
</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap');
html{font-family: Inter;
background-color: #132E3F;}
    

.title{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.title h1{color:white;}
    section{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

    }
    .card{width:410px;
        height: 100px;
        color:#132E3F;
        border-radius: 10px;
        background-color: #FFFFFF;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin:20px;}

        .card p{font-size: 18px;
    font-weight: 600;}
</style>