<?php
require_once __DIR__. '/Type.php';

class Category extends Type{
    public $category;

    public function __construct(string $_category) {
        $this->category = $_category;
    }
}