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
                    <li><a href="">Vagas Disponíveis</a></li>
                    <li><a href="login.php"><input type="button" class="btn btn-primary btn-sm" id="btn1" value="Login"></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main id="main">
        <section id="about" class="about">
            <div class="cont_login">
                <div class="formulario_login">
                    <form>
                        <h2 style="text-align: center; font-family: Poppins, sans-serif;">Login</h2>
                        <label for="inputEmail" class="visually-hidden"></label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                        <label for="inputPassword" class="visually-hidden"></label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
                        <div class="checkbox mb-3">
                        <label><input type="checkbox" value="remember-me"> Lembre-se</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                        <p>Não possui login ainda? <a href="">Cadastre-se</a></p>
                    </form>
                </div>
            </div>
        </section>
    </main>

</body>

</html>