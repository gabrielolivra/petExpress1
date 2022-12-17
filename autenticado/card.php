<?php 
    include 'conexao.php';

    $card = "SELECT num_cartao, cvv, nome, data FROM cadastrocard";

    $resultado_card = mysqli_query($conn, $card);
    $resultado = mysqli_fetch_assoc($resultado_card);
    $total = mysqli_num_rows($resultado_card);
    
    
    ?>


<html>
    <body>
    <div class="sair" style="display:flex; justify-content:flex-start"><a href="./pagamentos.php" style="color: white; text-decoration:none; font-weight:600; padding:20px;">Voltar</a></div>

        <h1>Meus cartões</h1>
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
while ($row = mysqli_fetch_array( $resultado_card)) 
{ 
    
       $row['num_cartao'];
       $row['cvv']; 
       $row['nome']; 
       $row['data'];

$num_cartao = $row['num_cartao'];
$cvv = $row['cvv'];
$nome = $row['nome'];
$data = $row['data'];


echo "
 <section style='display:flex; flex-wrap:wrap; justify-content:center;'>   
<div style='background-color:#1D5E73; width:340px; height:140px; display:flex; justify-content:center; align-items:start; padding:10px; flex-direction:column; margin:20px; border-radius:10px;'>
<p style='font-weight:600; font-size:14px; color:white;' >Cartão: <span style='font-weight:400;'>$num_cartao</span></p>
<p style='font-weight:600; font-size:14px; color:white;'>CVV: <span style='font-weight:400;'>$cvv</span></p>
<div class='nome-and-data' style='display:flex; align-items:start; flex-direction:column;'>
<p style='font-weight:600; font-size:12px;color:white;' ><span style='font-weight:400;'>$nome</span></p>
<p style='font-weight:600; font-size:12px; color:white;' >Validade: <span style='font-weight:400;'>$data</span></p>
</div>
</div>

</section>


";

}

?>