<?php
/**
 * Payer class file
 */
namespace MercadoPago;

use MercadoPago\Annotation\Attribute;
use MercadoPago\Annotation\DenyDynamicAttribute;

/**
 * Payer Class
 */
class Payer extends Entity
{
        /**
     * id
     * @Attribute()
     * @var string
     */
    protected $id;

    /**
     * entity_type
     * @Attribute(type = "string")
     * @var string
     */
    protected $entity_type;

    /**
     * type
     * @Attribute(type = "string")
     * @var string
     */
    protected $type;

    /**
     * name
     * @Attribute(type = "string")
     * @var string
     */
    public $name;

    /**
     * surname
     * @Attribute(type = "string")
     * @var string
     */  
    public $surname;

    /**
     * first_name
     * @Attribute(type = "string")
     * @var string
     */
    protected $first_name;

    /**
     * last_name
     * @Attribute(type = "string")
     * @var string
     */
    protected $last_name;

    /**
     * email
     * @Attribute(type = "string")
     * @var string
     */
    public $email;

    /**
     * date_created
     * @Attribute(type = "date")
     * @var \DateTime
     */
    protected $date_created;

    /**
     * phone
     * @Attribute()
     * @var object
     */
    public $phone;

    /**
     * identification
     * @Attribute()
     * @var object
     */
    public $identification;

    /**
     * address
     * @Attribute()
     * @var object
     */
    protected $address;

}
