<?php

namespace App\controllers\Author;
use App\models\DynamicCrud;
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
    public function profile(){
        $wiki_modal = new WikiModel;
        $user = 'W.author_id  = '.$_SESSION['user_id'];
        $wikis = $wiki_modal->wikis($user);
 
        require_once __DIR__ ."/../../../views/Author/profile.php";
    }
    public function index()
    {

        if (isset($_POST["add-submit"])) {
            $this->create();
        } else if (isset($_GET["wikiid"])) {
            $this->update();
        } else if (isset($_GET["deletewikiid"])) {
            $this->delete($_GET["deletewikiid"]);
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
        $update_modal = new WikiModel;
        if (isset($_GET['wikiid'])) {
            
            $wikiId =$_GET['wikiid'];
             if (isset($_POST['update-submit'])) {
                // var_dump($_POST);die();
                $wiki['title'] =htmlspecialchars($_POST["title"],ENT_QUOTES); 
                $wiki['content'] =$_POST["content"];
                $wiki['category_id'] =htmlspecialchars($_POST["category_id"],ENT_QUOTES); 
                $wiki["discreption"] =htmlspecialchars($_POST["discreption"],ENT_QUOTES); 
                $tags=[];
                $tags=$_POST["tags"];
               
                $update  = $update_modal->updateWiki($wiki, $tags, $wikiId);
                if($update){
                   header('Location: ?route=profile');
                }else{
                   print_r($update_modal->getError());
                   header('Location: ?route=profile');
                }
     
             }



            $display_modale_cat = new CategoryModel;
            $display_modale_tag = new TagModel;
            $tags = $display_modale_tag->read('tag_id');
            $categories = $display_modale_cat->read('category_id');
            $wiki_id = 'wiki_id = '.$_GET['wikiid'];
            
            $values = $update_modal->wikis($wiki_id);
            $condition  = $values[0]['wiki_id'];
            $tag_values =  $display_modale_tag->tags($condition);

        require_once __DIR__ ."/../../../views/Author/updateWiki.php";
            
  
 
         }
    }

    public function delete($id)
    {
        $delete_modal = new WikiModel;
        $condition = 'wiki_id = '.$id;
        $delete = $delete_modal->delete($condition);
        if($delete){
            header('Location: ?route=profile');
         }else{
            print_r($delete_modal->getError());
            header('Location: ?route=profile');
         }
    }
    public function display ()
    {
        $wiki_modal = new WikiModel;
        $wikis = $wiki_modal->wikis();
        return $wikis;
        


    }
}
