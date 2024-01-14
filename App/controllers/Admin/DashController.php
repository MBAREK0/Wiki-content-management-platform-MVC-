<?php
namespace App\controllers\Admin;
use App\models\CategoryModel;
use App\models\TagModel;
use App\models\WikiModel;

class DashController {
    public function index() {
        if($_SESSION['role'] !== 'admin' ?? false) {
            header("location:index.php?route=login");
            exit;
            return 0;
        }
        $display_modale_cat = new CategoryModel;
        $display_modale_tag = new TagModel;
        $display_modale_wiki = new WikiModel;

        $tags = $display_modale_tag->read('tag_id');
        $categories = $display_modale_cat->read('category_id');
        $wikis =$display_modale_wiki->read();

        $count_tags = $display_modale_tag->statistiques('tag_count');
        $count_cats = $display_modale_cat->statistiques('cat_count');
        $count_wikis = $display_modale_wiki->statistiques('wiki_count');

        require_once __DIR__ ."/../../../views/Admin/admin.php";
    }
}