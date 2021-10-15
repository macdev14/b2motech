<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>B2MO Tech</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="img/ico/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/ico/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/ico/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/ico/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/ico/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/ico/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/ico/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/ico/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/ico/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/ico/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/ico/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/ico/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/ico/favicon-16x16.png">
<link rel="manifest" href="img/ico/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/ico/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">	
	
	
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

	
	
</head>

<body width="100%">

  <?php
    function __autoload($class_name) 
    {
       require_once './classes/'.$class_name.'.php';
        //echo $class_name;
    }
	$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
    ?>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left" position="absolute" top="0px">
		  <a href="#intro"><img src="img/logo4.png" alt="" width="200px" height="200px" title="" /></a>
        <!--<h1><a href="#intro" class="scrollto">BizPage</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
         
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Sobre</a></li>
         <!--  <li><a href="#services">Services</a></li> -->
         <!-- <li><a href="#portfolio">Portfolio</a></li> -->
          <li><a href="#team">Equipe</a></li>
         <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contato</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url('img/intro-carousel/1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Energia</h2>
                <p> Projetos de melhoramento em reatores de pirolise e geração de carvão ativado.</p>
                <a href="#about" class="btn-get-started scrollto">Conheça</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/intro-carousel/3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Biocombustível</h2>
                <p>Power B2, Tecnologia patenteada e exclusiva em transformação dos resíduos gerados na indústria alimentícia, em biocombustível e solventes.</p>
                <a href="#about" class="btn-get-started scrollto">Conheça</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/intro-carousel/06.jpg');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Tratamento de Efluentes </h2>
                <p>Patentes exclusivas para estação de tratamento de efluentes.</p>
                <a href="#about" class="btn-get-started scrollto">Conheça</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Próximo</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box first1">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title">O que fazemos</h4>
            <p class="description">Utilizamos tecnologia exclusiva e patenteada em novos processos de fermentação para geração de biocombustível.</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title">Para quem</h4>
            <p class="description">Pode-se dizer que nosso processo é de mão dupla pois atende uma necessidade de correto descarte pela indústria de alimentos e uma alternativa para a produção de etanol a base de outros componentes que não a cana de açúcar.</p>
          </div>

          <div class="col-lg-4 box last1">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title">Modelo de negócios</h4>
            <p class="description">A missão da empresa consiste em direcionar seus esforços e competências para a disseminação de sua tecnologia exclusiva capaz de aproveitar 100% dos resíduos gerados pela indústria brasileira de alimentos. Nossa proposta é acabar com o descarte de resíduos em lixões e incentivar a logística reversa, causando impacto zero no meio ambiente.</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Quem somos</h3>
          <p>Somos uma startup dedicada a soluções para aproveitamento de resíduos industrias do setor alimentício. Nossa tecnologia Power B2 transforma os resíduos gerados no processo de produção de alimentos em biocombustível e solventes.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title">Missão</h2>
              <p>
                Desenvolver parcerias sólidas e frutíferas com empresas e criadores de novas tecnologias transformando boas ideias em negócios sustentáveis e duradouros.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
				  <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title">Visão</h2>
              <p>
                Expandir nosso modelo de negócio para atender as demandas da nova indústria 4.0 e dos criadores de novas tecnologias e startups que buscam de apoio para crescer e desenvolver seus produtos e serviços bem como na busca dos melhores canais e soluções para os investidores em novas tecnologias. Ser referência nacional e internacional na prospecção, desenvolvimento, criação e manutenção de empresas e startups de base tecnológica.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title">Valores</h2>
              <p>
               Crença no respeito ao meio ambiente e no trabalho incansável com integridade e foco para obtenção de resultados e criação de riqueza.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>PortfÓlio</h3>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title">Tecnologia e Aplicações para tratamento de resíduos</h4>
            <p class="description">- Patentes exclusivas para tratamento de efluentes</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title">Consultoria para startups verdes</h4>
            <p class="description">- Treinamento e palestras<br>
			- Elaboração de planos de negócios<br>
			- Gerenciamento de direito e uso de patentes e royalties
			</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title">Análises Biotecnológicas</h4>
            <p class="description">- Inspeção de materiais<br>
			- Serviços de monitoramento ambiental<br>
			- Gerenciamento e operação de estação de tratamento de efluentes<br>
			</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title">Desenvolvimento de novos produtos em bioquímica</h4>
            <p class="description">- Pesquisa em produção de etanol e solventes a partir de resíduos da indústria alimentícia<br>
			- Pesquisa para a obtenção de biopolímeros e fertilizantes a base de resíduos da indústria alimentícia
			</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title">Geração de energia</h4>
            <p class="description">- Projetos de melhoria em reatores e fabricação de carvão ativado</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title">Consultoria e assessoria em projetos de sustentabilidade e meio ambiente</h4>
            <p class="description">- Elaboração de projetos de melhoria em produtos<br>
			- Estudo de viabilidade de reinserção na cadeia produtiva<br>
			- Plano de gerenciamento de resíduos sólidos<br>
			- Análises químicas de resíduos<br>
			</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Seja um Parceiro</h3>
        <p> Entre em contato conosco escolhendo uma unidade de negócio para compartilharmos conhecimento e parcerias.</p>
        <a class="cta-btn" href="#contact">Entre em contato</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Skills Section
    ============================-->
 

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Detalhes</h3>
          <p></p>
        </header>

        <div class="row counters" style="text-align: center">

			<div class="col-lg-3 col-6 text-center" margin="auto">
            
  				</div>
			
			
			
          <div class="col-lg-6 col-4 text-center" style="text-align: center" margin="auto">
            <span data-toggle="counter-up" style="text-align: center">8</span>
            <p>Projetos</p>
  				</div>
			
			

      
			

  			</div>

        <div class="facts-img"> </div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title" font-size="20px">Artigos e Notícias</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
           
			  
          </div>
        </div>
		  
		  <div class="row">
          <div class="col-lg-12">
           
			  
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
               <div class="portfolio-wrap">
				 <a href=" <?php echo $actual_link.'portfolio';?> " target="_blank">	
				  <figure>
					<img src="img/077.jpg" class="img-fluid" alt="">
				  </figure>
					 
					 <div class="portfolio-info">
                <h4>Portfólio</h4>
               
              </div>

				 
					</a>
            </div>
          </div>

        

   
			
			

        </div>

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Parceiros</h3>
        </header>
		  <div class="image-container">
        <img src="client-5.png" alt="">
		  </div>
		</div>
    </section><!-- #clients -->

    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testemunhas</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">
       
          <div class="testimonial-item">
            
            <h3>Testemunha Cliente</h3>
            <h4>...</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              A B2mo conta com um time excelente que possui vínculos acadêmicos necessários para a ponte entre inovação industrial e soluções resultantes da universidade.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Equipe</h3>
          <p>Contamos com uma equipe altamente qualificada e expertises em biotecnologia e desenvolvimento de projetos industriais de pequeno, médio e grande porte.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/person.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>André Beati</h4>
                  <span>Diretor de desenvolvimento de tecnologia em bioetanol</span>
                  <div class="social">
                   
                    
      
                    <a href="https://www.linkedin.com/in/andr%C3%A9-beati-a1b87671" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/person.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Danielle Matias</h4>
                 <span>Pesquisa e desenvolvimento</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/daniellematias" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
             <img src="img/person.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Silvio Moretto</h4>
                   <span>Finanças e Novos Negócios</span>
                  <div class="social">
                    <a href="https://www.linkedin.com/in/silvio-moretto-0b7a7245/" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Entre em Contato</h3>
         
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Endereço</h3>
              <address>Bragança Paulista, SP Brasil </address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telefone</h3>
              <p><a href="tel:+551199999999">+55 (11) 99412-5038 | +55 (19) 98359-0837</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:contato@b2motech.com.br">contato@b2motech.com.br</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Sua mensagem foi enviada com sucesso!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nome" data-rule="minlen:4" data-msg="Limite minimo de 4 caracteres" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Favor inserir Email válido" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" data-rule="minlen:4" data-msg="Limite minimo de 8 caracteres" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" id="message" name="message" rows="5" data-rule="required" data-msg="Nos envie uma mensagem." placeholder="Mensagem"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button id="submit" name="submit" type="submit">Enviar Mensagem</button></div>
          </form>

          <?php
          $actual_link = '';
          $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
            __autoload('email');
            if (isset($_POST['submit']))
            {
              email::send($actual_link);
            }
          ?>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>B2MO</h3>
			  <p>Desenvolvido por <a href="mailto:lauropimentel12@gmail.com" target="_blank">Lauro Pimentel</a></p>
			  <div class="social">
                    <a href="https://www.linkedin.com/in/lauro-pimentel-a9ba3b138/" target="_blank"><i class="fa fa-linkedin"></i></a>
                  </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Links úteis</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#home">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#about">Sobre</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#team">Equipe</a></li>
             <!-- <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Entrar em Contato </h4>
            <p>
              <br>
              Bragança Paulista, SP<br>
              Brasil <br>
              <strong>Phone:</strong> (11) 99412-5038 | (19) 98359-0837 <br>
              <strong>Email:</strong> contato@b2motech.com.br<br>
            </p>

            <div class="social-links">
              <a href="https://www.facebook.com/pages/category/Biotechnology-Company/B2MO-Tecnologia-Sustentabilidade-598717280612955/" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/b2motecnolog/" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
 
              <a href="https://www.linkedin.com/company/b2mo/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

      

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>B2MO</strong>. Direitos Reservados
      </div>
      <div class="credits">
       
 
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <!--- <script src="contactform/contactform.js"></script> --->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
