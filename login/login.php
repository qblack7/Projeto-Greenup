<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login GreenUp</title>
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
      <form name=login method="POST">
        <div class="input-box">
          <input placeholder="Usuario" type="email" name="loginusuario">
        </div>
        <div class="input-box">
           <input  placeholder="Senha" type="password" name="senha">
        </div>
        <div class="linksenha">
            <p>Esqueçeu a <a href="#">senha?</a></p>
        </div>
    
      <div class="botao">
        <button class="botao" type="submit"><h4>Entrar</h4></button> 
      </div>
           <div>
            <p>Não possui conta? <button class="botaoc" type='submit' name='cad'><p>Cadastra-se</p></button></p>
           </div>
            <label>
              <input type="checkbox" name="checkbox">Lembrar de mim?
             </label>
        </form>

   <?php
     if(($_SERVER['REQUEST_METHOD'] == 'POST') && isset($_POST)){

       $admin = 'admin1234@gmail.com';
       $senhaadm = '1234';
       $usuario = $_POST['loginusuario'];
       $senhauser = $_POST['senha'];
        if($usuario === $admin && $senhauser === $senhaadm){

          header("Location: ../primeira_tela/index.html");
          exit;
        }else{
  
          echo "<div class='login-invalido'>Login invalido.</div>";

        } 


        if(isset($_POST['cad'])) {
          // Pega o valor do input
          $cad = $_POST['loginusuario']; // aqui o que o usuário digitou vira $cad
          $_SESSION['login_usuario'] = $cad; // já define como logado
          header("Location: ../primeira_tela/index.html");
          exit;
      }
  }

    ?>
  </div>
</body>
</html>