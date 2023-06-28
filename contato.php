<!DOCTYPE html>

<html>

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title lang="pt-br">Contato</title>
      <link rel="icon" href="logo_vermelha.png">
  </head>

  <body>
   <div>
      <ul>
          <li><a href="home.html">HOME</a></li>
          <li><a href="contato.html">ETAPA 1</a></li>
      </ul>
          <div class="col-sm-12">
            <img src="toledo_carreiras.png" alt="Logotipo da empresa com dois triângulos sobrepostos.">
          </div>
   </div>

   <div>
        <form>
        <fieldset> 
        <legend><label>Formulário de Contato</label></legend>

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Digite seu email" required><br>

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem" placeholder="Digite Sua Mensagem" required></textarea><br>
        </fieldset>
        <input type="submit" value="Enviar">
        </form>
   </div>

   <div>
      <h6>Copyright © 2023</h6>
   </div>
  </body>

</html>