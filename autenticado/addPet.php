<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>
</head>
<body>
<div class="sair" style="display:flex; justify-content:flex-start"><a href="./pet.php" style="color: white; text-decoration:none; font-weight:600; padding:20px;">Voltar</a></div>
    <h1>Adicione um pet</h1>
    <form action="confirmAddPet.php" method="post">
        <input type="text" placeholder="Digite o nome do pet" name="nome_pet">
        <input type="text" placeholder="Digite a raça" name="raca">
        <label for="select">Selecione o porte do Pet</label>
        <select id="" aria-placeholder="" name="porte">
            <option value="grande">Grande</option>
            <option value="medio">Medio</option>
            <option value="pequeno">Pequeno</option>
        </select>
        <input type="text" placeholder="Observações" name="obs">
        <div class="btns">
        <input type="submit" value="Registrar" class="btn-registro" name="id_pet">
        <input type="reset" value="Limpar" class="btn-clean">
        </div>
        
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

    form input{width:400px;
    height: 35px;
    border: none;
    border-radius: 10px;
    padding-left: 5px;
    outline: none;
    margin:10px auto}
    form label{color: white;}

    select{width:400px;
    height: 35px;
    border: none;
    border-radius: 10px;
    padding-left: 5px;
    outline: none;
    margin:10px auto}

    h1{text-align: center;
    color: white;
    margin:40px auto;}

    .btns{display: flex;
    align-items: center;
width: 30%;}

    .btns input{width: 49% !important;}

    .btn-registro{background-color:#0DA613;
    color: white;}
    .btn-clean{background-color: #D99511;
    color: white;}
</style>
