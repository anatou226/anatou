<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Plateforme de tradipraticiens </title>

    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>

  </head>
  <body> 

    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">

      
        <a class="" href=""><img src="assets/img/logo.png" alt="logo" width="60px" height="60px">Tradit</a> 
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active "><a href="">Accueil</a></li>                     
            <li class="">
              <a href="#Tradi" class="">Tradi-praticien</a>
            </li>            
            <li><a href="#Articles">Articles</a></li>
            <li><a href="#Contact">Contact</a></li>   
            <li><a href="{{ route('login') }}">
                <button class="btn btn-primary mb-3">
                    Se connecter
                </button>    
            </a></li>              
          </ul>                     
        </div>     
      </div>     
    </nav>
  </section>
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="mu-slider">

    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/1.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>BIENVENUE SUR NOTRE SITE DE MEDECINE TRADITIONNELLE</h4>
        <span></span>
        <h2>nous pouvons vous aidez dans le traitement de vos differentes maladies</h2>
        <p></p>
       
      </div>
    </div>

    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/2.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>BIENVENUE SUR NOTRE SITE DE MEDECINE TRADITIONNELLE</h4>
        <span></span>
        <h2>nous pouvons vous aidez dans le traitement de vos differentes maladies</h2>
        <p> </p>
      
      </div>
    </div>


    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/img/slider/3.jpg" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>BIENVENUE SUR NOTRE SITE DE MEDECINE TRADITIONNELLE</h4>
        <span></span>
        <h2>nous pouvons vous aidez dans le traitement de vos differentes maladies</h2>
        <p> </p>
        
      </div>
    </div>
 
  </section>

  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">

            <div class="mu-service-single">
              <span class="fa fa-book"></span>
              <h3>Soin a travers notre plateforme</h3>
              <p>nous vous proposons des produits naturels pour vos traitements!</p>
            </div>

            <div class="mu-service-single">
              <span class="fa fa-users"></span>
              <h3>Les tradipraticiens reconnus</h3>
              <p>Ils sont repartis en fonction de leur ville et les differents traitements qu'ils offrent aux patients!</p>
            </div>

            <div class="mu-service-single">
              <span class="fa fa-table"></span>
              <h3>Quelques temoignages</h3>
              <p>des  patients satisfaits ont temoignés de la qualités des soins qu'ils ont reçus grace a notre plateforme!</p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->

  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>Quelques plantes</h2>              
                  </div>
                  <!-- End Title -->
                  <p>la nature est un facteur primordial pour notre bien etre, la nature est plaint de ressource, il faut savoir en profiter.</p>
                  <ul>
                    <li>la plante papayer peut traiter plusieurs maladies(exemple:la fievre).</li>
                    <li>l'arbre de goyage !</li>
                    <li>le citronnelle ?</li>
                    <li>les feuilles de manioc.</li>
                    <li>les fruits de nep-nep.</li>
                  </ul>
                  <p>Ces quelques plantes sont tres efficaces pour traiter certaines maladies,!</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <a  href="">
                  <img src="assets/img/tradi1.jpg" alt="img">
                </a>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->

  <!-- Start about us counter -->
  <section id="mu-abtus-counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-abtus-counter-area">
            <div class="row">
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-book"></span>
                  <h4 class="counter">568</h4>
                  <p>Sujet</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-users"></span>
                  <h4 class="counter">3500</h4>
                  <p>Etudier</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single">
                  <span class="fa fa-flask"></span>
                  <h4 class="counter">65</h4>
                  <p>traitements</p>
                </div>
              </div>
              <!-- End counter item -->
              <!-- Start counter item -->
              <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-abtus-counter-single no-border">
                  <span class="fa fa-user-secret"></span>
                  <h4 class="counter">250</h4>
                  <p>Tradipraticiens</p>
                </div>
              </div>
              <!-- End counter item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us counter -->
  <section id="mu-our-teacher">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-our-teacher-area">
            <!-- begain title -->
            <div class="mu-title">
              <h2 id='Tradi'>LES TRADI-PRATICIENS</h2>
              <p>les tradipraticiens proposent des produits faite par eux memes a base des plantes, les produits sont sans effets secondaire, car tout est naturel.</p>
            </div>
            <!-- end title -->
            <!-- begain our teacher content -->
            <div class="mu-our-teacher-content">
              <div class="row">
               @foreach ($praticiens as $praticien)
               <div class="col-lg-3 col-md-3  col-sm-6">
                <div class="mu-our-teacher-single">
                  <figure class="mu-our-teacher-img">
                    <img src="{{asset('image').'/'.$praticien->photo}}" alt="teacher img">
                  </figure>                    
                  <div class="mu-ourteacher-single-content">
                    <h4 class="fw-bold">{{$praticien->user->nom}} {{$praticien->user->prenom}}</h4>
                    <span class="badge">{{  $praticien->user->phone1 }}</span>
                    <span class="badge">{{  $praticien->user->phone2 }}</span>
                    <p>{{ $praticien->description }}</p>
                  </div>
                </div>
              </div>
               @endforeach
              </div>
            </div> 
            <!-- End our teacher content -->           
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="mu-title">
    <h2>QUELQUES TEMOIGNAGES</h2>
  </div>
  <section id="mu-testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-testimonial-area">
            <div id="mu-testimonial-slide" class="mu-testimonial-content">
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p> Les maux de mon bebe ont pratiquement disparus et il a retrouvé son energie en quelques jours alors qu'il luttais depuis plusieurs mois de maux de ventre au point parfois de ne pas tenirdebout; je ne saurais omettre, en ce qui concerne le bienfait de la seance , la gentillesse naturelle et la douceur du tradipraticien.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('image\Lagos-Traditional-Medicine.png')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>maida zerbo</h4>
                  <span>femme au foyer</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>MR ZONGO est un praticien tres a l'ecoute, j'ai ete accompagnée avec bienveillance vers la guerison. je vais beaucoup mieux aujourd'hui et je revis. là où la medecine occidentale n'a pas su m'aider pendant des annees, la medecine traditionnelle a eté tres efficace en quelques semaines.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('image\Traditional_Medicine.png')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Rebéca Michel</h4>
                  <span>un patient satisfait</span>
                </div>
              </div>
              <!-- end testimonial single item -->
              <!-- start testimonial single item -->
              <div class="mu-testimonial-item">
                <div class="mu-testimonial-quote">
                  <blockquote>
                    <p>je remercie MR ZONGO pour le traitement qu'il a fait pour ma fille.je vous le recommande pour le traitement de vos enfants qui tombent tout le temps malade.</p>
                  </blockquote>
                </div>
                <div class="mu-testimonial-img">
                  <img src="{{asset('image\Traditional_Medicine.png')}}" alt="img">
                </div>
                <div class="mu-testimonial-info">
                  <h4>Anatou SOW</h4>
                  <span>Etudiante</span>
                </div>
              </div>
              <!-- end testimonial single item -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial -->

  <!-- Start from blog -->
  <section id="mu-from-blog">
    <div class="contoainer">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-from-blog-area">
            <!-- start title -->
            <div class="mu-title">
              <h2 id="Articles">LES ARTICLES</h2>
            </div>
            <!-- end title -->  
            <!-- start from blog content   -->
            <div class="mu-from-blog-content">
              <div class="row">
                @foreach ($posts as $post)
                <div class="col-md-4 col-sm-4">
                  <article class="mu-blog-single-item">
                    <figure class="mu-blog-single-img">
                      <a href="#"><img src="{{asset('image').'/'.$post->photo}}" alt="img"></a>
                      <figcaption class="mu-blog-caption">
                        <h3><a href="#">{{ $post->titre }}</a></h3>
                      </figcaption>                      
                    </figure>
                    <div class="mu-blog-meta">
                      <span><i class="fa fa-comments-o"></i>  {{ $post->category->libele }}</span> <br>
                      <a href="#">{{ $post->created_at }}</a>
                    </div>
                    <div class="mu-blog-description">
                      <p>{{ $post->description }}</p>
                    </div>
                  </article>
                </div>
                @endforeach
              </div>
            </div>     
            <!-- end from blog content   -->   
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End from blog -->

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="#">Accueil</a></li>
                  <li><a href="">Tradi-praticien</a></li>
                  <li><a href="">Articles</a></li>
                  <li><a href="">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4 id="Contact">Contact</h4>
                <address>
                  <p>P.O. Box 320, Ross, California 9495, USA</p>
                  <p>Phone: (415) 453-1568 </p>
                  <p>Website: www.markups.io</p>
                  <p>Email: info@markups.io</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved. Designed by <a href="http://www.markups.io/" rel="nofollow">MarkUps.io</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>