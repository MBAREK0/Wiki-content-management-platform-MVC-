<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Catalog</title>
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- https://fonts.google.com/ -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo-video-catalog.css">
<!--

TemplateMo 552 Video Catalog

https://templatemo.com/tm-552-video-catalog

-->
</head>

<body>
    <div class="tm-page-wrap mx-auto">
        <div class="position-relative">
            <div class="position-absolute tm-site-header">
                <div class="container-fluid position-relative">
                    <div class="row">
                        <div class="col-5 col-md-8 ml-auto mr-0">
                            <div class="tm-site-nav">
                                <nav class="navbar navbar-expand-lg mr-0 ml-auto" id="tm-main-nav">
                                    <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed" type="button"
                                        data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span>
                                            <i class="fas fa-bars tm-menu-closed-icon"></i>
                                            <i class="fas fa-times tm-menu-opened-icon"></i>
                                        </span>
                                    </button>
                                    <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                        <ul class="navbar-nav text-uppercase">
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="about.html">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="contact.html">SignUp</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-welcome-container text-center text-white">
                <div class="tm-welcome-container-inner">
                    <a href="#content" class="btn tm-btn-animate tm-btn-cta tm-icon-down">
                        <span>Discover</span>
                    </a>
                </div>
            </div>

            <div id="tm-video-container">
                <video autoplay muted loop id="tm-video">
                    <source src="video/sunset-timelapse-video.mp4" type="video/mp4">
                        <source src="assets/video/wheat-field.mp4" type="video/mp4">
                </video>    
            </div>
            
            <i id="tm-video-control-button" class="fas fa-pause"></i>
        </div>

        <div class="container-fluid">
            <div id="content" class="mx-auto tm-content-container">
                <main>
                    <div class="row">
                        <div class="col-12">
                        <div class="mt-5 p-5" style="background:#435c70;padding-bottom: 10px !important;">
                           <div class="d-flex  align-items-center " style= "gap:15px; color:aliceblue; justify-content:space-between;">
                           <h3>Profile </h3> <div><h4><span>Hello </span><?php  echo $_SESSION['username']; ?></h4></div>
                           </div>
                        </div>
                            <div class="tm-categories-container mb-5">
                                <h3 class="tm-text-primary tm-categories-text">Wiki<sup>TM</sup></h3>
                                <ul class="nav tm-category-list">
                                    <li class="nav-item tm-category-item"><a href="?route=home" class="nav-link tm-category-link active">home</a></li>
                                    <li class="nav-item tm-category-item"><a href="?route=about" class="nav-link tm-category-link">About</a></li>
                                    <li class="nav-item tm-category-item"><a href="?route=contact" class="nav-link tm-category-link">Contact</a></li>
                                    <li class="nav-item tm-category-item"><a href="?route=author" class="nav-link tm-category-link">Create wiki</a></li>
                                    
                                </ul>
                            </div>        
                        </div>
                    </div>
                    
                    <div class="row tm-catalog-item-list">
                        <?php if(!empty($wikis)){ ?>
                    <?php foreach($wikis as $wiki) : ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                            <div class="position-relative tm-thumbnail-container">
                                <img src="assets/img/tn-03.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                            </div>                            
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 tm-catalog-item-title"><?php echo $wiki['title'] ; ?></h3>
                                <p class="tm-catalog-item-text"><?php  echo $wiki['discreption'] ?></p>
                                <a href="?route=wiki&deletewikiid=<?php  echo $wiki['wiki_id'] ?>" class="mr-3">delete </a>
                                <a href="?route=wiki&wikiid=<?php  echo $wiki['wiki_id'] ?>">edit </a>
                            </div>
                        </div>
                        <?php endforeach ; }?>
                     
                    </div>
                    

                </main>

                <!-- Subscribe form and footer links -->
                <div class="row mt-5 pt-3" style="background:#435c70;padding: 0 !important;">
                    <footer class=" pt-5" style="width :100%; padding:0 !important;">
                    <div class="col-12">
                        <p class="text-right" style="color:aliceblue !important;margin:0;">Copyright 2020 The Video Catalog Company 
                        
                        - Designed by <a href="https://templatemo.com" rel="nofollow" target="_parent">TemplateMo</a></p>
                    </div>
                </footer>
                </div> 
            </div> 
        </div>

    </div> 
    
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>