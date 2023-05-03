<?php
/**
 * Item class file
 */
namespace MercadoPago;

use MercadoPago\Annotation\Attribute;
use MercadoPago\Annotation\DenyDynamicAttribute;

/**
 * Item class
 */
class Item extends Entity
{
    /**
     * id
     * @Attribute(type = "string")
     * @var string
     */
    public $id;

    /**
     * title
     * @Attribute(type = "string")
     * @var string
     */
    public $title;

    /**
     * description
     * @Attribute(type = "string")
     * @var string
     */
    protected $description;

    /**
     * category_id
     * @Attribute(type = "string")
     * @var string
     */
    protected $category_id;

    /**
     * picture_url
     * @Attribute(type = "string")
     * @var string
     */
    protected $picture_url;

    /**
     * currency_id
     * @Attribute(type = "string")
     * @var string
     */
    public $currency_id;

    /**
     * quantity
     * @Attribute(type = "int")
     * @var int
     */
    public $quantity;

    /**
     * unit_price
     * @Attribute(type = "float")
     * @var float
     */
    protected $unit_price;

    public function setUnitPrice($unit_price){
        $this->unit_price = (float)$unit_price;
    }

}