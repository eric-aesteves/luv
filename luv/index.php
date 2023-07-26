<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="src/css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <title>LW</title>
</head>
<body>

  <header>
    <img src="src/images/Screenshot_1-removebg-preview.png" alt="" class="logo">
  </header>

  <main>
    <section>
      <form action="verificandoUsuario.php" method="POST">
        <fieldset>

          <div class="title-box">
            <legend>Login</legend>
            <p class="desc">entre com suas informações de cadastro</p>
          </div>
          <div class="mailbox">
            <label for="email" id="email-label">E-mail/Telefone</label>
            <input required id="email" class="textinput" type="email" name="email" id="" placeholder="Digite seu e-mail">
            <div class="icon-box"></div>
          </div>

          <div class="passwordbox">
            <label for="pass">Senha</label>
            <input required id="pass" class="textinput" type="password" name="senha" id="" placeholder="Digite sua senha">
            <div class="icon-box" id="password-icon-box"></div>
          </div>

          <div class="checkwrap">
            <div>
              <input type="checkbox" class="checkinput" id="check">
              <label for="check" class="check-lem">lembre-me</label>
            </div>

            <a href="">esqueci minha senha</a>
          </div>

          <div class="footer-wrapp">
            <button type="submit">entrar</button>
            <p class="contrdesc">Não tem uma conta? <a href="src/pages/cadastro.php">registre-se</a></p>
          </div>
        </fieldset>
      </form>
    </section>
  </main>

</body>
</html>