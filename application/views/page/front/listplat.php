<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/fontAwesome.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/hero-slider.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/owl-carousel.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/datepicker.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/template/css/templatemo-style.css">
	<title>Regime</title>
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
    

	<section class="featured-places" id="blog">
        <div class="container">
            <div class="row" style="">
                <div class="col-md-12">
                    <div class="section-heading">
                        <span>Vos plats</span>
                        <h2></h2>
                    </div>
                </div> 
            </div> 

            <div class="row" style="margin-top:20px">
                <?php foreach($regime as $row){ ?>
                    <div class="col-md-4 col-sm-6 col-xs-12" style="margin-top:30px">
                        <div class="featured-item">
                            <div class="thumb">
                                <img src="<?php echo base_url()?><?php echo $row['photoPlat'];?>" alt="">
                                <!-- <div class="overlay-content">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div> -->
                                <div class="date-content">
                                    <h6><?php echo number_format($row['prix'],0,',',' '); ?></h6>
                                    <span>Ar</span>
                                </div>
                                
                            </div>
                            <div class="down-content">
                                <h4><?php echo $row['nomPlat'];?></h4>
                                <span>Parfait pour: <?php echo $row['nomObjectif'];?></span>
                                <p>Rejoignez notre programme "Équilibre Vital" dès aujourd'hui et découvrez comment une alimentation équilibrée peut transformer votre vie en vous apportant une vitalité et une clarté d'esprit accrues.</p>
                                <div class="row">
                                    <!-- <div class="col-md-6 first-button">
                                        <div class="text-button">
                                            <a style="font-size: 14px;"><?php echo $row['duree']; ?> JOURS</a>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="text-button">
                                            <a href="#" style="color: red;">Acheter</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

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
	
</body>
</html>