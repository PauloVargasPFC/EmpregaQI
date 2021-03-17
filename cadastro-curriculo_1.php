<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Emprega QI</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">


    <link href="assets/css/curriculo.css" rel="stylesheet">

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
                    <li><a href="sobre.php">Sobre a Plataforma</a></li>
                    <li><a href="vagas.php">Vagas Disponíveis</a></li>
                    <li><a href="login.php"><input type="button" class="btn btn-primary btn-sm" id="btn1" value="Login"></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="container">
        <div style="text-align:center; padding-top: 15px;">
            <h1>Cadastro de Currículo</h1>

            <h2 style="padding-top: 25px; padding-bottom: 15px;">Informações Pessoais</h2>
        </div>
        <div>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nome</label>
                        <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Sobrenome</label>
                        <input type="text" class="form-control" placeholder="Sobrenome">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>CPF</label>
                        <input type="text" class="form-control" placeholder="CPF">
                    </div>
                    <div class="form-group col-md-4">
                        <label>RG</label>
                        <input type="text" class="form-control" placeholder="RG">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Data de Nascimento</label>
                        <input type="date" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputAddress">Endereço</label>
                    <input type="text" class="form-control" placeholder="Rua Fictícia, nº 999">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Nacionalidade</label>
                        <input type="text" class="form-control" placeholder="Nacionalidade">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Estado Civil</label>
                        <select id="inputRelacao" class="form-control">
                            <option value="0"></option>
                            <option value="1">Solteiro</option>
                            <option value="2">Casado</option>
                            <option value="3">Viúvo</option>
                        </select>
                    </div>
                </div>
            
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Cidade</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEstado">Estado</label>
                        <select id="inputEstado" class="form-control">
                            <option selected disabled selected>Escolher...</option>
                            <option value="1">RO</option>
                            <option value="2">AC</option>
                            <option value="3">AM</option>
                            <option value="4">RR</option>
                            <option value="5">PA</option>
                            <option value="6">AP</option>
                            <option value="7">TO</option>
                            <option value="8">MA</option>
                            <option value="9">PI</option>
                            <option value="10">CE</option>
                            <option value="11">RN</option>
                            <option value="12">PB</option>
                            <option value="13">PE</option>
                            <option value="14">AL</option>
                            <option value="15">SE</option>
                            <option value="16">BA</option>
                            <option value="17">MG</option>
                            <option value="18">ES</option>
                            <option value="19">RJ</option>
                            <option value="20">SP</option>
                            <option value="21">PR</option>
                            <option value="22">SC</option>
                            <option value="23">RS</option>
                            <option value="24">MS</option>
                            <option value="25">MT</option>
                            <option value="26">GO</option>
                            <option value="27">DF</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputCEP">CEP</label>
                        <input type="text" class="form-control" id="inputCEP">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Vaga Desejada</label>
                        <select id="inputRelacao" class="form-control">
                            <option selected disabled value="0">Vaga...</option>
                            <option value="1">Operador de qualidade de software</option>
                            <option value="2">Desenvolvedor de sistemas</option>
                            <option value="3">Auxiliar de produção</option>
                            <option value="4">Vendedor</option>
                            <option value="5">Técnico em informática</option>
                            <option value="6">Operador de máquina</option>
                            <option value="7">Costureiro</option>
                            <option value="8">Professor</option>
                            <option value="9">Mecânico</option>
                            <option value="10">Gari</option>
                        </select>
                    </div>
                </div>
                
                <a href="cadastro-curriculo_2.php"><button type="button" class="btn btn-primary">Próximo</button></a>
            </form>
        </div>
    </section>

    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">


                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>Contate-nos</h4>
                        <p>
                            Rua Fictícia 1212 <br>
                            Quedas do Iguaçu, PR<br>
                            Brasil <br><br>
                            <strong>Fone:</strong> (46) 99999-9999)<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>

                    </div>

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>Redes Sociais</h3>
                        <p>Nos siga nas nossas redes sociais.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>EmpregaQI</span></strong>. Todos os direitos reservados
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <script src="assets/js/main.js"></script>

</body>

</html>