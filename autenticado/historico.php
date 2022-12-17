<?php 
    include 'conexao.php';

    $historico = "SELECT cidade, petshop, pet FROM historico";

    $resultado_historico = mysqli_query($conn, $historico);
    $resultado = mysqli_fetch_assoc($resultado_historico);
    $total = mysqli_num_rows($resultado_historico);
    
     
    ?>

<html>
    <body>
    <div class="sair" style="display:flex; justify-content:flex-start"><a href="index.php" style="color: white; text-decoration:none; font-weight:600; padding:20px;">Voltar</a></div>

        <h1>Histórico</h1>
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
while ($row = mysqli_fetch_array( $resultado_historico)) 
{ 
    
       $row['cidade'];
       $row['petshop'];
       $row['pet']; 

$cidade = $row['cidade'];
$petshop = $row['petshop'];
$pet = $row['pet'];


echo "
 <section style='display:flex; flex-wrap:wrap; justify-content:center;'>   
<div style='background-color:white; width:300px; height:140px; display:flex; justify-content:center; align-items:center; flex-direction:column; margin:20px; border-radius:10px;'>
<p style='font-weight:600;'>Cidade: <span style='font-weight:400;'>$cidade</span></p>
<p style='font-weight:600;'>Petshop: <span style='font-weight:400;'>$petshop</span></p>
<p style='font-weight:600;'>Pet: <span style='font-weight:400;'>$pet</span></p>
</div>

</section>


";

}

?>