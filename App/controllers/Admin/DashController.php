<?php
namespace App\controllers\Admin;
use App\models\CategoryModel;
use App\models\TagModel;

class DashController {
    public function index() {
        
        $display_modale_cat = new CategoryModel;
        $display_modale_tag = new TagModel;
        $tags = $display_modale_tag->read('tag_id');
        $categories = $display_modale_cat->read('category_id');

        require_once __DIR__ ."/../../../views/Admin/admin.php";
    }
}