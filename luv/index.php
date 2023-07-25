<!DOCTYPE html>
<html lang="pt">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <head>
        <title>LUV</title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">
    </head>
    <body>
        <section></section>
        <div class="background">

                <div class="logo">
                    <h1>Luv</h1>
                </div>
            <div class="main">
                <div class="formulario">
                    <h2>Login</h2>
                    <p>Faça login para continuar.</p>
                    <form method="post" action="verificandoUsuario.php">
                        <label>NOME</label><br>
                        <input type="text" name="nome" class="inputLogin"><br>
                        <label>SENHA</label><br>
                        <input type="password" name="senha" class="inputLogin"><br><br>
                        <input type="text" name="google" class="inputLogin"><br><br>
                        <input type="submit" name="logar" value="Login"  class="submitLogin"><br><br>
                        <a href="#">Esqueceu sua senha?</a><br><br>
                        <a href="#">Inscrever-se!</a>

                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>