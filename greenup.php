<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilopri.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenUp</title>
</head>
<body>
    
<header>
    <div class="logo">
        <h3>GreenUp</h3>
    </div>
    <nav>
        <ul class="menu">
            <li><a href="login.php">Login</a></li>
            <li><a href="sobre.html">Sobre</a></li>
            <li><a href="contato.html">Contato</a></li>
        </ul>
    </nav>
</header>
<div class="servico1">
 <form method='post'>   
    <h3><p>Calcule o IMC da criança</p></h3>
    <br>
    <p>Peso (kg)</p><input type="text" name="peso"><br>
    <br>
    <p>Altura (m)</p><input type="text" name="altura"><br>
    <br>
    <button  type="submit" class="botaoimc" autocomplete='off'>Calcule</button>
    <br>
    <br>
<?php
// serviço calcule imc //
if(isset($_POST['peso']) && isset($_POST['altura'])){
$peso = floatval($_POST['peso']);
$altura = floatval($_POST['altura']);

if($peso > 0 && $altura > 0){
$imc = $peso / ($altura * $altura);
 echo "<p>IMC: $imc ";
 if($imc < 13.4){
    echo"Magreza acentuada";
 }elseif($imc < 14.0){
    echo"Magreza";
 }elseif($imc < 17.3){
    echo"eutrofia (peso adquado)";
 }elseif($imc < 18.9){
     echo"Sobrepeso";
 }else{
      echo"Obesidade";   
 }
} 
} 
// fim do serviço calcule imc //
?>
</div>
   <div class="servico2">
    <a href="#"></a>
   </div>
</body>
</html>