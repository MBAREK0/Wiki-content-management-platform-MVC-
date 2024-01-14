<?php
namespace App\controllers;
use App\controllers\Author\WikiController;
use App\models\CategoryModel;
use App\models\WikiModel;
use App\models\TagModel;


class HomeController {
    public function index() {

        $controller = new WikiModel;
        $last_wikis = $controller-> read('GREATEST(created_at, updated_at)','',10);
        $controller2 = new CategoryModel;
        $last_cats = $controller2-> read('GREATEST(created_at, updated_at)','',10);
        
       
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
                    <img src="assets\img\wikimg.jpg" alt="Image" class="img-fluid tm-catalog-item-img">    
                </div>                            
                <div class="p-4 tm-bg-gray tm-catalog-item-description">
                    <a href="?route=content&contentid=<?php  echo $wiki['wiki_id'] ?>"><h3 class="tm-text-primary mb-3 tm-catalog-item-title"><?php echo $wiki['title'] ; ?></h3></a>
                    <p class="tm-catalog-item-text aliceblue"><?php  echo $wiki['discreption'] ?></p>
                </div>
            </div>
            <?php endforeach ; 
    }
    public function contentpage(){
         if(isset($_GET["contentid"])){
           $id = 'W.wiki_id = '.$_GET["contentid"];
        }
            $wiki_modal = new WikiModel;
            $wiki = $wiki_modal->wikis($id,'','');
            $display_modale_tag = new TagModel;
            $tags = $display_modale_tag->read('tag_id',$_GET["contentid"]);

            require_once __DIR__ ."/../../views/content.php";
    }

}