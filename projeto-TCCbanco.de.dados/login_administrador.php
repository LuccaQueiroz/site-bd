<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="https://eteab.com.br/cms/wp-content/uploads/2019/11/LogoAB-final.png" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Canal de comunicação</title>
    <link rel="stylesheet" type="text/css" href="estyler_administrador.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
 
    <main>
      <div class="login">

        <h2>Faça login ou cadastre-se agora administrador!</h2>

        <?php
          if(isset($_GET['msg'])) {?>
          <div class="alert alert-danger" id="alerting" role="alert" style="color: rgb(255, 0, 0); border: 1px solid rgb(255, 0, 0); padding: 10px; border-radius: 15px; text-align: center;">
           Login ou senha invalida!
          </div>
            <?php } ?>

           <form action="logonadm.php" method="post" id="acessar">
              <label id=login for="nome_login">Seu RM</label>
              <input  id="nome_login" class="input" name="nome_login" required="required" type="text" placeholder="ex. 01234"/>
              <p></p><label id="senha" for="senha_login">Sua senha</label>
              <input id="senha_login" class="input" name="senha_login" required="required" type="password" placeholder="ex. senha" />
              <p><button type="submit" style="padding: 5px 20px; border-radius: 15px; border: none; background: #000; color: white; font-weight: bold; cursor: pointer;" id="cadastrar_botao">Entrar</button></p>
            </form>
            

   
          <p class="link">
            Ainda não tem conta?
            <a href="cadastro_administrador.html">Cadastre-se</a>
          </p>
        </form>
      </div>
    </main>
</body>       
