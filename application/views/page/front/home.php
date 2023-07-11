<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Regime</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/fontAwesome.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/hero-slider.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/owl-carousel.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/datepicker.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/templatemo-style.css">

        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet"> -->

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
<!--
	Venue Template
	http://www.templatemo.com/tm-522-venue
-->
    </head>

<body>
 
    <div class="wrap">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            
                            <!-- <img src="img/logo.png" alt="Venue Logo"> -->
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="<?php echo base_url()?>FrontController/home">Home</a></li>
                                <!-- <li><a href="#">Most Visited</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Most Visited 1</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Sub Visited Menu 1</a></li>
                                                <li><a href="#">Sub Visited Two</a></li>
                                                <li><a href="#">Sub Visited Menu 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Most Visited 2</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Sub Visited Menu 4</a></li>
                                                <li><a href="#">Sub Visited Five</a></li>
                                                <li><a href="#">Sub Visited Menu 6</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Most Visited 3</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Sub Visited Menu 7</a></li>
                                                <li><a href="#">Sub Visited #8</a></li>
                                                <li><a href="#">Sub Visited Menu 9</a></li>
                                                <li><a href="#">Sub Visited #10</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- <li><a class="scrollTo" data-scrollTo="blog" href="#">Profil</a></li> -->
                                <li><a class="scrollTo" data-scrollTo="services" href="<?php echo base_url('FrontController/portfeuille'); ?>">Portefeuille</a></li>
                                <li><a class="scrollTo" data-scrollTo="services" href="<?php echo base_url('FrontController/panier'); ?>">Panier</a></li>
                                <li><a class="scrollTo" data-scrollTo="contact" href="<?php echo base_url('FrontController/log_out'); ?>">Log out</a></li>
                            </ul>
                        </nav><!-- / #primary-nav -->
                    </div>
                </div>
            </div>
        </header>
    </div>
      

    
    <section class="banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Suivez nos meilleurs régimes pour atteindre vos objectifs</h2>
                        <span>Que vous souhaitez perdre du poids, maintenir une alimentation équilibrée ou simplement améliorer votre bien-être général, nos régimes soigneusement élaborés vous offrent une variété d'options adaptées à vos besoins et à votre style de vie. </span>
                        <div class="blue-button">
                            <a class="scrollTo" data-scrollTo="popular" href="#">Voir plus</a>
                        </div>
                    </div>
                    <!-- <div class="submit-form">
                        <form id="form-submit" action="" method="get">
                            <div class="row">
                                <div class="col-md-3 first-item">
                                    <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-3 second-item">
                                    <fieldset>
                                        <input name="location" type="text" class="form-control" id="location" placeholder="Type location..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-md-3 third-item">
                                    <fieldset>
                                        <select required name='category' onchange='this.form.()'>
                                            <option value="">Select category...</option>
                                            <option value="Shops">Shops</option>
                                            <option value="Hotels">Hotels</option>
                                            <option value="Restaurants">Restaurants</option>
                                            <option value="Events">Events</option>
                                            <option value="Meetings">Meetings</option>
                                            <option value="Fitness">Fitness</option>
                                            <option value="Cafes">Cafes</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-3">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Search Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
<!-- 
    <section class="popular-places" id="popular">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Nos divers plats</span>
                        <h2>Integer sapien odio</h2>
                    </div>
                </div> 
            </div> 
            <div class="owl-carousel owl-theme">
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_1.jpg" alt="">
                        <div class="text-content">
                            <h4>Mauris tempus</h4>
                            <span>76 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_2.jpg" alt="">
                        <div class="text-content">
                            <h4>Aenean dolor</h4>
                            <span>18 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_3.jpg" alt="">
                        <div class="text-content">
                            <h4>Nunc at quam</h4>
                            <span>55 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_4.jpg" alt="">
                        <div class="text-content">
                            <h4>Fusce ac turpis</h4>
                            <span>66 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_5.jpg" alt="">
                        <div class="text-content">
                            <h4>Lorem ipsum</h4>
                            <span>82 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_1.jpg" alt="">
                        <div class="text-content">
                            <h4>Praesent nec</h4>
                            <span>76 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_2.jpg" alt="">
                        <div class="text-content">
                            <h4>Suspendisse</h4>
                            <span>36 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_3.jpg" alt="">
                        <div class="text-content">
                            <h4>Bibendum</h4>
                            <span>48 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_4.jpg" alt="">
                        <div class="text-content">
                            <h4>Quisque sodales</h4>
                            <span>66 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_5.jpg" alt="">
                        <div class="text-content">
                            <h4>Pellentesque</h4>
                            <span>85 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_1.jpg" alt="">
                        <div class="text-content">
                            <h4>Commodo</h4>
                            <span>76 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_2.jpg" alt="">
                        <div class="text-content">
                            <h4>Adipiscing</h4>
                            <span>32 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_3.jpg" alt="">
                        <div class="text-content">
                            <h4>Etiam hendrerit</h4>
                            <span>49 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_4.jpg" alt="">
                        <div class="text-content">
                            <h4>Suspendisse</h4>
                            <span>63 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item popular-item">
                    <div class="thumb">
                        <img src="img/popular_item_5.jpg" alt="">
                        <div class="text-content">
                            <h4>Sit amet dictum</h4>
                            <span>86 listings</span>
                        </div>
                        <div class="plus-button">
                            <a href="#"><i class="fa fa-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



    <section class="featured-places" id="blog">
        <div class="container">
            <div class="row" style="">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Nos régimes</span>
                        <h2>Suivez nos meilleurs régimes</h2>
                    </div>
                </div> 
            </div> 

            <div class="row" style="margin-top:20px">
                <?php foreach($regime as $row){ ?>
                    <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top:30px">
                        <div class="featured-item">
                            <div class="thumb">
                                <img src="<?php echo base_url()?>assets/template/img/featured_item_1.jpg" alt="">
                                <div class="overlay-content">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="date-content">
                                    <h6><?php echo number_format($row['prix'],0,',',' '); ?></h6>
                                    <span>Ar</span>
                                </div>
                                <div class="price-content" style="background-color: rgb(0, 188, 69); float: right; padding: 12px 10px 12px 10px; border-radius: 50%; color: white;margin-right: 4%;margin-top: 5px; font-family:arial; font-size:15px; text-align:center; ">
                                    <h6 style="height:2vh; width:2.5vw"><?php echo $row['variation'];?> %</h6>
                                </div>
                            </div>
                            <div class="down-content">
                                <h4><?php echo $row['nomRegime'];?></h4>
                                <span>Parfait pour: <?php echo $row['nomObjectif'];?></span>
                                <p>Rejoignez notre programme "Équilibre Vital" dès aujourd'hui et découvrez comment une alimentation équilibrée peut transformer votre vie en vous apportant une vitalité et une clarté d'esprit accrues.</p>
                                <div class="row">
                                    <div class="col-md-6 first-button">
                                        <div class="text-button">
                                            <a style="font-size: 14px;"><?php echo $row['duree']; ?> JOURS</a>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-button">
                                            <a href="#" style="color: red;">Acheter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>        
        </div>
    </section>



    <!-- <section class="our-services" id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Our Services</span>
                        <h2>Best Template Site</h2>
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="<?php echo base_url()?>assets/template/img/service_icon_1.png" alt="">
                        </div>
                        <h4>High Quality Design</h4>
                        <p>Etiam viverra nibh at lorem hendrerit porta non nec ligula. Donec hendrerit porttitor pretium. Suspendisse fermentum nec risus.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="img/service_icon_2.png" alt="">
                        </div>
                        <h4>Fully Customizable</h4>
                        <p>Vivamus nec vehicula felis, sit amet convallis ex. Aenean dolor risus, rutrum at tincidunt eget, placerat ac mauris.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <div class="icon">
                            <img src="img/service_icon_3.png" alt="">
                        </div>
                        <h4>Best HTML CSS Layout</h4>
                        <p>Praesent nec dui sed urna pharetra dapibus at ac elit. Aenean hendrerit metus leo, quis viverra purus condimentum nec.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="down-services">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="left-content">
                                    <h4>In hac habitasse platea dictumst</h4>
                                    <p>Aenean hendrerit metus leo, quis viverra purus condimentum nec. Pellentesque a sem semper, lobortis mauris non, varius urna. Quisque sodales purus eu tellus fringilla.<br><br>Mauris sit amet quam congue, pulvinar urna et, congue diam. Suspendisse eu lorem massa. Integer sit amet posuere tellus, id efficitur leo. In hac habitasse platea dictumst.</p>
                                    <div class="blue-button">
                                        <a href="#">Discover More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="accordions">
                                    <ul class="accordion">
                                        <li>
                                            <a>Ut in dapibus ipsum</a>
                                            <p>Nulla eget aliquet dui, vitae tincidunt nulla. Sed sagittis odio vitae auctor volutpat. In semper ex neque, ut hendrerit mauris rutrum eget. Integer consectetur neque eu enim dictum porta. Sed et risus ac sapien congue mattis.</p>
                                        </li>
                                        <li>
                                            <a>Vivamus ligula metus</a>
                                            <p>Integer vel augue arcu. Fusce ac turpis cursus, malesuada nulla quis, lobortis dui. Etiam blandit, erat efficitur rhoncus pellentesque, ligula turpis tempor dolor.</p>
                                        </li>
                                        <li>
                                            <a>Suspendisse dapibus</a>
                                            <p>Nullam nibh lacus, rhoncus sit amet feugiat vel, porttitor sit amet nibh. Pellentesque feugiat justo nec enim pretium, sed faucibus lacus aliquam. Sed ac interdum mauris.</p>
                                        </li>
                                    </ul> <!-- / accordion -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    
    

    <section id="video-container">
        <div class="video-overlay"></div>
        <div class="video-content">
            <div class="inner">
                <span>Fitness</span>
                <h2>Atteignez vos objectifs le plus rapidement possible.</h2>
                <a href="https://www.youtube.com/watch?v=Yko3GMseY40" target="_blank"><i class="fa fa-play"></i></a>
            </div>
        </div>
        <video autoplay="" loop="" muted>
        	<source src="<?php echo base_url() ?>assets/template/highway-loop.mp4" type="video/mp4" />
        </video>
    </section>



    <section class="pricing-tables">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Abonnements</span>
                        <h2>Découvrez aussi nos abonnements mensuel</h2>
                    </div>
                </div> 
            </div> 
            <div class="row">
                <div class="col-md-4">
                    <div class="table-item">
                        <div class="top-content">
                            <h4>Starter Plan</h4>
                            <h1>100 000 Ar</h1>
                            <span>/monthly</span>
                        </div>
                        <ul>
                            <li><a href="#">100 Suspendisse dapibus</a></li>
                            <li><a href="#">10x Paleo celiac enamel</a></li>
                            <li><a href="#">Williamsburg organic post ironic</a></li>
                            <li><a href="#">Helvetica pinterest yuccie</a></li>
                            <li><a href="#">Plaid shabby chic godard</a></li>
                        </ul>
                        <div class="blue-button">
                            <a href="#">Buy It Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-item">
                        <div class="top-content">
                            <h4>Premium Plan</h4>
                            <h1>200 000 Ar</h1>
                            <span>/monthly</span>
                        </div>
                        <ul>
                            <li><a href="#">200 Suspendisse dapibus</a></li>
                            <li><a href="#">20x Paleo celiac enamel</a></li>
                            <li><a href="#">Williamsburg organic post ironic</a></li>
                            <li><a href="#">Helvetica pinterest yuccie</a></li>
                            <li><a href="#">Plaid shabby chic godard</a></li>
                        </ul>
                        <div class="blue-button">
                            <a href="#">Buy It Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="table-item">
                        <div class="top-content">
                            <h4>Advanced Plan</h4>
                            <h1>350 000 Ar</h1>
                            <span>/monthly</span>
                        </div>
                        <ul>
                            <li><a href="#">400 Suspendisse dapibus</a></li>
                            <li><a href="#">40x Paleo celiac enamel</a></li>
                            <li><a href="#">Williamsburg organic post ironic</a></li>
                            <li><a href="#">Helvetica pinterest yuccie</a></li>
                            <li><a href="#">Plaid shabby chic godard</a></li>
                        </ul>
                        <div class="blue-button">
                            <a href="#">Buy It Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="contact" id="contact">
        <!--  -->
        <div class="container">
            <div class="col-md-10 col-md-offset-1">
                <!--    -->
                <div id="modal" class="modal">
                  <!-- Modal Content -->
                  <div class="modal-content">
                    <div class="close fa fa-close"></div>
                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="left-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="section-heading">
                                            <span>Talk To Us</span>
                                            <h2>Let's have a discussion</h2>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                      <fieldset>
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                      </fieldset>
                                    </div>
                                     <div class="col-md-6">
                                      <fieldset>
                                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <button type="submit" id="form-submit" class="btn">Send Message</button>
                                      </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="right-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content">                                          
                                            <div class="section-heading">
                                                <span>More About Us</span>
                                                <h2>Venue Company</h2>
                                            </div>
                                            <p>Etiam viverra nibh at lorem hendrerit porta non nec ligula. Donec hendrerit porttitor pretium. Suspendisse fermentum nec risus eu bibendum.</p>
                                            <ul>
                                                <li><span>Phone:</span><a href="#">010-050-0550</a></li>
                                                <li><span>Email:</span><a href="#">hi@company.co</a></li>
                                                <li><span>Address:</span><a href="#">company.co</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                  </div>
                </div>
            </div>
        </div>
    </section>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <!-- <img src="img/footer_logo.png" alt="Venue Logo"> -->
                        </div>
                        
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Concepteur</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="#"><i class="fa fa-stop"></i>2181 Toky</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>2206 Karine</a></li>
                                    <li><a href="#"><i class="fa fa-stop"></i>2219 Ismael</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <p>Praesent iaculis gravida elementum. Proin fermentum neque facilisis semper pharetra. Sed vestibulum vehicula tincidunt.</p>
                        <ul>
                            <li><span>Phone:</span><a href="#">010-050-0550</a></li>
                            <li><span>Email:</span><a href="#">hi@company.co</a></li>
                            <li><span>Address:</span><a href="#">company.co</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- <div class="sub-footer">
        <p>Copyright &copy; 2018 Company Name 
    
    	- Design: <a rel="nofollow" href="http://www.templatemo.com">Template Mo</a></p>
    </div> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/datepicker.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>