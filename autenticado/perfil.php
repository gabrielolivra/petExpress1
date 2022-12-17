<?php 
    include 'conexao.php';
    

    session_start();


  
    $nome = "SELECT name, email FROM cadastro";

    $resultado_nome = mysqli_query($conn, $nome);
    $resultado = mysqli_fetch_assoc($resultado_nome);
    $total = mysqli_num_rows($resultado_nome);
    
    while ($row = mysqli_fetch_array( $resultado_nome)) { 
        
        $row['email'];

        $email = $row['email'];


        if($email == $_SESSION['email']){
            $row['name'];
            $nome = $row['name'];

            


        }
}
    
    ?>


<html>
    <body>
    <div class="sair" style="display:flex; justify-content:flex-start"><a href="index.php" style="color: white; text-decoration:none; font-weight:600; padding:20px;">Voltar</a></div>

        <h1 style="text-align:center ;">Perfil</h1>

        <div style="display:flex; justify-content:center; align-items:center; flex-direction:column;">
            <div class="img" style="width:120px; height:120px; border-radius:100%; background-color:black"></div>
            <p style="font-weight: 400;"><?php echo $nome?></p>
            <p style="font-weight: 200;"><?php echo $_SESSION['email']?></p>
            <a href="editarPerfil.php"><button>Editar perfil</button></a>
            

        </div>
    

    </body>
</html>

<style>
     @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap');
    html{background-color: #132E3F;
    font-family: Inter;}

   

    p, h1{color: white;
    }

    button{background-color: #D99511;
    color:white;
    width:180px;
    margin:30px;
    height: 35px;
    border-radius: 10px;
    border:none;
    font-size: 16px;
    font-weight: 400;
    }
</style>