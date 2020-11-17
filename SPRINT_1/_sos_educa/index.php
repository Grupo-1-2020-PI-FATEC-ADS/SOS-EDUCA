<!DOCTYPE html>
<html lang="pt-br">
<head>

     <title>SOS-EDUCA</title>
<!-- 

Known Template 

https://templatemo.com/tm-516-known-->


     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/owl.carousel.css">
     <link rel="stylesheet" href="css/owl.theme.default.min.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="css/magnific-popup.css">
     

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/customized.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
     <?php include("conexao.php");?>

      <!-- PRE LOADER -->
 <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand"><img src="imagens/logo6.png" class="img-responsive" alt="placeholder+image" style="margin-top:-12px"height="100px" width="100px"></a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#top" class="smoothScroll">Início</a></li>
                         <li><a href="#about" class="smoothScroll">Sobre</a></li>
                         <li><a href="blog_index.php" class="smoothScroll">Blog</a></li>
                         <li><a href="index_carrinho_cliente.php">Produtos</a></li>
                         <li><a href="#contact" class="smoothScroll">Fale Conosco</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="cadastro_cliente.php" class="smoothScroll">Cadastro</a></li>
                         <li><a href="login.php" class="smoothScroll">Login</a></li>
                         <li><a href="carrinho_cliente.php"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
               </div>

          </div>
     </section>

     <!-- LIBRAS -->

     <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
      <script>
          new window.VLibras.Widget('https://vlibras.gov.br/app');
      </script>
     
     <!-- HOME -->
     <section id="home">
          <div class="row">

                    <div class="owl-carousel owl-theme home-slider">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Melhores Conteúdos</h1>
                                             <h3>Excelência na venda de produtos didáticos e materiais de educação </h3>
                                             <a href="#feature" class="section-btn btn btn-default smoothScroll">Veja Mais</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Simplicidade e Praticidade</h1>
                                             <h3>Matérias mais buscadas concentradas em um único lugar
                                             </h3>
                                             <a href="#courses" class="section-btn btn btn-default smoothScroll">Veja Mais</a>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="container">
                                        <div class="col-md-6 col-sm-12">
                                             <h1>Conheça nossos materiais</h1>
                                             <h3>Resumos, Vídeos e Jogos para fixação de Conteúdo </h3>
                                             <a href="#contact" class="section-btn btn btn-default smoothScroll">Veja Mais</a>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
          </div>
     </section>


     <!-- SERVICE SECTION -->
     <section id="service" class="parallax-section">
          <div class="container">
               <div class="row">

                    <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
                         <!-- SECTION TITLE -->
                         <h2 style="color:white;"> Conteúdos 
                         <small style="color:white;"> Matérias mais buscadas com conteúdo de qualidade concentradas em um único lugar </small></h2>
                    </div>

                    <div class="col-md-2 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                         <div class="service-thumb">
                              <i class="fa fa-book"></i>
                              <h4>Português<br><br></h4>
                              
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                         <div class="service-thumb">
                              <i class="fa fa-calculator"></i>
                              <h4>Matemática<br><br></h4>
                              
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                         <div class="service-thumb">
                              <i class="fa fa-puzzle-piece"></i>
                              <h4>Algoritmo<br><br></h4>
                              
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                         <div class="service-thumb">
                              <i class="fa fa-language"></i>
                              <h4>Inglês<br><br></h4>
                              
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                         <div class="service-thumb">
                              <i class="fa fa-laptop"></i>
                              <h5>Arquitetura e Organização de Computadores</h5>
                             
                         </div>
                    </div>

                    <div class="col-md-2 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
                         <div class="service-thumb">
                              <i class="fa fa-microchip"></i>
                              <h5>Laboratório de Hardware<br><br></h5>
                              
                         </div>
                    </div>
                    
               </div>
          </div>
     </section>
          


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2 style="color:white;">Comece agora sua jornada no conhecimento</h2>

                              <figure>
                                   <span><i class="fa fa-bullseye"></i></span>
                                   <figcaption>
                                        <h3 style="color:white;">Missão</h3>
                                        <p style="color:white;">Garantir a excelência na venda de produtos didáticos e materiais de educação através do nosso site, e estabelecer uma confiança, fidelidade e transparência com o cliente</p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-eye"></i></span>
                                   <figcaption>
                                        <h3 style="color:white;">Visão</h3>
                                        <p style="color:white;">Ser referência em qualidade de conteúdos acadêmicos sendo reconhecida na área de educação, ajudando no futuro desenvolvimento acadêmico de nossos clientes
                                        </p>
                                   </figcaption>
                              </figure>

                              <figure>
                                   <span><i class="fa fa-diamond"></i></span>
                                   <figcaption>
                                        <h3 style="color:white;">Valores</h3>
                                        <p style="color:white;">Integridade e honestidade, responsabilidade, ética, excelência, resultados, inovação e comprometimento.
                                        </p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="#" method="post">
                                   <h2>Cadastre-se Hoje</h2>
                                   <input type="text" name="full name" class="form-control" placeholder="Nome Completo" required="">

                                   <input type="email" name="email" class="form-control" placeholder="Endereço de E-mail" required="">

                                   <input type="password" name="password" class="form-control" placeholder="Sua Senha" required="">

                                   <button class="submit-btn form-control" id="form-submit">Get started</button>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team">
          <div class="container" >
          <div class="row">
               <div class="wow fadeInUp section-title" data-wow-delay="0.2s" >
                         <!-- SECTION TITLE -->
                         <h2 style="color:white;" > Notícias 
                         <small style="color:white;"> As notícias mais relevantes você encontra aqui </small></h2>
                    </div>
               </div>
          
     
          <div class="accordian">
               <ul>
                     <li>
                          <div class="image_title">
                               <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">Notícia 1</a>
                          </div> 
                          <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                               <img src="images/news3.jpg"/>
                          </a>
                     </li>
                     <li>
                          <div class="image_title">
                               <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">Notícia 2</a>
                          </div>
                          <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                               <img src="images/news2.jpg"/>
                          </a>
                     </li>
                     <li>
                          <div class="image_title">
                               <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">Notícia 3</a>
                          </div>
                          <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                               <img src="images/news1.jpg"/>
                          </a>
                     </li>
                     <li>
                          <div class="image_title">
                               <a href="#">Notícia 4</a>
                          </div>
                          <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                               <img src="images/news2.jpg"/>
                          </a>
                     </li>
                     <li>
                          <div class="image_title">
                               <a href="#">Notícia 5</a>
                          </div>
                          <a href="https://www.youtube.com/channel/UCXTfDJ60DBmA932Du6B1ydg">
                               <img src="images/news3.jpg"/>
                          </a>
                     </li>
                </ul>
           </div>
          
         
     </div>     

               
          
     </section>


     <!-- TESTIMONIAL -->
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2 style="color:white;">Avaliações<small style="color:white;">O que dizem nossos clientes</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-client">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image1.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4 style="color:white;">Miguel</h4>
                                             <span style="color:white;">Professor de Curso Superior</span>
                                        </div>
                                        <p style="color:white;">Os materiais fizeram a tarefa de preparar as aulas muito mais simples. Conteúdos diversificados e de fácil compreensão!</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image2.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4 style="color:white;">Camila</h4>
                                             <span style="color:white;">Estudante de Administração</span>
                                        </div>
                                        <p style="color:white;">Comprei os materiais de Português e eles me ajudaram com as dúvidas que eu sempre tive. Adorei! Ótimos materiais.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image3.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4 style="color:white;">Bárbara</h4>
                                             <span style="color:white;">Estudante Pré-Vestibular</span>
                                        </div>
                                        <p style="color:white;">Os resumos dos materiais juntamente com os vídeos contribuiram muito para a minha preparação para o vestibular.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="tst-image">
                                             <img src="images/tst-image4.jpg" class="img-responsive" alt="">
                                        </div>
                                        <div class="tst-author">
                                             <h4 style="color:white;">Adriano</h4>
                                             <span style="color:white;">Técnico de Informática</span>
                                        </div>
                                        <p style="color:white;">Comprei os materiais de Algoritmo, Laboratório de Hardware e AOC e eles me salvaram durante o curso Técnico. Recomendo!.</p>
                                        <div class="tst-rating">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                        </div>
                                   </div>
                              </div>

                         </div>

               </div>
          </div>
     </section> 


     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>Fale Conosco <small>Adoramos FeedBacks! Nos Ajude a melhorar</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Digite Nome Completo" name="name" required="">
                    
                                   <input type="email" class="form-control" placeholder="Digite E-mail" name="email" required="">

                                   <textarea class="form-control" rows="6" placeholder="Digite sua mensagem" name="message" required=""></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Enviar">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image" >
                              <img src="images/email.gif" class="img-responsive" alt="Smiling Two Girls">
                         </div>
                    </div>

               </div>
          </div>
     </section>       


     <!-- FOOTER -->
     <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>1800 dapibus a tortor pretium,<br> Integer nisl dui, ABC 12000</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2019 Company Name</p>
                                   
                                   <p>Design: TemplateMo</p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+65 2244 1100, +66 1800 1100</p>
                                   <p><a href="mailto:youremail.co">hello@youremail.co</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="#">Investor</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Refund Policy</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>
                                   <div class="form-group">
                                        <form action="#" method="get">
                                             <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- COOKIES 1-->
     <script type="text/javascript">
          $(document).ready(function() {
            var cookie = document.cookie
            if (!cookie.includes('accept=true')) {
              $('#myModal').modal('show');
            } else {
              alert('tem cookie')
            }
          });
  
          function closeModal() {
            $('#myModal').modal('hide');
          }
  
          function acceptCookie() {
            document.cookie = "accept=true";
            close();
          }
      </script>
      
      <!-- COOKIES 2-->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" onclick="closeModal()" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text--black" id="myModalLabel">Melhore sua experiência</h4>
            </div>
            <div class="modal-body">
              <p class="text--black">Ao navegar neste site, você aceita os cookies que usamos para melhorar a sua experiência.</P>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" onclick="closeModal()"data-dismiss="modal">Fechar</button>
              <button type="button" class="btn btn-primary" onclick="acceptCookie()">Aceito</button>
            </div>
          </div>
        </div>
      </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/owl.carousel.min.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>
     <script src="js/jquery.parallax.js"></script>
     <script src="js/jquery.magnific-popup.min.js"></script>
     <script src="js/magnific-popup-options.js"></script>
     <script src="js/wow.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


</body>
</html>
