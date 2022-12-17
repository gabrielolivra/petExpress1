<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="sair" style="display:flex; justify-content:flex-start"><a href="index.php" style="color: white; text-decoration:none; font-weight:600; padding:20px;">Voltar</a></div>

    <div class="map">
    <h1 style="color:white;">Transporte</h1>
    <div style="width:350px; height:350px; background-image:url('https://i.ibb.co/1Kb624K/petshop-1.png'); border-radius:10px;">
    </div>
    </div>
<form action="listTransporte.php" method="post">
    <input type="text" style="width: 320px; margin:20px; border-radius:10px; border:none; height:35px; outline:none; padding-left:10px;" placeholder="Digite sua localização" name="local" required>
    <input type="submit" value="Buscar" style="width:150px; height:35px; border:none;border-radius:10px; background-color:#D99511; color:white; font-size:14px; font-weight:600;">
</form>
</body>
</html>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap');
    html{background-color: #132E3F;
    font-family: Inter;}

    form{display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;}

    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap');
    html{background-color: #132E3F;
    font-family: Inter;}

    .map{display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;}
</style>