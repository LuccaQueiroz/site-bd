
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="https://eteab.com.br/cms/wp-content/uploads/2019/11/LogoAB-final.png" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canal de Comunicação</title>
    <link rel="stylesheet" type="text/css" href="estyler.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="login.js"></script>
</head>
<body>

    <main>
      <div class="login">
        <h2>Faça login ou cadastre-se agora</h2>


        <div class="field radiobox">
          <input type="radio" name="novidades" id="administração" value="administração" onchange="test3()"><label>Usuário</label>
          <input type="radio" name="novidades" id="responsavel" value="responsavel" checked onchange="test2()"><label>Responsável</label>
      </div>
            <form action="logon2.php" method="post">
              <label id="cpf" for="cpf_usuario" >CPF</label>
              <input id="cpf" class="input" name="cpf_login" required="required" type="text" placeholder="ex.12345678910"/>
              <p></p>
              <label id="senha" for="senha_login">Sua senha</label>
              <input id="senha_login" class="input" name="senha_login" required="required" type="password" placeholder="ex. senha" />
              <p></p>
              <p ><button type="submit" style="background: #000; padding: 5px 20px; color: white; border-radius: 15px; cursor: pointer;">Entrar</button></p>
              

            </form>
          </a>
   
          <p class="link">
            Ainda não tem conta?
            <a href="cadastro.html">Cadastre-se</a>
          </p>
        </form>
      </div>
      <script src="login.js"></script>
    </main>
    
           
</body>       