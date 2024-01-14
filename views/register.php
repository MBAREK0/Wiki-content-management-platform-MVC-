<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login Page - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
    <div>
      <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
          <a class="navbar-brand" href="?route=home">
            <h1 class="tm-site-title mb-0">Wiki<sup>TM</sup></h1>
          </a>
          <button
            class="navbar-toggler ml-auto mr-0"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars tm-nav-icon"></i>
          </button>

        </div>
      </nav>
    </div>

    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-12 mx-auto tm-login-col">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="tm-block-title mb-4">Wiki<sup>TM</sup></h2>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <form action="?route=regcheck" method="post" id="reg-form" class="tm-login-form">
                
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input
                      name="username"
                      type="text"
                      class="form-control validate"
                      id="reg-username"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group">
                    <label for="username">email</label>
                    <input
                      name="email"
                      type="email"
                      class="form-control validate"
                      id="reg-email"
                      value=""
                      required
                    />
                  </div>
                  <div class="form-group mt-3">
                    <label for="password">Password</label>
                    <input
                      name="password"
                      type="password"
                      class="form-control validate"
                      id="reg-password"
                      value=""
                      required
                    />
                  </div>
                  <small class="text-muted " style = "display:none;">
                    Password must meet the following criteria:
                    <ul>
                        <li>At least one uppercase letter (A-Z)</li>
                        <li>At least one lowercase letter (a-z)</li>
                        <li>At least one special character (@$!%*?&)</li>
                        <li>8-24 characters in length</li>
                    </ul>
                </small>
                  <div class="form-group mt-3">
                    <label for="verify-password">verify Password</label>
                    <input
                      name="verify-password"
                      type="password"
                      class="form-control validate"
                      id="v-reg-password"
                      value=""
                      required
                    />
                  </div>
                  <div>
                  <input type="hidden" name="csrf_token" value="<?php echo $csrf; ?>">
                  </div>
                  <div class="form-group mt-4">
                    <input
                      type="submit"
                      class="btn btn-primary btn-block text-uppercase"
                      id="reg-submit"
                      value="sign up"
                    >
                    

                  </div>
                  <div class="d-flex " style="justify-content: space-between; align-items: center;">
                    <p style="    color: aliceblue; margin: 0 !important;">already have an acc </p>
                  <a href="?route=login" class="mt-5 btn btn-primary btn-block text-uppercase" style="width:40% !important;margin: 0 !important;">
                   login
                </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2018</b> All rights reserved. 
          
          Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
        </p>
      </div>

    </footer>
  
    <script src="assets/js/script.js"></script>

  </body>
</html>

