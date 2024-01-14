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
</head>
<!--

TemplateMo 552 Video Catalog

https://templatemo.com/tm-552-video-catalog

-->
<body>
	<div class="tm-page-wrap mx-auto">
		<div class="position-relative">
			<div class="potition-absolute tm-site-header">
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
                                        <?php if(!isset($_SESSION['role'])) {  ?>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="?route=login">Login</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="?route=register">SignUp</a>
                                            </li>
                                            <?php } else{?>
                                                <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="?route=logout">logout</a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<div class="tm-welcome-container tm-fixed-header tm-fixed-header-3">
				<div class="aliceblue">
					<p style="margin: 100px;font-size: 33px;">
                        Talk to Us<br>about any question you have
                    </p>                	
				</div>                
            </div>

            <div id="tm-fixed-header-bg"></div> <!-- Header image -->
		</div>
        <div class="tm-categories-container container-fluid mb-5">
        <a href="?route=home"><h3 class="tm-text-primary tm-categories-text">Wiki<sup>TM</sup></h3></a>
            <ul class="nav tm-category-list">
            <li class="nav-item tm-category-item"><a href="?route=home" class="nav-link tm-category-link ">home</a></li>
            <li class="nav-item tm-category-item"><a href="?route=about" class="nav-link tm-category-link">About</a></li>
            <li class="nav-item tm-category-item"><a href="?route=contact" class="nav-link tm-category-link active">Contact</a></li>
            <?php if(isset($_SESSION['role'])) :  ?>
            <?php if($_SESSION['role'] === 'author' ?? false) : ?>
            <li class="nav-item tm-category-item"><a href="?route=author" class="nav-link tm-category-link">Create wiki</a></li>
            <?php endif; if($_SESSION['role'] === 'author' ?? false) : ?>
            <li class="nav-item tm-category-item"><a href="?route=profile" class="nav-link tm-category-link ">Profile</a></li>
            <?php endif; if($_SESSION['role'] === 'admin' ?? false) : ?>
            <li class="nav-item tm-category-item"><a href="?route=dash" style="text-decoration: none;" class="nav-link tm-category-link ">Dashboard</a></li>
            <?php endif; endif; ?>
                
            </ul>
        </div>    
		<!-- Page content -->
		<main>
			<div class="container-fluid px-0">
				<div class="mx-auto tm-content-container">					
					<div class="row mt-3 mb-5 pb-3">
						<div class="col-12">
							<div class="mx-auto tm-about-text-container px-3">
								<h2 class="tm-page-title mb-4 tm-text-primary">Contact our team</h2>
                                <p class="mb-4" style ="color:black;">
                                    Integer sit amet odio id libero tincidunt dignissim in eget arcu. Aliquam tristique ut magna sit amet tincidunt. Sed tempor tellus nulla, molestie luctus lectus tincidunt id. You are <u>not allowed</u> to re-distribute the template ZIP file on any template collection website.
                                </p>
                                <p class="mb-4" style ="color:black;">Video Catalog is a free website template for your business. This is 100% free Bootstrap v4.4.1 layout. You can modify and adapt this template for your CMS websites. You can use it for commercial or non-commercial work. If you wish to suport <a rel="nofollow" target="_parent" href="https://templatemo.com" class="tm-text-primary">TemplateMo</a>, please contact us.</p>
							</div>							
						</div>						
					</div>
                    <div class="mx-auto pb-3 tm-about-text-container px-3">
                        <div class="row">
                            <div class="col-lg-6 mb-5">
                                <form id="contact-form" action="" method="POST" class="tm-contact-form">
                                  <div class="form-group">
                                    <input type="text" name="name" class="form-control rounded-0" placeholder="Name" required="" />
                                  </div>
                                  <div class="form-group">
                                    <input type="email" name="email" class="form-control rounded-0" placeholder="Email" required="" />
                                  </div>
                                  <div class="form-group">
                                    <select class="form-control" id="contact-select" name="inquiry">
                                      <option value="-">Subject</option>
                                      <option value="sales">Sales &amp; Marketing</option>
                                      <option value="creative">Creative Design</option>
                                      <option value="uiux">UI / UX</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <textarea rows="8" name="message" class="form-control rounded-0" placeholder="Message"
                                              required=""></textarea>
                                  </div>

                                  <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-primary rounded-0 d-block ml-auto mr-0 tm-btn-animate tm-btn-submit tm-icon-submit"><span>Submit</span></button>
                                  </div>
                                </form>    
                            </div>
                            <div class="col-lg-6">
                                <div class="mapouter mb-60">
                                    <div class="gmap_canvas">
                                        <iframe width="100%" height="520" id="gmap_canvas"
                                            src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>                                      			
				</div>

				<div class="parallax-window parallax-window-2" data-parallax="scroll" data-image-src="img/contact-2.jpg"></div>

			</div>
		</main>

		<div class="container-fluid tm-content-container mx-auto pt-4">
			<!-- Subscribe form and footer links -->
            <div class="row pt-3">
                <div class="col-xl-6 col-lg-12 mb-4">
                    <div class="tm-bg-gray p-5 h-100">
                        <h3 class="tm-text-primary mb-3">Do you want to get our latest updates?</h3>
                        <p class="mb-5 aliceblue">Please subscribe our newsletter for upcoming new videos and latest information about our
                            work. Thank you.</p>
                        <form action="" method="GET" class="tm-subscribe-form">
                            <input type="text" name="email" placeholder="Your Email..." required>
                            <button type="submit" class="btn rounded-0 btn-primary tm-btn-small">Subscribe</button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="p-5 tm-bg-gray">
                        <h3 class="tm-text-primary mb-4">Quick Links</h3>
                        <ul class="list-unstyled tm-footer-links">
                            <li><a href="#">Duis bibendum</a></li>
                            <li><a href="#">Purus non dignissim</a></li>
                            <li><a href="#">Sapien metus gravida</a></li>
                            <li><a href="#">Eget consequat</a></li>
                            <li><a href="#">Praesent eu pulvinar</a></li>
                        </ul>    
                    </div>                        
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                    <div class="p-5 tm-bg-gray h-100">
                        <h3 class="tm-text-primary mb-4">Our Pages</h3>
                        <ul class="list-unstyled tm-footer-links">
                            <li><a href="#">Our Videos</a></li>
                            <li><a href="#">License Terms</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Privacy Policies</a></li>
                        </ul>
                    </div>                        
                </div>
            </div> <!-- row -->

            <footer class="row pt-5">
                <div class="col-12">
                    <p class="text-right">Copyright 2020 The Video Catalog Company 
                        
                        - Designed by <a href="https://templatemo.com" rel="nofollow" target="_parent">TemplateMo</a></p>
                </div>
            </footer>
		</div>		
	</div>

	<script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/parallax.min.js"></script>    
</body>
</html>