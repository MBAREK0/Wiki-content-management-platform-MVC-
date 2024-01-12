<?php

namespace App\controllers\Admin;

use App\models\TagModel;

class TagController
{
    public function index()
    {

        if (isset($_POST["add-submit"])) {
            $this->create();
        } else if (isset($_POST["update-submit"])) {
            $this->update();
        } else if (isset($_GET["tagid"])) {
            $this->delete($_GET["tagid"]);
        }
    }

    public function create()
    {
        // Handle the create logic here
        if (isset($_POST["add-submit"])) {
           $tag_name['tag_name'] =htmlspecialchars($_POST["tag"],ENT_QUOTES); 
           $add_modal = new TagModel;
           $add_tag = $add_modal->create($tag_name);
           if($add_tag){
              header('Location: ?route=dash');
           }else{
              print_r($add_modal->getError());
              header('Location: ?route=dash');
           }
                  
           

        }
    }

    public function update()
    {
        if (isset($_POST["update-submit"])) {
            $tag_name['tag_name'] =htmlspecialchars($_POST["TC-name"],ENT_QUOTES); 
            $condition ='`tag_id`='.$_POST["TC-id"];
            $update_modal = new TagModel;
            $up_tag = $update_modal->update($tag_name, $condition);
            if($up_tag){
               header('Location: ?route=dash');
            }else{
               print_r($update_modal->getError());
               header('Location: ?route=dash');
            }
                   
            
 
         }
    }


    public function delete($id)
    {
        $delete_modal = new TagModel;
        $condition ='`tag_id`='.$id;
        $delete_tag = $delete_modal->delete($condition);
        if($delete_tag){
            header('Location: ?route=dash');
         }else{
            print_r($delete_modal->getError());
            header('Location: ?route=dash');
         }
    }
}
