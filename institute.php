<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title id="title">Educa - Conference Event HTML Template</title>

    <!-- Favicon -->
    <link rel="icon" href="./img/core-img/favicon.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->


    <?php

      include_once('includes/dbconfig.php');
      $ref = 'institution/';
      $fetchdata = $database->getReference($ref)->getValue();
      $uid  = $_GET['id'];
      $title           = "";
      $localization    = "";
      $institution_description = "";
      $phone                   = "";
      $email                   = "";
      $website                 = "";
      $video_link              = "";

      foreach($fetchdata as $key => $row){
          if($row['uid'] == $uid ){
            $title           = $row['institution_name'];
            $localization    = $row['location'];
            $institution_description = $row['institution_description'];
            $phone                   = $row['contact'];
            $email                   = $row['email'];
            $website                 = $row['website'];
            $video_link              = $row['video_link'];
          }
      }

    ?>

    <!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="./index.html"><img src="./img/educa/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="index.html">Inicio</a></li>
                                <li><a href="#about">Sobre</a></li>
                                <li><a href="#categories-list-course">Cursos</a></li>
                                <li><a href="#college">Faculdades</a></li>
                                <li><a href="#contact">Contacto</a></li>
                            </ul>

                            <!-- Get Tickets Button -->
                            <a href="chat.html" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5"> Chat <i class="zmdi zmdi-email"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url(img/bg-img/37.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 id="page_title" class="page-title"><?php echo $title; ?></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            
                                <li id="breadcrumb_item" class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Blog Area Start -->
    <section class="confer-blog-details-area section-padding-100-0">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Post Details Area -->
                <div class="col-12 col-lg-8 col-xl-9">
                    <div class="pr-lg-4 mb-100">
                        <!-- Post Content -->
                        <div class="post-details-content">

                            <!-- Post Thumbnail -->
                            <div class="post-blog-thumbnail mb-30">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/X9zS9D7YcI0" allowfullscreen></iframe>
                                  </div>
                            </div>

                            <!-- Post Title -->
                            <h4 class="post-title" id="about"><?php echo $title; ?></h4>

                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a id="localization_first" class="post-date" href="#"><i class="zmdi zmdi-gps"></i><?php echo $localization; ?></a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-email"></i>Enviar mensagem</a>
                            </div>

                            <p id="description_first">BW Education Leadership Summit focuses on recognizing applauding the quality of education in India by uniting Institution leaders and regulators to explore how they can leverage technologies, strategies and Management tools with each other to help create a world class Institution. Bringing together the Gamut of Early Childhood Brands, K 12 Brands, Exceptional Schools, Engineering Colleges.</p>

                            <!-- Blockquote -->
                            <!-- <blockquote class="confer-blockquote">
                                <h5>Colleges together, this pivotal event will feature high level dialogue and strategies as well as be a Platform to recognize and celebrate the Top Education Brands in the Country.</h5>
                            </blockquote> -->


                            <div class="row">
                                <div class="col-6">
                                    <img class="mb-30" src="img/bg-img/51.jpg" alt="" style="">
                                </div>
                                <div class="col-6">
                                    <img class="mb-30" src="img/bg-img/52.jpg" alt="">
                                </div>
                            </div>

                            <p id="more_description">Beyond demonstrating that marketing really works, the right analytics strategies can provide insights that inspire impactful marketing decisions, leading to increased ROI and revenue growth. Join us for our Marketing Analytics &amp; Insights Summit for a two-day deep dive into how top companies are using big data and analytics to dramatically improve the efficiency and efficacy of their marketing mix.</p>
                        </div>

                      

                      

                        <!-- Post Author Area -->
<!--                        <div class="post-author-area d-flex align-items-center my-5" id="video-chat">-->
<!--                            &lt;!&ndash; Avatar &ndash;&gt;-->
<!--                            <div class="author-avatar">-->
<!--                                <img src="img/bg-img/53.jpg" alt="">-->
<!--                            </div>-->
<!--                            &lt;!&ndash; Author Content &ndash;&gt;-->
<!--                            <div class="author-content">-->
<!--                                <h5>Converse em video com UEM</h5>-->
<!--                                <span>Agendar video chat </span>-->
<!--                                <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing</p>-->
<!--                            </div>-->
<!--                        </div>-->

                      
                        <!-- Pager Area -->
                        <div class="pager-area d-flex align-items-center flex-wrap mb-80">
                            <!-- Prev Post -->
                            <div class="pager-single-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/54.jpg" alt=""></a>
                                </div>
                                <div class="post-meta">
                                    <a href="#" class="post-title">Exames</a>
                                    <span><?php echo "Exames ".$title; ?></span>
                                </div>
                            </div>

                            <!-- Next Post -->
                            <div class="pager-single-post d-flex align-items-center">
                                <div class="post-thumb">
                                    <a href="#"><img src="img/bg-img/55.jpg" alt=""></a>
                                </div>
                                <div class="post-meta">
                                    <a href="#" class="post-title">Publicacoes e noticias</a> <!---institute-blog.php-->
                                    <span>Ver publicacoes</span>
                                </div>
                            </div>
                        </div>


                        <!-- Comment Area -->
                      
                        <!-- Leave A Reply -->
                        <div class="confer-leave-a-reply-form clearfix" id="contact">
                            <h4 class="mb-30">Enviar email</h4>
                            
                            <!-- Leave A Reply -->
                            <div class="contact_form">
                                <form action="#" method="post">
                                    <div class="contact_input_area">
                                        <div class="row">
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="name" id="name" placeholder="Seu Nome" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="name" id="name-2" placeholder="Apelido" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control mb-30" name="email" id="email" placeholder="E-mail" required>
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control mb-30" name="subject" id="subject" placeholder="Seu Numero">
                                                </div>
                                            </div>
                                            <!-- Form Group -->
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control mb-30" id="Mensagem" cols="30" rows="6" placeholder="Mensagem" required></textarea>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <div class="col-12">
                                                <button type="submit" class="btn confer-btn">Enviar Mensagem <i class="zmdi zmdi-long-arrow-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Blog Sidebar Area -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                    <div class="confer-sidebar-area mb-100">

                        <!-- Single Widget Area -->
                        <!-- <div class="single-widget-area">
                            <div class="search-widget">
                                <form action="#" method="post">
                                    <input type="search" name="search-form" id="searchForm" placeholder="Search">
                                    <button type="submit"><i class="zmdi zmdi-search"></i></button>
                                </form>
                            </div>
                        </div> -->

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <!-- Post Author Widget -->
                            <div class="post-author-widget">
                                <!-- Thumbnail -->
                                <div class="post-author-avatar">
                                    <img src="img/bg-img/50.jpg" alt="">
                                </div>
                                <!-- Author Content -->
                                <div class="post-author-content">
                                    <h5 id="institute_name"><?php echo $title; ?></h5>
                                    <p id="location_and_contact">On the other hand, de-nounce with righteous</p>
                                </div>
                                <!-- Social Info -->
                                <div class="author-social-info">
                                    <a href="#"><i class="zmdi zmdi-map"></i></a>
                                    <a href="#"><i class="zmdi zmdi-view-web"></i></a>
                                    <a href="#"><i class="zmdi zmdi-phone"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area" id="college">
                            <h5 class="widget-title mb-30">Faculdades</h5>

                            


                        <?php
                        $ref = 'institution/'.$uid.'/college';
                        $fetchdata = $database->getReference($ref)->getValue();
                        ?>

                        <?php if($fetchdata != null):?>
                        <?php foreach( $fetchdata as $key => $row): ?>
                                        <!-- Single Recent Post Area -->
                            <div class="single-recent-post-area d-flex align-items-center">
                                <!-- Thumb -->
                                <div class="post-thumb">
                                    <a href="single-blog.html"><img src="img/bg-img/47.jpg" alt=""></a>
                                </div>
                                <!-- Content -->
                                <div class="post-content">
                                    <a href="single-blog.html" class="post-title"><?php echo $row['college']; ?></a>
                                    <!-- <a href="#" class="post-date"><i class="zmdi zmdi-time"></i> January 14, 2019</a> -->
                                </div>
                            </div>
                            <?php endforeach ?>
                        <?php endif?>
                            
                          
                            
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area" id="categories-list-course">
                            <h5 class="widget-title mb-30">Cursos</h5>

                            <!-- Catagories List -->
                            <ul class="categories-list">

                            <?php
                        $ref = 'institution/'.$uid.'/course';
                        $fetchdata = $database->getReference($ref)->getValue();
                        ?>

                        <?php if($fetchdata != null):?>
                        <?php foreach( $fetchdata as $key => $row): ?>
                            <li><a href="#"><?php echo $row["course"]; ?></a></li>
                            <?php endforeach ?>
                        <?php endif?>
                               
                            </ul>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <h5 class="widget-title mb-30">Tag de Navegacao</h5>

                            <!-- Tag Cloud -->
                            <ul class="tag-cloud">
                                <li><a href="#location">Localizacao</a></li>
                                <li><a href="#contact">Contacto</a></li>
                                <li><a href="#galleria">Galeria</a></li>
                                <li><a href="#video-chat">Video chat</a></li>
                            </ul>
                        </div>

                        <!-- Single Widget Area -->
                        <div class="single-widget-area">
                            <h5 class="widget-title mb-30">Galeria</h5>

                            <!-- Sidebar Gallery -->
                            <div class="sidebar-gallery">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#"><img src="img/bg-img/21.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img src="img/bg-img/22.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img src="img/bg-img/23.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img src="img/bg-img/24.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img src="img/bg-img/25.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#"><img src="img/bg-img/26.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area bg-img bg-overlay-2 section-padding-100-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60">
                            <!-- Footer Logo -->
                            
                            <p>To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain.</p>
                            mailto:someone@example.com
                            <!-- Social Info -->
                            <div class="social-info">
                                <a href="https://www.google.com/maps/@-25.9740262,32.5711991,15z"><i class="zmdi zmdi-gps"></i></a>
                                <a href="<?php echo $website; ?>"><i class="zmdi zmdi-view-web"></i></a>
                                <a href="<?php echo "tel:".$phone; ?>"><i class="zmdi zmdi-phone"></i></a>
                                <a href="<?php echo "mailto:".$phone; ?>"><i class="zmdi zmdi-email"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60">
                            <!-- Widget Title -->
                            <h5 class="widget-title">Contacto</h5>

                            <!-- Contact Area -->
                            <div class="footer-contact-info">
                                <p><i class="zmdi zmdi-map" id="location"></i> <?php echo $localization; ?></p>
                                <p><i class="zmdi zmdi-phone" id="phone"></i><?php echo $phone; ?></p>
                                <p><i class="zmdi zmdi-email" id="email_institute"></i> <?php echo $email; ?></p>
                                <p><i class="zmdi zmdi-globe" id="site"></i> <?php echo $website; ?></p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60">
                            <!-- Widget Title -->

                         
                            <h5 class="widget-title">Tag de Navegacao</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li><a href="#location">Localizacao</a></li>
                                <li><a href="#contact">Contacto</a></li>
                                <li><a href="#galleria">Galeria</a></li>
                                <li><a href="#video-chat">Video chat</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-60">
                            <!-- Widget Title -->
                            <h5 class="widget-title" id="galleria">Galeria</h5>

                            <!-- Footer Gallery -->
                            <div class="footer-gallery">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="img/bg-img/21.jpg" class="single-gallery-item"><img src="img/bg-img/21.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/22.jpg" class="single-gallery-item"><img src="img/bg-img/22.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/23.jpg" class="single-gallery-item"><img src="img/bg-img/23.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/24.jpg" class="single-gallery-item"><img src="img/bg-img/24.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/25.jpg" class="single-gallery-item"><img src="img/bg-img/25.jpg" alt=""></a>
                                    </div>
                                    <div class="col-4">
                                        <a href="img/bg-img/26.jpg" class="single-gallery-item"><img src="img/bg-img/26.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-md-6">
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="https://educa.com" target="_blank">Educa</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <!-- Footer Menu -->
                    <div class="col-12 col-md-6">
                        <div class="footer-menu">
                            <ul class="nav">
                                <li><a href="#"><i class="zmdi zmdi-circle"></i> Terms of Service</a></li>
                                <li><a href="#"><i class="zmdi zmdi-circle"></i> Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/confer.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>
    <!--firebase-->
    <script src="https://www.gstatic.com/firebasejs/7.2.0/firebase.js"></script>
    <script src="js/db/app.js"></script>
    <script src="js/db/real-time-database.js"></script>



</body>

</html>