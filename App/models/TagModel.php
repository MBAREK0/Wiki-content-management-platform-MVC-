<?php
namespace App\models;
use App\models\DynamicCrud;


class TagModel extends DynamicCrud
{
    public function __construct(){
        parent::__construct('tags');
    }
}

