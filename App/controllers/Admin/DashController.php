<?php
namespace App\controllers\Admin;
use App\models\DynamicCrud;

class DashController {
    public function index() {
        
        $display_modale = new DynamicCrud;
        $tags = $display_modale->read('tag_id','tags');
        $categories = $display_modale->read('category_id','categories');

        require_once __DIR__ ."/../../../views/Admin/admin.php";
    }
}