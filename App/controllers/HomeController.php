<?php
namespace App\controllers;
use App\controllers\Author\WikiController;


class HomeController {
    public function index() {


        require_once __DIR__ ."/../../views/home.php";
    }
    public function search() {
        
        $data_js = file_get_contents("php://input");

        $data = json_decode($data_js,true);
        $keyword = $data["keyword"] ?? '';
        if($data["type"] !== 'Title'){
            $type = $data["type"] === 'Category' ? 'C.category_name': ($data["type"] === 'Tag' ? 'T.tag_name' : '') ;
        }else{
            $type = $data['type'] ;
        }
        $controller = new WikiController;
        $wikis = $controller-> display($type,$keyword);
        
     
                   
        foreach($wikis as $wiki) :
          ?>  <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                <div class="position-relative tm-thumbnail-container">
                    <img src="assets/img/tn-03.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                </div>                            
                <div class="p-4 tm-bg-gray tm-catalog-item-description">
                    <h3 class="tm-text-primary mb-3 tm-catalog-item-title"><?php echo $wiki['title'] ; ?></h3>
                    <p class="tm-catalog-item-text"><?php  echo $wiki['content'] ?></p>
                </div>
            </div>
            <?php endforeach ; 
    }

}