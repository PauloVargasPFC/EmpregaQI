<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emprega QI</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/cadastro.css" rel="stylesheet">

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
            <div class="cadastro-form">
            <h2 style="margin-top: 50px;">Cadastro</h2>
                <div id="cad">
                    <form>
                        <input type="name" id="inputName" class="form-control" placeholder="Nome" style="margin-top: 20px;" required autofocus>
                        <input id="inputCPF" class="form-control" style="margin-top: 10px;" placeholder="CPF/CNPJ" required>
                        <input type="email" id="inputEmail" class="form-control" style="margin-top: 10px;" placeholder="Email" required autofocus>
                        <input type="password" id="inputPassword" class="form-control" style="margin-top: 10px;" placeholder="Senha" required>
                        <input type="password" id="inputPassword" class="form-control" style="margin-top: 10px;" placeholder="Confirmar Senha" required>
                        <label style="margin-top: 10px;">Tipo de cadastro:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" checked>
                            <label class="form-check-label">
                                Pessoa
                            </label>
                            <input class="form-check-input" type="radio" name="flexRadioDefault" style="margin-left: 10px;">
                            <label class="form-check-label" style="margin-left: 30px;">
                                Empresa
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" style="margin-top: 10px;" type="submit">Cadastrar</button>
                        <p>Já possui Cadastro?<a href="login.php"> Logar-se</a></p>
                    </form>
                </div>
            </div>
        </section>
    </main>

</body>

</html>