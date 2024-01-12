<?php

namespace App\controllers\Admin;

use App\models\CategoryModel;

class CategoryController
{
    public function index()
    {

        if (isset($_POST["add-submit"])) {
            $this->create();
        } else if (isset($_POST["update-submit"])) {
            $this->update();
        } else if (isset($_GET["catid"])) {
            $this->delete($_GET["catid"]);
        }
    }

    public function create()
    {
        // Handle the create logic here
        if (isset($_POST["add-submit"])) {
           $cat_name['category_name'] =htmlspecialchars($_POST["category"],ENT_QUOTES); 
           $add_modal = new CategoryModel;
           $add_cat = $add_modal->create($cat_name);
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
            $update_modal = new CategoryModel;
            $up_cat = $update_modal->update($cat_name, $condition);
            if($up_cat){
               header('Location: ?route=dash');
            }else{
               print_r($update_modal->getError());
               header('Location: ?route=dash');
            }
                   
            
 
         }
    }

    public function delete($id)
    {
        $delete_modal = new CategoryModel;
        $condition ='`category_id`='.$id;
        $delete_cat = $delete_modal->delete($condition);
        if($delete_cat){
            header('Location: ?route=dash');
         }else{
            print_r($delete_modal->getError());
            header('Location: ?route=dash');
         }
    }
}
