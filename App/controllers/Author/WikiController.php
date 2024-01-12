<?php

namespace App\controllers\Author;
use App\models\WikiModel;
use App\models\CategoryModel;
use App\models\TagModel;

class WikiController 
{
    public function getpage(){

        $display_modale_cat = new CategoryModel;
        $display_modale_tag = new TagModel;
        $tags = $display_modale_tag->read('tag_id');
        $categories = $display_modale_cat->read('category_id');

        require_once __DIR__ ."/../../../views/Author/author.php";
    }
    public function index()
    {

        if (isset($_POST["add-submit"])) {
            $this->create();
        } else if (isset($_POST["update-submit"])) {
            $this->update();
        } else if (isset($_GET[""])) {
            $this->delete($_GET[""]);
        }
    }

    public function create()
    {
        // Handle the create logic here
        if (isset($_POST["add-submit"])) {
            $wiki['title'] =htmlspecialchars($_POST["title"],ENT_QUOTES); 
            $wiki['content'] =$_POST["content"];
            $wiki['category_id'] =htmlspecialchars($_POST["category_id"],ENT_QUOTES); 
            $wiki["discreption"] =htmlspecialchars($_POST["discreption"],ENT_QUOTES); 
            $tags=[];
            $tags=$_POST["tags"];
            
            // var_dump($_SESSION);die();
           $add_modal = new WikiModel;
           $add  = $add_modal->addwiki($wiki,$tags);
           if($add){
              header('Location: ?route=author');
           }else{
              print_r($add_modal->getError());
              header('Location: ?route=author');
           }
                  
           

        }
    }

    public function update()
    {
        if (isset($_POST["update-submit"])) {
            // $cat_name['category_name'] =htmlspecialchars($_POST["TC-name"],ENT_QUOTES); 
            // $condition ='`category_id`='.$_POST["TC-id"];
            $update_modal = new WikiModel;
  
 
         }
    }

    public function delete($id)
    {
        $delete_modal = new WikiModel;

    }
    public function display ()
    {
        $wiki_modal = new WikiModel;
        $wikis = $wiki_modal->read();
        return $wikis;


    }
}
