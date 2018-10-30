<?php 
	require_once 'php/init.php';

		// try{
			if(isset($_POST['enviar']) && !empty($_POST['comentario'])){
				echo "<script>alert('Pedido enviado com sucesso!');</script>";

                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
                $data = $_POST['data'];
                $email = $_POST['email'];
                $CPF = $_POST['CPF'];
                $sexo = $_POST['sexo'];
                $telefone = $_POST['telefone'];
                $comentario = $_POST['comentario'];
                $conec = db_connect();

				$query = "insert INTO contato (nome,sobrenome,ano,email,CPF,sexo,telefone,comentario) VALUES (:nome,:sobrenome,:data,:email,:CPF,:sexo,:telefone,:comentario);";

				$stmt = $conec->prepare($query);
                $stmt->bindValue(':nome',$nome);
                $stmt->bindValue(':sobrenome',$sobrenome);
                $stmt->bindValue(':data',$data);
                $stmt->bindValue(':email',$email);
                $stmt->bindValue(':CPF',$CPF);
                $stmt->bindValue(':sexo',$sexo);
                $stmt->bindValue(':telefone',$telefone);
                $stmt->bindValue(':comentario',$comentario);
				$stmt->execute();
			}		 
		// }catch(PDOexception $e){
		// 	echo 'Erro: ' . $e->getCode() . 'Mensagem: ' . $e->getMessage();
		// }		

		

 ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Só Salgados</title>
	<link rel="icon" type="icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/compiled/bootstrap.css">
    <link rel="stylesheet" href="css/eventos.css">
    <link rel="stylesheet" href="css/contatos.css">
    <!-- CSS Desenvolvedor -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="css/final1.css">

</head>
<body>
    <header>
        <!-- Navbar Mobile -->
        <nav class="navbar navbar-expand-lg nav-mobile fixed-top">
            <div class="container">
                <a class="navbar-brand" href=""><img src="img/logo1.png" width="50"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                    <i><img src="img\icones\menu.png" class="btn-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSite">
                    <ul class="navbar-nav">
                        <hr id="linha">
                        <li class="nav-item">
                            <a class="nav-link btn-cor" href="#who">Quem Somos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-cor" href="#produtos">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-cor" href="#receitas">Receitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-cor" href="#Eventos">Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-cor" href="#contatos">Contatos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Fim Navbar Mobile -->

        <!-- Navbar Web -->
        <div class="nav-web">
            <div class="logo">
                <a class="justify-content-center text-center fixed-top logo" href=""><img src="img/logo.png" class="logo"></a>
            </div>
            <div>
                <nav class="navbar navbar-expand-lg nav-cor justify-content-center text-center">
                    <div class="" id="navbarSite">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item mr-5">
                                <a class="nav-link btn-home " href="#who">Quem Somos?</a>
                            </li>
                            <li class="nav-item mr-5">
                                <a class="nav-link btn-home " href="#produtos">Produtos</a>
                            </li>
                            <li class="nav-item mr-5">
                                <a class="nav-link btn-home " href="#receitas">Receitas</a>
                            </li>
                            <li class="nav-item mr-5">
                                <a class="nav-link btn-home " href="#Eventos">Eventos</a>
                            </li>
                            <li class="nav-item mr-5">
                                <a class="nav-link btn-home " href="#contatos">Contatos</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Fim da Navbar Web -->
    </header>

    <!-- Home -->
    <section id="">
        <div id="carouselSite" class="carousel slide" data-ride="carousel">
            <!-- Indicadores do Slide -->
            <ol class="carousel-indicators">
                <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSite" data-slide-to="1"></li>
                <li data-target="#carouselSite" data-slide-to="2"></li>
            </ol>
            <!-- Imagens do Slide -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img\home\slide01.jpg" class="img-fluid d-block img-slide w-100">
                </div>
                <div class="carousel-item">
                    <img src="img\home\slide02.jpg" class="img-fluid d-block img-slide w-100">
                </div>
                <div class="carousel-item">
                    <img src="img\home\slide03.jpg" class="img-fluid d-block img-slide w-100">
                </div>
            </div>
            <!-- Botões do slide -->
            <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                <i><img src="img\icones\left-chevron.png" class="seta"></i>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                <i><img src="img\icones\right-chevron.png" class="seta"></i>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </section>

 
    <!-- ------------QUEM SOMOS--------- -->
    <section id="who">
      <div class="row nos">
        <div class="col text-center"><img class="" src="imgs/equipe.jpg"   alt="Responsive image"></div>
      </div>
        <div class="row somos">
            <div class="col">
                <h1 class="text-center are">QUEM SOMOS ?</h1>
                <p class="text-justify container are">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </section>

    <!-- Produtos -->
    <section id="produtos">
        <div class="container">
            <div class="row">
                <h1 id="prod-titulo" class="m-3">Produtos</h1>
            </div>
            <div class="row">
                <div class="col">
                    <div class="quad-hover"><h5 class="col-6 offset-md-6 prod-item">Quindin</h5>
                        <p class="col-6 offset-md-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.</p></div>
                    <img src="img/produto/produto01.jpg" class="img-produtos mt-3">
                    <div class="texto-produtos">
                        <h5 class="text-center">Quindin</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="quad-hover"><h5 class="col-6 offset-md-6 prod-item">Risole</h5>
                        <p class="col-6 offset-md-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.</p></div>
                    <img src="img/produto/produto02.jpg" class="img-produtos mt-3">
                    <div class="texto-produtos">
                        <h5 class="text-center">Risole</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="quad-hover1"><h5 class="col-6 prod-item">Queijadinha</h5>
                        <p class="col-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.</p></div>
                    <img src="img/produto/produto03.jpg" class="img-produtos mt-3">
                    <div class="texto-produtos">
                        <h5 class="text-center">Queijadiinha</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="quad-hover1"><h5 class="col-6 prod-item">Coxinha</h5>
                        <p class="col-6">Lorem ipsum dolor sit amet consectetur adipisicing elit.Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur.</p></div>
                    <img src="img/produto/produto04.jpg" class="img-produtos mt-3">
                    <div class="texto-produtos">
                        <h5 class="text-center">Coxinha</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- ----------------------RECEITAS--------------------- -->
    <section id="receitas">
        <div id="teste" class="row tudo">
          <div class="col-sm item">
            <div class="card item-1 ">
              <img class="card-img-top" src="imgs/coxinha.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center">Coxinha</h5>
                <p class="card-text text-center">
                  <form  class="nota" action="index.php" method="post" >
                    <div class="estrelas-coxa">
                      <input type="radio" id="vazio" name="estrela" value="" checked>

                      <label for="estrela-coxa_um"><i class="fa"></i></label>
                      <input type="radio" id="estrela-coxa_um" name="estrela" value="1">

                      <label for="estrela-coxa_dois"><i class="fa"></i></label>
                      <input type="radio" id="estrela-coxa_dois" name="estrela" value="2">

                      <label for="estrela-coxa_tres"><i class="fa"></i></label>
                      <input type="radio" id="estrela-coxa_tres" name="estrela" value="3">

                      <label for="estrela-coxa_quatro"><i class="fa"></i></label>
                      <input type="radio" id="estrela-coxa_quatro" name="estrela" value="4">

                      <label for="estrela-coxa_cinco"><i class="fa"></i></label>
                      <input type="radio" id="estrela-coxa_cinco" name="estrela" value="5">
                    </div>
                  </form>
                </p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><img width="30" height="30" src="imgs/creative.png"> Fácil</li>
                    <li class="list-group-item"><img width="30" height="30" src="imgs/porridge.png"> X porções</li>
                    <li class="list-group-item"><img width="30" height="30" src="imgs/stopwatch.png"> X minutos</li>
                  </ul>
              </div>
            </div>
          </div>
          <div class="col-sm item">
            <div class="card item-2 ">
              <img class="card-img-top" src="imgs/empada_camarao.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center">Empada</h5>
                <p class="card-text text-center">
                <form  class="nota" >
                    <div class="estrelas-empada">
                      <input type="radio" id="vazio" name="estrela" value="" checked>

                      <label for="estrela-empada_um"><i class="fa"></i></label>
                      <input type="radio" id="estrela-empada_um" name="estrela" value="1">

                      <label for="estrela-empada_dois"><i class="fa"></i></label>
                      <input type="radio" id="estrela-empada_dois" name="estrela" value="2">

                      <label for="estrela-empada_tres"><i class="fa"></i></label>
                      <input type="radio" id="estrela-empada_tres" name="estrela" value="3">

                      <label for="estrela-empada_quatro"><i class="fa"></i></label>
                      <input type="radio" id="estrela-empada_quatro" name="estrela" value="4">

                      <label for="estrela-empada_cinco"><i class="fa"></i></label>
                      <input type="radio" id="estrela-empada_cinco" name="estrela" value="5">
                    </div>
                  </form>
                </p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><img width="30" height="30" src="imgs/creative.png"> Fácil</li>
                    <li class="list-group-item"><img width="30" height="30" src="imgs/porridge.png"> X porções</li>
                    <li class="list-group-item"><img width="30" height="30" src="imgs/stopwatch.png"> X minutos</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm item">
            <div class="card item-3 ">
              <img class="card-img-top"  src="imgs/doce.jpeg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center">Doce</h5>
                <p class="card-text text-center">
                <form  class="nota" >
                    <div class="estrelas-doce">
                      <input type="radio" id="vazio" name="estrela" value="" checked>

                      <label for="estrela-doce_um"><i class="fa"></i></label>
                      <input type="radio" id="estrela-doce_um" name="estrela" value="1">

                      <label for="estrela-doce_dois"><i class="fa"></i></label>
                      <input type="radio" id="estrela-doce_dois" name="estrela" value="2">

                      <label for="estrela-doce_tres"><i class="fa"></i></label>
                      <input type="radio" id="estrela-doce_tres" name="estrela" value="3">

                      <label for="estrela-doce_quatro"><i class="fa"></i></label>
                      <input type="radio" id="estrela-doce_quatro" name="estrela" value="4">

                      <label for="estrela-doce_cinco"><i class="fa"></i></label>
                      <input type="radio" id="estrela-doce_cinco" name="estrela" value="5">
                    </div>
                  </form>
                </p>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><img width="30" height="30" src="imgs/creative.png"> Fácil</li>
                  <li class="list-group-item"><img width="30" height="30" src="imgs/porridge.png"> X porções</li>
                  <li class="list-group-item"><img width="30" height="30" src="imgs/stopwatch.png"> X minutos</li>
                </ul>
              </div>
            </div>
          </div>
        <div class="col-sm item">
          <div class="card item-4 ">
            <img class="card-img-top jad" height="165" src="imgs/queijadinha.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-center">Queijadinha</h5>
              <p class="card-text text-center">
              <form  class="nota" >
                  <div class="estrelas-jade">
                    <input type="radio" id="vazio" name="estrela" value="" checked>

                    <label for="estrela-jade_um"><i class="fa"></i></label>
                    <input type="radio" id="estrela-jade_um" name="estrela" value="1">

                    <label for="estrela-jade_dois"><i class="fa"></i></label>
                    <input type="radio" id="estrela-jade_dois" name="estrela" value="2">

                    <label for="estrela-jade_tres"><i class="fa"></i></label>
                    <input type="radio" id="estrela-jade_tres" name="estrela" value="3">

                    <label for="estrela_quatro"><i class="fa"></i></label>
                    <input type="radio" id="estrela-jade_quatro" name="estrela" value="4">

                    <label for="estrela-jade_cinco"><i class="fa"></i></label>
                    <input type="radio" id="estrela-jade_cinco" name="estrela" value="5">
                  </div>
                </form>
              </p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><img width="30" height="30" src="imgs/creative.png"> Fácil</li>
                <li class="list-group-item"><img width="30" height="30" src="imgs/porridge.png"> X porções</li>
                <li class="list-group-item"><img width="30" height="30" src="imgs/stopwatch.png"> X minutos</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Eventos -->
    <div id="Eventos">

        <!-- LINHA 1 (IMG NA ESQUERDA) -->
        <section class="features16 Img_de_eventos_Esquerda" id="features16-5">
            <div class="container">
                <div class="row main align-items-center">
                    <div class="col-md-6 image-element ">
                        <div class="img-wrap">
                            <img src="img\Eventos\buffet01.jpeg" alt="" title="">
                        </div>
                    </div>
                    <div class="col-md-6 text-element text-center"> <!-- TEXTOS -->
                        <div class="text-content">
                            <div class="mbr-section-text">
                                <h2>Lorem</h2>
                                <p class="mbr-text pt-3 mbr-light mbr-fonts-style align-left mbr-white display-5">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam quae ipsum quas nulla? Excepturi optio, voluptatibus nostrum fuga dolorem corrupti. Porro distinctio quod non sit! Obcaecati ullam nostrum numquam laboriosam!
                                </p>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
        </section>
            <!-- FIM LINHA 1 (IMG NA ESQUERDA) -->
            
        <!-- INICIO LINHA 2 (IMG NA DIREITA) -->
        <section class="features17 Img_de_eventos_Direita" id="features17-6">
            <div class="container">
                <div class="row main align-items-center">
                    <div class="col-md-6 image-element">
                        <div class="img-wrap">
                            <img src="img\Eventos\buffet02.jpeg" alt="" title="">
                        </div>
                    </div>
                    <div class="col-md-6 text-element text-center"> <!-- TEXTOS -->
                        <div class="text-content">
                            <div class="mbr-section-text">
                                <h2>Lorem</h2>
                                <p class="mbr-text pt-3 mbr-light mbr-fonts-style align-left mbr-white display-5">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quaerat modi quae consequatur nobis molestiae, distinctio tempora perferendis. Quae numquam reiciendis ullam cupiditate unde soluta veniam nemo! Iste, vitae exercitationem!    
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>          
        </section>
        <!-- FIM LINHA 2 (IMG NA DIREITA) -->
        
        <!-- LINHA 3 (IMG NA ESQUERDA) -->
        <section class="features16 Img_de_eventos_Esquerda" id="features16-5">
            <div class="container">
                <div class="row main align-items-center">
                    <div class="col-md-6 image-element ">
                        <div class="img-wrap">
                            <img src="img\Eventos\buffet03.jpeg" alt="" title="">
                        </div>
                    </div>
                    <div class="col-md-6 text-element text-center"> <!-- TEXTOS -->
                        <div class="text-content">
                            <div class="mbr-section-text">
                                <h2>Lorem</h2>
                                <p class="mbr-text pt-3 mbr-light mbr-fonts-style align-left mbr-white display-5 ">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit amet autem consequuntur esse ratione. Ullam doloribus rem quas sunt delectus enim consequatur repudiandae, deleniti blanditiis, in nam, provident ea aliquid.    
                                </p>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>          
        </section>
        <!-- FIM LINHA 3 (IMG NA ESQUERDA) -->
    </div>
    <!-- FIM EVENTOS -->
  
    <!-- Começa a parte de contatos -->
<!-- FORMULARIO -->

    <section id="contatos" class="padd-section wow fadeInUp">
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="form">
                        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" role="form" class="contactForm">
                        
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Nome *</label>
                                    <input input type="text" name="nome" placeholder="Nome" required class="form-control">
                                </div>

                                <div class="form-group col-md-3">
                                    <label>Sobrenome *</label>
                                    <input type="text" required class="form-control" name="sobrenome" placeholder="Sobrenome">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Nascimento *</label>
                                    <input type="date" required class="form-control" name="data" >
                                </div>
                            
                                <div class="form-group col-md-6">
                                    <label>Email *</label>
                                <input type="email" required class="form-control" name="email" placeholder="Email">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputCPF">CPF *</label>
                                    <input type="text" required class="form-control mascara-cpfcnpj" name="CPF" placeholder="CPF">
                                </div>
                                
                                <div class="form-group col-md-6">
                                    <label>Sexo *</label>
                                    <select class="form-control" name="sexo" placeholder="Sexo">
                                        <option selected value="nenhum">Indeterminado</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="feminino">Feminino</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputTelephone">Telefone *</label>
                                    <input type="text" name="telefone" placeholder="Telefone" class="form-control" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <label>Comentario *</label>
                                    <textarea type="text" class="form-control" required name="comentario" placeholder="Escreva aqui..."></textarea>
                                    <div class="validation"></div>
                                </div>

                                <div class="form-group col-md-12">
                                    <input type="submit" name="enviar" class="btn btn-primary col-md-12">
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-4 col-md-8">
                <div class="info contatos text-center">
                    <div>
                        <p>Telefone: (71) 3333-3333</p><br>
                    </div>

                    <div>
                        
                        <p><img src="img\Contatos\Maps.png" width="30" alt="">Caminho das Árvores, Salvador - BA 40301-155</p>
                    </div>
                </div>

                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15552.07172043717!2d-38.4606134!3d-12.9707044!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7161b1753564b8b%3A0x33b3ce22ea6326f5!2sCaminho+das+%C3%81rvores%2C+Salvador+-+BA%2C+40301-155!5e0!3m2!1spt-BR!2sbr!4v1540160323859" frameborder="0" ></iframe>
                </div>

            </div>
        </div> <br><br>
        <a href="php/login.php">
            <button type="submit" placeholder="" class="btn btn-primary col-md-12">Planilha Excel(Área Restrita)</button>
        </a>
    </section>
    

        <!-- Acaba a parte de contatos -->


    <footer class="text-center">
        Desenvolvido por Caio, Paulo e Jayme. Todos Direitos Reservados
    </footer>

    <!-- JavaScript -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</div>
</body>
</html>
