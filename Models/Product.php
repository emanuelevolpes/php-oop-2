<?php

/**
 * Product
 * Define the default product
 * 
 * @author Emanuele Volpes
 */
class Product
{
    private $id;
    private $name;
    private $description;
    private $category;
    private $price;
    private $image;


    /**
     * Summary of __construct
     * @param int $_id
     * @param string $_name
     * @param string $_description
     * @param mixed $_category
     * @param float $_price
     * @param string $_image
     */
    public function __construct($_id, $_name, $_description, $_category, $_price, $_image)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->description = $_description;
        $this->category = $_category;
        $this->price = $_price;
        $this->image = $_image;
    }
    /**
     * Summary of get_id
     * @return int $_id
     */
    public function get_id()
    {
        return $this->id;
    }
    /**
     * Summary of set_id
     * @param int $_id
     * @return void
     */
    public function set_id($_id)
    {
        $this->id = $_id;
    }
    /**
     * Summary of get_name
     * @return mixed|string $_name
     */
    public function get_name()
    {
        return $this->name;
    }
    /**
     * Summary of set_name
     * @param mixed $_name
     * @return void
     */
    public function set_name($_name)
    {
        $this->name = $_name;
    }
    /**
     * Summary of get_description
     * @return mixed|string $_description
     */
    public function get_description()
    {
        return $this->description;
    }
    /**
     * Summary of set_description
     * @param mixed $_description
     * @return void
     */
    public function set_description($_description)
    {
        $this->description = $_description;
    }
    /**
     * Summary of get_category
     * @return mixed $_category
     */
    public function get_category()
    {
        return $this->category;
    }
    /**
     * Summary of set_category
     * @param mixed $_category
     * @return void
     */
    public function set_category($_category)
    {
        $this->category = $_category;
    }
    /**
     * Summary of get_price
     * @return float|mixed $_price
     */
    public function get_price()
    {
        return $this->price;
    }
    /**
     * Summary of set_price
     * @param mixed $_price
     * @return void
     */
    public function set_price($_price)
    {
        $this->price = $_price;
    }
    /**
     * Summary of get_image
     * @return mixed|string $_image
     */
    public function get_image()
    {
        return $this->image;
    }
    /**
     * Summary of set_image
     * @param mixed $_image
     * @return void
     */
    public function set_image($_image)
    {
        $this->image = $_image;
    }
}