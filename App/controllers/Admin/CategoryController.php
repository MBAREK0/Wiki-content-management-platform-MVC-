<?php

namespace App\controllers\Admin;

use App\models\DynamicCrud;

class CategoryController
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
           $cat_name['category_name'] =htmlspecialchars($_POST["category"],ENT_QUOTES); 
           $add_modal = new DynamicCrud;
           $add_cat = $add_modal->create('categories', $cat_name);
           if($add_cat){
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
            $cat_name['category_name'] =htmlspecialchars($_POST["TC-name"],ENT_QUOTES); 
            $condition ='`category_id`='.$_POST["TC-id"];
            $update_modal = new DynamicCrud;
            $up_cat = $update_modal->update('categories', $cat_name, $condition);
            if($up_cat){
               header('Location: ?route=dash');
            }else{
               print_r($update_modal->getError());
               header('Location: ?route=dash');
            }
                   
            
 
         }
    }

    public function display()
    {
        // Handle the display logic here
    }

    public function delete()
    {
        // Handle the delete logic here
    }
}
