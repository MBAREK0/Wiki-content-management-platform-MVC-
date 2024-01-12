<?php
namespace App\models;
use App\models\DynamicCrud;


class CategoryModel extends DynamicCrud
{
    public function __construct(){
        parent::__construct('categories');
    }
}