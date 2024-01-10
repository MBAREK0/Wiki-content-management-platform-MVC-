<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Admin - Dashboard HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="assets\fontawesome\fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="assets/css/templatemo-style.css">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body id="reportsPage">
    <div class="" id="home" style="background: aliceblue;">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
                <a class="navbar-brand" href="index.html">
                    <h1 class="tm-site-title mb-0">Wiki<sup>TM</sup></h1>
                </a>
                <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.html">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.html">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.html">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-block" href="login.html">Admin, <b>Logout</b></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class=" mt-5 mb-5">Welcome back, <b>Author</b> you can create your wikis and share your Thoughts here</p>
                </div>

            </div>
        </div>
        <form action="">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <h1 class="tm-block-title">CREATE A WIKI</h1>

                <div class="mb-3">
                    <label for="mySelect" style="color: aliceblue;">title</label>
                    <input type="text"  style="border-radius: 5px; width: 100%;">
                </div>

                <div class="mb-3">
                    <label for="mySelect" style="color: aliceblue;">you can select one category</label>
                    <select  style="width: 100%;">
                        <option value=""></option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                      </select>
                </div>

                <div class="mb-3">
                    <label for="mySelect" style="color: aliceblue;">you can select multiple tags</label>
                    <select id="mySelect" multiple style="width: 100%; " placeholder="u can">
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                </div>

               <div class="mb-3">
                <label for="summernote" style="color: aliceblue;">what do you think !</label>
                <div id="summernote" style="margin-top: 31px !important;"></div>
               </div>
                <div class="form-group col-lg-4">
                    <label class="tm-hide-sm">&nbsp;</label>
                    <button type="submit" class="btn btn-primary btn-block text-uppercase">Update Your Profile</button>
                </div>
            </div>
        </form>
        <footer class="tm-footer row tm-mt-small">
            <div class="col-12 font-weight-light">
                <p class="text-center text-white mb-0 px-4 small">
                    Copyright &copy; <b>2018</b> All rights reserved. 
                    Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
                </p>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#summernote').summernote({
                    placeholder: 'Hello stand alone ui',
                    tabsize: 2,
                    height: 120,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ]
                });

                $("#mySelect").select2();
            });
            $(document).ready(function () {
      $('select').selectize({
          sortField: 'text'
      });
  });
        </script>
        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/Chart.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/tooplate-scripts.js"></script>
    </body>
</html>
