<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Greenup</title>
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
      <form method="POST">
        <div class="input-box">
          <input placeholder="Usuario" type="email" name="loginusuario">
        </div>
        <div class="input-box">
           <input  placeholder="Senha" type="password" name="senha">
        </div>
        <div>
            <p>Esqueçeu a <a href="#">senha?</a></p>
             <label>
              <input type="checkbox" name="checkbox">Lembrar de mim?
             </label>
        </div>
    
      
        <button class="botao" type="submit">Entrar</button> 
       
           <div>
            <p>Não possui conta? <a href="#">Cadastra-se</a></p>
           </div>
        </form>

   <?php
     if(($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST)){

       $admin = 'admin1234@gmail.com';
       $senhaadm = '1234';
       $usuario = $_POST['loginusuario'];
       $senhauser = $_POST['senha'];
        if($usuario === $admin && $senhauser === $senhaadm){

          header("Location: greenup.html");
          exit;
        }else{
  
          echo "<div class='login-invalido'>Login invalido.</div>";

        } 





     }  
    ?>
  </div>
</body>
</html>