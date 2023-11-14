<style>

        body {

            font-family: Arial, sans-serif;

        }

        .container {

            max-width: 800px;

            margin: 0 auto;

            padding: 20px;

        }

        .email {

            border: 1px solid #ccc;

            border-radius: 5px;

            padding: 10px;

            margin-bottom: 20px;

        }

        .email-header {

            font-weight: bold;

        }

        .email-body {

            margin-top: 10px;

        }

        .response-input {

            width: 100%;

            padding: 5px;

            border: 1px solid #ccc;

            border-radius: 5px;

            margin-top: 10px;

        }

        .send-button {

            background-color: black;

            color: #fff;

            border: none;

            border-radius: 5px;

            padding: 5px 10px;

            cursor: pointer;

        }

        .protocol-number {

            font-weight: bold;

        }

        .deadline {

            font-size: 12px;

        }

        footer {
      background-color: black;
      color: white;
      padding: 20px;
      border-radius: 30px;
    }

</style>

</head>

<body>

<div class="container">

<h1>Caixa de Entrada</h1>

 

<div class="email" data-sender="João">

    <?php

 

  include 'conexao.php';

 

  $sql = "SELECT * FROM tb_canal";

 

  $pesquisa = mysqli_query($conexao,$sql);

 

 

 

  while($array = mysqli_fetch_array($pesquisa))

 

    $protocolo = $array['cd_canal'];

 

    $prazo = $array['data_canal'];

 

    $remetente = $array['fk_cd_usuario'];

 

    $mensagem = $array['descrição_canal'];


    ?>

<div class="email-header">

                Número de Protocolo: #<?php echo $protocolo?><br>


                Prazo para Resposta: 3 dias

</div>

<div class="email-body">

                De: João<br>

                Assunto: Prezado usuário, estamos atualizando o projeto de acordo com suas solicitações. Em breve, teremos uma nova versão pronta.

               

<textarea class="response-input" placeholder="Responda aqui"></textarea>
<p></p>
<button class="send-button" onclick="sendResponse(this)">Enviar</button>

</div>

</div>

 

 

 

        <div class="email" data-sender="Maria">

<div class="email-header">

                Número de Protocolo: #789012<br>

                Prazo para Resposta: 5 dias

</div>

<div class="email-body">

                De: Maria<br>

                Assunto: Atualização do Projeto<br>

                Prezado usuário, estamos atualizando o projeto de acordo com suas solicitações. Em breve, teremos uma nova versão pronta.

<textarea class="response-input" placeholder="Responda aqui"></textarea>
<p></p>
<button class="send-button" onclick="sendResponse(this)">Enviar</button>

</div>

<footer>
    <h3>Informações de Contato</h3>
    <p>Endereço: Rua Exemplo, 123</p>
    <p>Telefone: (12) 3456-7890</p>
    <p>Email: exemplo@example.com</p>
    <a href="sobre.nos.html" style="color: white; text-decoration: none;">Saiba mais sobre nós clicando aqui</a>
  </footer>

</div>
<?php ?>