<?php 
    include 'conexao.php';

    $pet = "SELECT nome_pet, raca, porte FROM cadastropet";

    $resultado_pet = mysqli_query($conn, $pet);
    $resultado = mysqli_fetch_assoc($resultado_pet);
    $total = mysqli_num_rows($resultado_pet);
    
    
    ?>

<html>
    <body>
    <div class="sair" style="display:flex; justify-content:flex-start"><a href="./pet.php" style="color: white; text-decoration:none; font-weight:600; padding:20px;">Voltar</a></div>

        <h1>Meus Pets</h1>
    </body>
    <style>@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap');
            html{background-color: #05283F;
        font-family: Inter;}

        h1{color: white;
        text-align: center;
    margin:30px auto;}
    </style>
</html>



<?php

# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $resultado_pet)) 
{ 
    
       $row['nome_pet'];
       $row['raca'];
       $row['porte']; 

$pet = $row['nome_pet'];
$raca = $row['raca'];
$porte = $row['porte'];


echo "
 <section style='display:flex; flex-wrap:wrap; justify-content:center;'>   
<div style='background-color:white; width:300px; height:140px; display:flex; justify-content:center; align-items:center; flex-direction:column; margin:20px; border-radius:10px;'>
<p style='font-weight:600;'>Nome: <span style='font-weight:400;'>$pet</span></p>
<p style='font-weight:600;'>Raça: <span style='font-weight:400;'>$raca</span></p>
<p style='font-weight:600;'>Porte: <span style='font-weight:400;'>$porte</span></p>
</div>

</section>


";

}

?>