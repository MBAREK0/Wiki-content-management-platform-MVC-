<?php

namespace App\controllers\Admin;

use App\models\DynamicCrud;

class TagController
{
    public function index()
    {

        if (isset($_POST["add-submit"])) {
            $this->create();
        } else if (isset($_POST["update-submit"])) {
            $this->update();
        } else if (isset($_POST["delete-submit"])) {
            $this->delete();
        }
    }

    public function create()
    {
        // Handle the create logic here
        if (isset($_POST["add-submit"])) {
           $tag_name['tag_name'] =htmlspecialchars($_POST["tag"],ENT_QUOTES); 
           $add_modal = new DynamicCrud;
           $add_tag = $add_modal->create('tags', $tag_name);
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
            $update_modal = new DynamicCrud;
            $up_tag = $update_modal->update('tags', $tag_name, $condition);
            if($up_tag){
               header('Location: ?route=dash');
            }else{
               print_r($update_modal->getError());
               header('Location: ?route=dash');
            }
                   
            
 
         }
    }


    public function delete()
    {
        // Handle the delete logic here
    }
}
