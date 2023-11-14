<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="https://eteab.com.br/cms/wp-content/uploads/2019/11/LogoAB-final.png" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canal de Comunicação</title>
    <link rel="stylesheet" type="text/css" href="estyler.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
<script>
</script>
    <main>
      <div class="login">
        <h2>Faça login ou cadastre-se agora</h2>


        <div class="field radiobox">
          <input type="radio" name="novidades" id="administração" value="administração" checked onchange="test3()"><label>Usuário</label>
          <input type="radio" name="novidades" id="responsavel" value="responsavel" onchange="test2()"><label>Responsável</label>
      </div>
      

            <form action="logon.php" method="post" id="entrar">
            <?php
          if(isset($_GET['msg'])) {?>
          <div class="alert alert-danger" id="alerting" role="alert" style="color: rgb(255, 0, 0); border: 1px solid rgb(255, 0, 0); padding: 10px; border-radius: 15px; text-align: center;">
          Login ou senha Inválida!
          </div>
            <?php } ?>
              <label id="RM" for="rm_login" >RM</label>
              <input id="rm_login" class="input" name="rm_login" required="required" type="text" placeholder="ex.12345"/>
              <label id="senha" for="senha_login">Sua senha</label>
              <input id="senha_login" class="input" name="senha_login" required="required" type="password" placeholder="ex. senha" />

            
              <p><button type="submit"  style="background: #000; padding: 5px 20px; color: white; border-radius: 15px; cursor: pointer;">Entrar</button></p>

            </form>

          <p class="link">
            Ainda não tem conta?
            <a href="cadastro.html">Cadastre-se</a>
          </p>
          <p class="link">
        </form>
      <script src="login.js"></script>
    </main>
   
</body>       
