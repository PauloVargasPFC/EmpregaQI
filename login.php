<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/login.css" rel="stylesheet">

</head>

<body>
    <header id="header">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="index.php"><span>Emprega QI</span></a></h1>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li class=""><a href="sobre.php">Sobre a Plataforma</a></li>
                    <li><a href="vagas.php">Vagas Disponíveis</a></li>
                    <li><a href="login.php"><input type="button" class="btn btn-primary btn-sm" id="btn1" value="Login"></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main id="main">
        <section id="about" class="about">
            <div class="cont_login">
                <div class="formulario_login">
                    <form action="loginaux.php" method="POST">
                        <h2 style="text-align: center; font-family: Poppins, sans-serif;">Login</h2>

                        <?php
                        if (isset($_SESSION['nao_autenticado'])) :
                        ?>
                            <div style="color: white; background-color: rgba(255, 0, 0, 0.349); 
                        padding: 2px; border-radius: 10px; margin-bottom: 10px; text-align: center;">
                                <h6>Usuário e/ou senha inválido(s)!</h6>
                            </div>
                        <?php
                        endif;
                        unset($_SESSION['nao_autenticado']);
                        ?>

                        <input type="email" name="login" class="form-control" placeholder="Email" required autofocus>
                        <label for="inputPassword" class="visually-hidden"></label>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" required>
                        <div class="checkbox mb-3">
                            <label><input type="checkbox" value="remember-me"> Lembre-se</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                        <p>Não possui Cadastro ainda? <a href="cadastro.php">Cadastre-se</a></p>
                    </form>
                </div>
            </div>
        </section>
    </main>
</body>

</html>