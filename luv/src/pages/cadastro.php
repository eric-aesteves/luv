<?php 
  include_once "../../funcoes.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/cadastro.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&display=swap" rel="stylesheet">
  <title>Cadastro</title>
</head>
<body>
  <header>
    <a href="/index.html"><img src="src/images/icons8-seta-longa-à-esquerda-50.png" alt="" class="arrow"></a>
    <img src="../images/Screenshot_1-removebg-preview.png" alt="" class="logo">
  </header>
  <main>
    <section>
      <section>
        <form action="#" method="POST">
          <fieldset>
  
            <div class="title-box">
              <legend>Crie uma nova conta</legend>
              <p class="desc">insira suas informações abaixo!</p>
            </div>
  
            <div class="mailbox">
              <label for="email">E-mail/Telefone</label>
              <input required id="email" class="textinput" type="email" name="email" id="" placeholder="Digite seu e-mail">
              <div class="icon-box"></div>
            </div>
  
            <div class="passwordbox">
              <label for="pass">nome</label>
              <input required id="pass" class="textinput" type="text" name="nome" id="" placeholder="Digite seu nome">
              <div class="icon-box" id="password-icon-box"></div>
            </div>

            <div class="passwordbox">
              <label for="pass">data de nascimento</label>
              <input required id="pass" class="textinput" type="date" name="data_nascimento" id="" placeholder="Digite sua data de nascimento">
              <div class="icon-box" id="password-icon-box"></div>
            </div>
  
            <div class="passwordbox">
              <label for="pass">Genero</label>
              <input required id="pass" class="textinput" type="text" name="genero" id="" placeholder="Digite seu Gênero">
              <div class="icon-box" id="password-icon-box"></div>
            </div>
  
            <div class="passwordbox">
              <label for="pass">Hobbies</label>
              <input required id="pass" class="textinput" type="text" name="hobbies" id="" placeholder="Digite sua Hobbie">
              <div class="icon-box" id="password-icon-box"></div>
            </div>

            <div class="passwordbox">
              <label for="pass">Sexo</label>
              <input required id="pass" class="textinput" type="text" name="sexo" id="" placeholder="Digite sua Hobbie">
              <div class="icon-box" id="password-icon-box"></div>
            </div>

            <div class="passwordbox">
              <label for="pass">Orientacao</label>
              <input required id="pass" class="textinput" type="text" name="orientacao" id="" placeholder="Digite sua Hobbie">
              <div class="icon-box" id="password-icon-box"></div>
            </div>
  
            <div class="passwordbox">
              <label for="pass">Senha</label>
              <input required id="pass" class="textinput" type="password" name="senha" id="" placeholder="Digite sua senha">
              <div class="icon-box" id="password-icon-box"></div>
            </div>

            <div class="footer-wrapp">
              <button type="submit" onclick="<?php cadastrandoUsuario($conexao) ?>">INSCREVER-SE</button>
              <p class="contrdesc">Já tem uma conta? <a href="/index.html">Log-in</a></p>
            </div>
          </fieldset>
        </form>
      </section>
    </section>
  </main>
</body>
</html>