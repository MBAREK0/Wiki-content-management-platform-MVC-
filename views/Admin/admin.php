<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="assets\fontawesome\fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="assets/css/templatemo-style.css">
    <!-- font awsome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
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
                            <a class="nav-link tm-site d-block" href="login.html">Admin</a>
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
                    <p class=" mt-5 mb-5">Welcome back, <b>Admin</b> you can manage wikis,categories and tags here</p>
                </div>

            </div>
        </div>
    <div class="ml-2 mr-2">
      <div class="row tm-content-row">
        

        
      <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
              <h2 class="tm-block-title"> Categories</h2>
              <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                  <thead>
                    <tr>
                      <th scope="col">name</th>
                      <th scope="col">edit</th>
                      <th scope="col">delele</th>
                    </tr>
                  </thead>
                      <tbody>
                          <?php foreach($categories as $category) : ?>
                          <tr>
                              <td class="tm-product-name"><?php echo $category['category_name']; ?></td>
                              <td>
                                  <a onclick="setData('<?php echo $category['category_id']; ?>','<?php echo $category['category_name']; ?>','index.php?route=category')"
                                      class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                      <i class='fas fa-pen' style='color:#394e64'></i>
                                  </a>
                              </td>
                              <td class="text-center">
                                  <a href="?route=category&catid=<?php echo $category['category_id']; ?>">
                                      <i class='fa fa-remove' style='color:#394e64'></i>
                                  </a>
                              </td>
                          </tr>
                          <?php endforeach; ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-products" style="min-height: 652px !important;">
              <h2 class="tm-block-title">Wikis</h2>
              <div class="tm-product-table-container" style="max-height: 526px;">
                <table class="table table-hover tm-table-small tm-product-table">
                  <thead>
                    <tr>
                      <th scope="col">Title</th>
                      <th scope="col">Author</th>
                      <th scope="col">Category</th>
                      <th scope="col">Created At</th>
                      <th scope="col">Archifier</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                   
                      <td class="tm-product-name">Lorem Ipsum Product 1</td>
                      <td>1,450</td>
                      <td>550</td>
                      <td>28 March 2019</td>
                      <td>
                        <a href="#" class="tm-product-delete-link">
                          <i class="far fa-trash-alt tm-product-delete-icon"></i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
              <h2 class="tm-block-title">Tages</h2>
              <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                  <thead>
                    <tr>
                      <th scope="col">name</th>
                      <th scope="col">edit</th>
                      <th scope="col">delele</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($tags as $tag) : ?>
                      <tr>
                        <td class="tm-product-name"><?php echo $tag['tag_name']; ?></td>
                        <td>
                          <a onclick="setData('<?php echo $tag['tag_id']; ?>','<?php echo $tag['tag_name']; ?>','index.php?route=tag')" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class='fas fa-pen' style='color:#394e64'></i>
                          </a>
                        </td>
                        <td class="text-center">
                          <a href="?route=tag&tagid=<?php echo $tag['tag_id']; ?>">
                            <i class='fa fa-remove' style='color:#394e64'></i>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
     

<!-- Form Modal Edit -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">UPDATE</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="background-color: #435c70;">
                <form action="" method="post" id="update-form" class="tm-signup-form row">
                  <div style="display:flex !important; justify-content:center; align-items:end; ">
                    <div class="form-group col-lg-6" style="margin:0;">
                      <input
                        id="e-name-modal"
                        name="TC-name"
                        type="text"
                        class="form-control validate"
                      />
                      <input
                        id="e-id-modal"
                        name="TC-id"
                        type="hidden"
                      />
                    </div>
                    <button class="btn btn-primary btn-block text-uppercase mb-3" type="submit" name="update-submit" style="width:40%">
                      save change
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
<!-- End Form Modal Edit -->

        <div class="container d-flex mb-5" style = " justify-content: space-around;">
          <div class="tm-bg-primary-dark tm-block tm-block-settings" style="width: 41rem !important; min-height: 0px;">
            <form action="index.php?route=category" method="post" class="tm-signup-form row">
              <div class="form-group col-lg-6">
                <label for="category">category</label>
                <input
                  id="text"
                  name="category"
                  type="text"
                  class="form-control validate"
                />
              </div>
              <div class="form-group col-lg-6">
                <label class="tm-hide-sm">&nbsp;</label>
                <button class="btn btn-primary btn-block text-uppercase mb-3" type="submit" name="add-submit">
                  Add new category
                </button>
              </div>
            </form>
          </div>
          <div class="tm-bg-primary-dark tm-block tm-block-settings" style="width: 41rem !important; min-height: 0px;">
            <form action="index.php?route=tag" method="post" class="tm-signup-form row">
              <div class="form-group col-lg-6">
                <label for="tag">tag</label>
                <input
                  id="text"
                  name="tag"
                  type="text"
                  class="form-control validate"
                />
              </div>
              <div class="form-group col-lg-6">
                <label class="tm-hide-sm">&nbsp;</label>
                <button class="btn btn-primary btn-block text-uppercase mb-3" type="submit" name="add-submit">
                  Add new tag
                </button>
              </div>
            </form>
          </div>
        </div>


        <footer class="tm-footer row tm-mt-small">
          <div class="col-12 font-weight-light">
            <p class="text-center text-white mb-0 px-4 small">
              Copyright &copy; <b>2018</b> All rights reserved.
            </p>
          </div>
        </footer>


    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="assets\js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      function setData(id,name,act){
        var modalInputName =document.getElementById('e-name-modal');
        var modalInputId =document.getElementById('e-id-modal');
        var myform =document.getElementById('update-form');

        console.log(myform);

        modalInputName.value = name;
        modalInputId.value = id;
        myform.action=act;
        
      }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>