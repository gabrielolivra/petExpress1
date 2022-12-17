<?php 
    include 'conexao.php';

    $petshop = "SELECT petshop, local FROM petshop";

    $resultado_petshop = mysqli_query($conn, $petshop);
    $resultado = mysqli_fetch_assoc($resultado_petshop);
    $total = mysqli_num_rows($resultado_petshop);
    
     
    ?>

<html>
    <body>
    <div class="sair" style="display:flex; justify-content:flex-start"><a href="index.php" style="color: white; text-decoration:none; font-weight:600; padding:20px;">Voltar</a></div>

        <h1>Petshop</h1>
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
while ($row = mysqli_fetch_array( $resultado_petshop)) 
{ 
    
      
       $row['petshop'];
       $row['local']; 


$petshop = $row['petshop'];
$local = $row['local'];


echo "
 <section style='display:flex; flex-wrap:wrap; justify-content:center;'>   
<div style='background-color:white; width:300px; height:140px; display:flex; justify-content:center; align-items:center; flex-direction:column; margin:20px; border-radius:10px;'>
<p style='font-weight:600;'>Cidade: <span style='font-weight:400;'>$local</span></p>
<p style='font-weight:600;'>Petshop: <span style='font-weight:400;'>$petshop</span></p>

</div>

</section>


";

}

?>