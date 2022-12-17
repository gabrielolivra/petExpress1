<?php
$local = $_POST['local'];
?>


<?php 
    include 'conexao.php';

    $petshop = "SELECT local, petshop, valor FROM petshop where local ='$local'";

    $resultado_petshop = mysqli_query($conn, $petshop);
    $resultado = mysqli_fetch_assoc($resultado_petshop);
    $total = mysqli_num_rows($resultado_petshop);
    
    ?>

<?php 
    include 'conexao.php';

    $petshop2 = "SELECT local, petshop, valor FROM petshop where local ='$local' limit 1,2";

    $resultado_petshop2 = mysqli_query($conn, $petshop2);
    $resultado = mysqli_fetch_assoc($resultado_petshop2);
    $total = mysqli_num_rows($resultado_petshop2);
    
    ?>


<?php 
    include 'conexao.php';

    $valorpago = "SELECT cidade,valor FROM valor where cidade ='$local'";

    $resultado_valorpago = mysqli_query($conn, $valorpago);
    $resultado = mysqli_fetch_assoc($resultado_valorpago);
    $total = mysqli_num_rows($resultado_valorpago);
    
    ?>

<?php 
$pet = "SELECT nome_pet, raca, porte FROM cadastropet";

$resultado_pet = mysqli_query($conn, $pet);
$resultado = mysqli_fetch_assoc($resultado_pet);
$total = mysqli_num_rows($resultado_pet);

?>

<?php
$card = "SELECT num_cartao, cvv, nome, data FROM cadastrocard";

$resultado_card = mysqli_query($conn, $card);
$resultado = mysqli_fetch_assoc($resultado_card);
$total = mysqli_num_rows($resultado_card);

?>



<div class="sair" style="display:flex; justify-content:flex-start"><a href=".\transporte.php" style="color: white; text-decoration:none; font-weight:600; padding:20px;">Voltar</a></div>


<form action="confirmtransporte.php" method="POST">
    <h1 style="color:white;">Confirmação de transporte</h1>

<p>Cidade</p>
    <select name="cidade">    
<?php

# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $resultado_petshop2)) 
{ 
    
       
       $row['local'];



$local = $row['local'];

?>     
                  <option value="<?=  $local ?>"><?php echo $local; ?></option>
                  <?php } ?>



</select>
   
    <p>Selecione o petshop</p>


<select name="petshop">    
<?php

# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $resultado_petshop)) 
{ 
    
       $row['petshop'];
       


$petshop = $row['petshop'];


?>     
                  <option><?php echo $petshop; ?></option>
                  <?php } ?>



</select>
<p>Selecione o seu pet</p>
<select name="pet">
<?php

# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $resultado_pet)) 
{ 
    
       $row['nome_pet'];
       


$pet = $row['nome_pet'];


?>     
                  <option><?php echo $pet; ?></option>
                  <?php } ?>


</select>

</select>
<p>Selecione o cartão para pagamento</p>
<select name="pagamento">
<?php

# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $resultado_card)) 
{ 
    
       $row['num_cartao'];
       


$card = $row['num_cartao'];


?>     
                  <option><?php echo $card; ?></option>
                  <?php } ?>


</select>

<p name="valor"> <?php

# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $resultado_valorpago)) 
{ 
    
       $row['valor'];
       


$valorpago2 = $row['valor'];


?>     
                  <?php echo"Valor: R$ $valorpago2"; ?>
                  <?php } ?>


</p>

<button type="submit" name="id_historico" style="width: 200px;
        height: 35px;
    border: none;
    border-radius: 10px;
    color:white;
    background-color:#D99511">teste</button>
      
                  


</form>


<style>
     @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&display=swap');
    html{background-color: #132E3F;
    font-family: Inter;}

    form{display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
width: 100%;}

    p{color: white;
    text-align: left;}

    select{width: 200px;
        height: 35px;
    border: none;
    border-radius: 10px;
    padding-left: 5px;
    outline: none;
    margin:10px auto;}
</style>