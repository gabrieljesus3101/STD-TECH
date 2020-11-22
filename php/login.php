<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Font Awesome kit script -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- Google Fonts Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="img/css-3.png">

    <!-- Custom styles path -->
    <link rel="stylesheet" href="css/teste.css">
</head>

<body>
    <form class="form-signin" method="POST" action="valida.php"></form>
    <div class="main-container">
        <div class="content">
            <div class="img-container">
                <img class="image" src="img/login.png" alt="Login">
            </div>
            <div class="login-container">
                <form action="index.html">
                    <h1>Entrar</h1>
                    <p>Bem-vindo de volta !</p>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h5>e-mail</h5>
                            <input class="input" type="email">
                        </div>
                    </div>
                    <div class="input-div two">
                        <div class="i">
                            <i class="fas fa-key"></i>
                        </div>
                        <div>
                            <h5>Senha</h5>
                            <input class="input" type="password">
                        </div>
                    </div>
                    <div class="forgot">
                        <div class="remember">
                            <input type="checkbox">
                            <label>Lembrar-me</label>
                        </div>
                        <a href="#">Esqueceu sua senha ?</a>
                    </div>
                    <button class="btn hvr-sweep-to-right" type="button">Entrar </button>
                    <div class="others">
                        <hr>
                        <p>OU</p>
                        <hr>
                    </div>
                    <div class="social">
                        <img src="img/google.png">
                        <img src="img/facebook.png">
                        <img src="img/twitter.png">
                    </div>
                    <div class="account">
                        <p>Ainda não possui conta ?</p>
                        <a href="register.html">Cadastre-se</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>

        <p>
            <?php 
			//Recuperando o valor da variável global, os erro de login.
			if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>

            <p>
            <?php 
			//Recuperando o valor da variável global, deslogado com sucesso.
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
            </p>

    <script type="text/javascript" src="js/teste.js"></script>
</body>

</html>