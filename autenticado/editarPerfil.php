<html>
<body>
<div class="sair" style="display:flex; justify-content:flex-start"><a href="./index.php" style="color: white; text-decoration:none; font-weight:600; padding:20px;">Voltar</a></div>

    <h1>Editar perfil</h1>
    <form action="validaEditaPerfil.php" method="POST">
        <input type="text" placeholder="Digite seu email" name="email">
        <input type="text" placeholder="Digite seu novo email" name="novoEmail">
        <input type="password" placeholder="Digite sua senha" name="senha">
        <input type="password" placeholder="Digite sua nova senha" name="novaSenha">
        <input type="password" placeholder="Confirme sua nova senha" name="novaSenha">
        <input type="submit" value="Confirmar" class="btn">
    </form>
</body>
</html>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap');
    html{background-color: #132E3F;
    font-family: Inter;}
.btn{width: 350px;
border: none;
background-color: #0DA613;
border-radius: 10px;
height: 40px;
color: white;
font-size: 14px;
margin-bottom: 30px;}
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

</style>