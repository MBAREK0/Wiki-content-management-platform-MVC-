<?php
namespace App\controllers\Admin;
use App\models\DynamicCrud;

class DashController {
    public function index() {
        
        $display_modale = new DynamicCrud;
        $tags = $display_modale->read('tags');
        $categories = $display_modale->read('categories');

        require_once __DIR__ ."/../../../views/Admin/admin.php";
    }
}