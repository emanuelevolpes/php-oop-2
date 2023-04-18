<?php
require_once __DIR__ . '/Product.php';
class Food extends Product
{
    private $ingredients;
    // private $weight;

    public function get_ingredients()
    {
        return $this->ingredients;
    }
    public function set_ingredients($_ingredients)
    {
        $this->ingredients = $_ingredients;
    }
    // public function get_weight()
    // {
    //     $this->weight;
    // }
    // public function set_weight($_weight)
    // {
    //     $this->weight = $_weight;
    // }
}
