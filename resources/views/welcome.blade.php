<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Website Title -->
    <title>Blandin-ux Développeur</title>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font-Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Lightbox -->
	<link href="assets/lightbox/css/lightbox.css" rel="stylesheet">
    <!-- Text Rotator-->
	<link href="assets/textrotator/simpletextrotator.css" rel="stylesheet">
	<!-- FlexSlider -->
    <link href="assets/flexslider/flexslider.css" rel="stylesheet">
	<!-- Theme Style -->
    <link href="css/style.css" rel="stylesheet">
	<!-- Animations -->
    <link href="css/animate.css" rel="stylesheet">
	<!-- Custom Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/html5shiv/html5shiv.js"></script>
    <script src="assets/respond/respond.min.js"></script>
    <![endif]-->
  </head>
    <body id="top">

      <!-- ****************************** Preloader ************************** -->
      <div id="preloader"></div>


	  	<!-- ==========================
        HEADER SECTION
        =========================== -->
        <header id="home">
		    <!-- creative menu -->
            <div class="container-fluid">
              <div class="row">
                <div class="menu-wrap">
				<nav class="menu">
				    <!-- Menu Links -->
					<div class="icon-list">
						<a href="#top"><i class="fa fa-fw fa-home"></i><span>Home</span></a>
						<a href="#about"><i class="fa fa-fw fa-quote-left"></i><span>About</span></a>
						<a href="#service"><i class="fa fa-fw fa-globe"></i><span>Service</span></a>
						<a href="#portfolio"><i class="fa fa-fw fa-picture-o"></i><span>Portfolio</span></a>
						<a href="#blog"><i class="fa fa-fw fa-rss"></i><span>Blog</span></a>
                        <a href="#contact"><i class="fa fa-fw fa-envelope-o"></i><span>Contact</span></a>
                        @if(Route::has('login'))
                            @auth
                        <a href="/deconnexion"><i class="fa fa-fw fa-sign-out"></i><span>Déconnexion</span></a>
                        @else
                        <a href="/login"><i class="fa fa-fw fa-sign-in"></i><span>Connexion</span></a>
                            @endauth
                        @endif
					</div>
				</nav>
			    </div>
			    <button class="menu-button" id="open-button"></button><!-- menu button -->
              </div><!--/row-->
            </div><!--/container-->
		  <!-- Header Image -->
          <section class="hero" id="hero">
            <div class="container">
			  <!-- Slider Button (don't edit!)-->
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href=""><span></span></a>
                </div>
              </div>
			  <!-- HEADER HEADLINE -->
              <div class="row">
                <div class="col-md-8 col-md-offset-1 inner">
                  <h1 class="animated fadeInDown">
                    B<span style="color:#E04343;">-ux</span><br/>
                    <span>Nso<span style="color:#FFE800">n</span>dé</span>
                  </h1><!-- Title -->
                  <h3 class="animated fadeInUp delay-05s"><span class="rotate">Web Designer, Développeur Back-End, Développeur Front-End, Pianiste</span></h3><!-- Text Rotator -->
                </div>
              </div>
			  <!-- Learn More Button -->
              <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                  <a href="" class="scrollto wow fadeInUp delay-5s ">
			            <p>Voir +</p>
			            <p class="scrollto--arrow"><img src="img/scroll-down.png" alt="scroll down arrow"></p>
			        </a>
                </div>
              </div>
            </div>
          </section>
		  <!-- Header Image End -->
        </header>
		<!-- ==========================
        HEADER SECTION END
        =========================== -->




		<!-- ==========================
        ABOUT SECTION
        =========================== -->
        <section class="intro text-center section-padding color-bg" id="about">
          <div class="container">
		    <!-- WELCOME TEXT -->
            <div class="row">
              <div class="col-md-8 col-md-offset-2 wp1">
                <h1 class="arrow"> un peu <span> de </span> moi</h1><!-- Headline -->
				<!-- about / welcome text -->
                <p> Je suis assez artiste pour puiser librement dans mon imagination. Le fait est que quand je vois un coucher de soleil ou
                une <a href="#">cascade</a> ou quelque chose comme ça, pendant une fraction de seconde c'est tellement génial, parce que pendant un
                petit moment je suis hors de mon cerveau, et ça n'a rien à voir avec moi. Je n'essaye pas de comprendre, tu vois ce que
                je veux dire? Et je me demande si je peux trouver un moyen de maintenir cette immobilité mentale.</p>
              </div>
            </div>
          </div>
        </section>




<!-- ==========================
        SERVICE SECTION
        =========================== -->
        <section class="features text-center section-padding" id="service">
          <div class="container">
        <!-- Headline -->
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow"> En gros je suis !</h1>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
          <div class="services">
          <!-- Service Box 1 -->
                  <div class="col-md-4 wp2 item">
                    <div class="icon">
                     <a href="#projets"><i class="fa fa-camera"></i></a> <!-- Icon -->
                    </div>
                    <h2>Dev Back-End</h2><!-- Title -->
                    <p> Développeur Back-End dans la mésure oû la fonctionnalité est ma priorité car ce qui fait la force de l'application
                        c'est ce qu'elle peut faire par exemple le traitement des données, des mises à jours, des sauvegardes... En gros
                        c'est un peu ça quoi !
                    </p><!-- Description -->
                  </div>
          <!-- Service Box 2 -->
                  <div class="col-md-4 wp2 item delay-05s">
                    <div class="icon">
                      <i class="fa fa-desktop"></i><!-- Icon -->
                    </div>
                    <h2>Concepteur App Web</h2><!-- Title -->
                      <p> De nos jours, l'utilisation d'une application de gestion est très importante seulement
                          l'utilisation des applications de bureaux sont devenues trop révolues, le web a mis
                          en place des possibilités permettant d'utiliser des applications locales en ligne par exemple
                          une application qui permet de gerer des boutique !

                    </p><!-- Description -->
                  </div>
          <!-- Service Box 3 -->
                  <div class="col-md-4 wp2 item delay-1s">
                    <div class="icon">
                      <i class="fa fa-cubes"></i><!-- Icon -->
                    </div>
                    <h2>Divers : Instrumentiste</h2><!-- Title -->
                    <p> Pianiste.. Pianiste.. Pianiste, en fait le piano est mon instrument de base c-à-d je joue aussi
                        à d'autres instruments de musique... La musique est l'une des choses parmit tant d'autres qui
                        m'inspire dans le code et autres.
                    </p><!-- Description -->
                  </div>
          </div>
                  <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </section>





		<div class="container-fluid">
		    <!-- About 1 -->
			<div class="row color-bg">
				<div class="col-md-6 nopadding features-intro-img">
					<div class="about-image" style="background-image:url(img/about1.png)"></div><!-- about image 1 -->
				</div>
				<div class="col-md-6 about-text">
					<h6> Développeur de haute qualité ?</h6><!-- headline-->
					<p> Oui développeur de haute qualité parce qu'au niveau d'étude que j'ai pour le moment les choses que j'ai eu à
              réaliser plusieurs de ma promotion ne l'on pas encore fait. Je ne suis pas encore un Développeur confirmé, je n'ai
              pas encore terminé avec mes études universitaire, ni obtenue ma licence mais je suis capable de
              faire de grande choses tels que : informatiser une entreprise (apporter des solutions à des problèmes
              de l'entreprise via des logiciels).
          </p><br><!-- About Text 1 -->
					<a href="" class="weight-outline-btn">Lire la suite</a><!-- read more button  -->
				</div>
			</div>
			<!-- About 2 -->
			<div class="row">
				<div class="col-md-6 about-text">
					<h6>Etudes suppérieures</h6><!-- Headline -->
					<p> Je fais mes études suppérieures à l'école africaine de développement <b> (E.A.D) </b> à partir de 2018 j'ai debuté avec la
              première année, j'ai commencé avec l'option <b> <i> Réseau-Télecommunication </i> </b> puis j'ai changé d'option seulement en
              pendant cette première année et je suis passé l'option <b> <i> Génie-Informatiquue </i> </b> et c'est à
              partir de là que je me suis cadré et fixé là dessus ( le code ), et actuellement je suis en troisième année
              bientôt je vais terminer avec ma licence .
               </p><br><!-- About Text 2 -->
					<a href="" class="weight-outline-btn">Lire la suite</a>	<!-- read more button  -->
				</div>
				<div class="col-md-6 nopadding features-intro-img">
					<div class="about-image" style="background-image:url(img/FormatFactoryIMG_6399.jpg)"></div><!-- about image 2 -->
				</div>
			</div>
			<!-- About 3 -->
			<div class="row color-bg">
				<div class="col-md-6 nopadding features-intro-img">
					<div class="about-image" style="background-image:url(img/FormatFactoryIMG_7117.jpg)"></div><!-- about image 3 -->
				</div>
				<div class="col-md-6 about-text">
					<h6>Autres</h6><!-- Headline-->
					<p> A part l'école, le travail et tout ce qui concerne le monde professionel j'ai plusieurs distractions tels que rester
              passer du temps avec mes collègues de classe, écouter de la musique, Assister à des conférences beaucoup plus sur le
              domaine de l’informatique et de la finace, dans mon pays le Congo du 17 au 19 février 2020 c’était tenu une conférence
              sur le numérique de la 2ème édition dont le thème était : la transformation digitale ou numérique « OPPORTUNITE ET MENACE »
              cette conférence m’avait beaucoup inspiré surtout au moment où les intervenants parlaient sur l’intelligence artificielle.
          </p><br><!-- About Text 3 -->
					<a href="" class="weight-outline-btn">Lire la suite</a><!-- read more button  -->
				</div>
			</div>
		</div>
		<!-- ==========================
        ABOUT SECTION END
        =========================== -->




		<!-- ==========================
        PORTFOLIO SECTION
    =========================== -->
        <section class="swag text-center" id="portfolio">
          <div class="container">
		    <!-- Headline -->
            <div class="row">
              <h1 class="arrow" id="projets">
                Mes projets les plus <span>récents</span>
              </h1>
            </div>
          </div>
        </section>

        <div class="container">
          <div class="row row-offset-0">

          <!-- PORTFOLIO ITEM 1 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/bux1.jpg" data-lightbox="roadtrip" title="Ici j'ai eu a développer une application pour un cabinet comptable"><img class="grayscale" src="img/portfolio/FormatFactorybux1.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

  	    <!-- PORTFOLIO ITEM 2 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/IMG_E4282.jpg" data-lightbox="roadtrip" title="Avec Alexon nous avons développé une application de gestion d'une boutique pour un libanin"><img class="grayscale" src="img/portfolio/FormatFactoryIMG_E4282.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

  		<!-- PORTFOLIO ITEM 3 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/IMG_E4279.jpg" data-lightbox="roadtrip" title="Avec Alexon nous avons aussi conçu des pages web pour une entreprise ''RELATEC-Congo''"><img class="grayscale" src="img/portfolio/FormatFactoryIMG_E4279.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

  		<!-- PORTFOLIO ITEM 4 -->
          <div class="col-md-3 col-sm-6 ">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/IMG_E4687.jpg" data-lightbox="roadtrip" title="Avec Jim nous avons travaillé sur les bases de données relationnelle (CRUD et autres manipilations)"><img class="grayscale" src="img/portfolio/FormatFactoryIMG_E4687.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

          <!-- PORTFOLIO ITEM 5 -->
          <div class="col-md-3 col-sm-6 ">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/IMG_E4820.jpg" data-lightbox="roadtrip" title="Avec Jim nous avons aussi pris des photos qui y figurent dans cesite"><img class="grayscale" src="img/portfolio/FormatFactoryIMG_E4820.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

  	    <!-- PORTFOLIO ITEM 6 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/IMG_E4807.jpg" data-lightbox="roadtrip" title="Avec Félix nous avons travaillé sur plusieurs applications en visual basic et Windev, nous avons aussi travaillé sur les bases de données relationnelles sur des SGBD tels que Mysql et Oracle 10g ! "><img class="grayscale" src="img/portfolio/FormatFactoryIMG_E4807.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

  		<!-- PORTFOLIO ITEM 7 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/20200824_170704.jpg" data-lightbox="roadtrip" title="Daniel, Alex et moi avions travaillé sur plusieurs projets assés confidentiel"><img class="grayscale" src="img/portfolio/FormatFactory20200824_170704.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->

  		<!-- PORTFOLIO ITEM 8 -->
          <div class="col-md-3 col-sm-6">
              <div class="overlay-effect effects clearfix">
                  <div class="img">
                      <a href="img/portfolio/IMG_7116.jpg" data-lightbox="roadtrip" title="Nous avons conçu un site internet pour une université"><img class="grayscale" src="img/portfolio/FormatFactoryIMG_7116.jpg" alt="Portfolio Item"></a>
                  </div>
              </div>
          </div>
  	    <!-- PORTFOLIO ITEM END -->
        </div><!--/row-->
      </div><!--/.container-->
		<!-- ==========================
        PORTFOLIO SECTION END
        =========================== -->




		<!-- ==========================
        CUSTOM SPACER
        =========================== -->
		<div class="spacer-cta text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <a href="#emboche" class="outline-btn">Embocher Caleb Nsondé</a>
              </div>
            </div>
          </div>
        </div>
		<!-- ==========================
        CUSTOM SPACER END
        =========================== -->



    <!-- ==========================
        BLOG SECTION
        =========================== -->
    <section class="text-center section-padding" id="blog">
          <div class="container">
        <!-- Headline -->
        <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Mon <span>petit</span> blog</h1>
              </div>
            </div><br><br>

      <!-- Blog Slider -->
            <div class="row">
              <div id="blogSlider">
                <ul class="slides">
                  <li>
            <!-- Blog Entry 1 -->
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/adb.png" class="grayscale" alt="Blog Item"><!-- Blog Image -->
                        </div>
                      </div>
            <br>
                      <h2>Administration des bases de données</h2><!-- Headline -->
                      <p>Savoir administrer les bases de données est une chose nécessaire et elle est très capitale pour la
                        conception d'une application(web, mobile, dekstop...) .
                      </p><!-- Description-->
                    </div>
          <!-- Blog Entry 2 -->
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/blog2.jpg" class="grayscale" alt="Blog Item"><!-- Blog Image -->
                        </div>
                      </div>
            <br>
                      <h2>Annalyste Programmeur</h2><!-- Headline -->
                      <p> Besoin de connaitre la structuration d'une application dont vous voulez concevoir bah... chui là
                        pour vous vendre mes services que ce soit en bases de données, language de Programmatiion et autres.
                      </p><!-- Description -->
                    </div>
          <!-- Blog Entry 3 -->
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/administration.jpg"  class="grayscale" alt="Blog Item"><!-- Blog Image -->
                        </div>
                      </div>
            <br>
                      <h2>Un peu d'administration réseau et système</h2><!-- Headline -->
                      <p>Ces deux domaines en informatique sont importants certe,  par rapport
                        à mon niveau actuel je ne vois pas trop l'interêt ! celà ne veut pas dire pour autant que ce sont des chose à
                        négliger non loin de là !
                      </p><!-- Description-->
                    </div>
                  </li>
                  <li>
            <!-- Blog Entry 4 -->
                    <div class="col-md-4 wp4">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/sgbd.png" class="grayscale" alt="Blog Item"><!-- Blog Image -->
                        </div>
                      </div>
            <br>
                      <h2>Quelques SGBD</h2><!-- Headline -->
                      <p>Tous les systèmes de gestion de base de données relationnelle utilisent un language en commun qui est le language
                        <b>SQL</b> et de préference j'utilise Mysql pour le web et souvent Oracle pour le dekstop   </p><!-- Description -->
                    </div>
          <!-- Blog Entry 5 -->
                    <div class="col-md-4 wp4 delay-05s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/annalyse.png" class="grayscale" alt="Blog Item"><!-- Blog Image -->
                        </div>
                      </div>
            <br>
                      <h2>Outils d'analyse</h2>
                      <p> La plus part du temps pour éffectuer mes analyses j'utilise mon bloc-note <b>MDR</b>... mais il en existe
                          tant tels que : Sybase, Windev(analyse)...
                      </p>
                    </div>
          <!-- Blog Entry 6 -->
                    <div class="col-md-4 wp4 delay-1s">
                      <div class="overlay-effect effects clearfix">
                        <div class="img">
                          <img src="img/cisco.jpg" class="grayscale" alt="Blog Item"><!-- Blog Image -->
                        </div>
                      </div>
            <br>
                      <h2>Outils pour l'admin R & S</h2><!-- Headline -->
                      <p>Il en existe plusieurs, de préference j'utilise CISCO PACKET TRACER qui est un simulateur
                         de matériel réseau Cisco. Cet outil est créé par Cisco Systems qui le fournit gratuitement aux centres
                        de formation.
                      </p><!-- Description -->
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
    <!-- ==========================
        BLOG SECTION END
        =========================== -->



		<!-- ==========================
        CLIENT SECTION
        =========================== -->
		<div class="container-fluid">
			<div class="row color-bg">
				<!-- Left Image -->
				<div class="col-md-6 nopadding features-intro-img wow fadeInLeft">
					<div class="about-image" style="background-image:url(img/clients.png)"></div>
				</div>
				<!-- Clients / Testimonials -->
				<div class="col-md-6 nopadding about-text">
				<h6>Ce que nos clients disent</h6>
					<div id="clientSlider">
					   <ul class="slides">
					       <li><p> Client1 <br>	<small>- NomCli1 </small></p></li>
						   <li><p> Client2 <br>	<small>- NomCli2</small></p></li>
						  <li><p>Client3 <br>	<small>- NomCli3</small></p>	</li>
					   </ul>
					</div>
				</div>
			</div>
		</div>
		<!-- ==========================
        CLIENTS SECTION END
        =========================== -->





		<!-- ==========================
        NEWSLETTER SECTION
        =========================== -->
        <section>
		<div class="container-fluid">
				<div class="row color-bg">
				    <div class="col-md-6 nopadding subscribe text-center">
					 <h1><i class="fa fa-paper-plane"></i><span>Inscrivez vous à notre newsletter</span></h1><!-- Heading -->
                     <form action="">
                       <input type="text" name="" value="" placeholder="" required><!-- E-Mail -->
                       <input type="submit" name="" value="Send"><!-- Submit Button -->
                    </form>
					</div>
					<div class="col-md-6 nopadding features-intro-img">
						 <div class="about-image" style="background-image:url(img/newsletter.png)"></div><!-- Right Image -->
					</div>
				</div>
			</div>
        </section>
		<!-- ==========================
        NEWSLETTER SECTION END
        =========================== -->



		<!-- ==========================
        CONTACT SECTION
        =========================== -->
        <section class="text-center section-padding contact-wrap" id="contact">
		  <!-- To Top Button -->
          <a href="#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
		    <!-- Headline -->
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Me <span>joindre</span> ici</h1>
              </div>
            </div>
            <div class="row contact-details">
			  <!-- Adress Box -->
              <div class="col-md-4">
                <div class="dark-box box-hover">
                  <h2><i class="fa fa-map-marker"></i><span>Adresse</span></h2>
                  <p>Rue de Yanguala, Fouks</p>
                </div>
              </div>
			  <!-- Phone Number Box -->
              <div class="col-md-4">
                <div class="dark-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Télephone</span></h2>
                  <p>+242-06-426-55-95</p>
                </div>
              </div>
			  <!-- E-Mail Box -->
              <div class="col-md-4">
                <div class="dark-box box-hover">
                  <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2>
                  <p><a href="">nsondecaleb@gmail.com</a></p>
                </div>
              </div>
            </div>
			<div class="row">
			  <!-- Google Maps (Change your Settings below) -->
			  <div class="col-md-6">
			    <div id="googlemaps"></div>
			  </div>
			  <!-- Contact Form -->
			  <div class="col-md-6 contact">
			     <form role="form" method="post" action="/demande" id="emboche">
                 @csrf
				            <!-- Name -->
                            <div class="row">
                                <div class="col-md-6">
								    <!-- E-Mail -->
                                    <div class="form-group">
                                        <input required type="text" class="form-control" placeholder="Votre nom " name="name">
                                    </div>
                                </div>
                                <div class="col-md-6">
								    <!-- Phone Number -->
                                    <div class="form-group">
                                        <input required type="email" class="form-control" placeholder="Adresse Email" name="email">
                                    </div>
                                </div>
                            </div>
							<!-- Message Area -->
                            <div class="form-group">
                                <textarea required name="message" class="form-control" placeholder="Ecriver votre méssage ici..." style="height:232px;"></textarea>
                            </div>
							<!-- Subtmit Button -->
                            <button type="submit" class="btn btn-send">
                                Envoyez votre méssage
                            </button>
                   </form>
			  </div>
			</div>
			<br>
			<!-- Social Buttons - use font-awesome, past in what you want -->
            <div class="row">
              <div class="col-md-12">
                <ul class="social-buttons">
                  <li><a href="http://www.dribbble.com" class="social-btn"><i class="fa fa-dribbble"></i></a></li><!-- dribble -->
                  <li><a href="http://www.twitter.com" class="social-btn"><i class="fa fa-twitter"></i></a></li><!-- twitter -->
                  <li><a href="http://www.facebook.com" class="social-btn"><i class="fa fa-facebook"></i></a></li><!-- facebook -->
				  <li><a href="http://www.deviantart.com" class="social-btn"><i class="fa fa-deviantart"></i></a></li><!-- deviantart -->
				  <li><a href="http://www.youtube.com" class="social-btn"><i class="fa fa-youtube"></i></a></li><!-- youtube -->
                </ul>
              </div>
            </div>
          </div>
        </section>
		<!-- ==========================
        CONTACT SECTION END
        =========================== -->



		<!-- ==========================
        FOOTER SECTION
        =========================== -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <p>Concepteur &copy;  <a href="">Blandin-ux</a>
              </div>
            </div>
          </div>
        </footer>
		<!-- ==========================
        FOOTER SECTION END
        =========================== -->


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- SmoothScroll -->
    <script type="text/javascript" src="assets/smoothscroll/smoothscroll.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/waypoints.min.js"></script>
    <!-- classie.js -->
	<script src="js/classie.js"></script>
    <!-- FlexSlider -->
    <script src="assets/flexslider/jquery.flexslider.js"></script>
	<!-- Modernizr -->
    <script src="js/modernizr.js"></script>
	<!-- Text Rotator -->
	<script src="assets/textrotator/jquery.simple-text-rotator.js"></script>
	<!-- Lightbox.js -->
    <script src="assets/lightbox/js/lightbox.min.js"></script>
    <!-- Google Maps -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeKBBPJTG3v5w3cNPAgM6ZsJiPyL1mP_o&amp;sensor=false"></script>
	<!-- Theme JavaScript Core -->
	<script src="js/main.js"></script>
	<script src="js/script.js"></script>

	<!-- GOOGLE MAPS DATA -->
    <script type="text/javascript">
    // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 15,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.68961985411178, -74.01618003845215), // New York

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [	{		featureType:'water',		stylers:[{color:'#F2F2F2'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#FFFFFF'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#ADADAD'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googlemaps');

            // Create the Google Map using out element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);
        }

    </script>

	<!-- TEXT ROTATOR SETTINGS -->
    <script type="text/javascript">
    $(".rotate").textrotator({
      animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
      separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
      speed: 2000 // How many milliseconds until the next word show.
    });
    </script>

    </body>
</html>
