<?php
/**
 * OfferingItemsPut
 *
 * PHP version 5
 *
 * @category Class
 * @package  Acronis\Cloud\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * REST API v2 description for Multi-service Portal
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Acronis\Cloud\Client\Model\Tenants;

use Acronis\Cloud\Client\BaseModel;
/**
 * OfferingItemsPut Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OfferingItemsPut extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Tenants\OfferingItemsPut';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'offering_items' => '\Acronis\Cloud\Client\Model\Tenants\OfferingItem[]'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'offering_items' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'offering_items' => 'offering_items'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'offering_items' => 'setOfferingItems'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'offering_items' => 'getOfferingItems'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'offering_items' => 'hasOfferingItems'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'offering_items' => 'validateOfferingItems'
        ];
    }

    

    

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if (!empty($this->validateOfferingItems())) {
            $invalid_properties[] = $this->validateOfferingItems();
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!empty($this->validateOfferingItems())) {
            return false;
        }
        return true;
    }


    /**
     * Gets offering_items
     * @return \Acronis\Cloud\Client\Model\Tenants\OfferingItem[]
     */
    public function getOfferingItems()
    {
        return $this->offsetGet('offering_items');
    }

    /**
     * Checks offering_items
     * @return boolean
     */
    public function hasOfferingItems()
    {
        return $this->offsetExists('offering_items');
    }

    /**
     * Sets offering_items
     * @param \Acronis\Cloud\Client\Model\Tenants\OfferingItem[] $offering_items
     * @return $this
     */
    public function setOfferingItems($offering_items)
    {
        $this->offsetSet('offering_items', $offering_items);

        return $this;
    }

    /**
     * Unset offering_items
     */
    public function unsetOfferingItems() {
        $this->offsetUnset('offering_items');
    }

    /**
     * Valid offering_items
     * @return array|boolean
     */
    public function validateOfferingItems()
    {
        if (!$this->offsetExists('offering_items')) {
            return "Property 'offering_items' was not initialized.";
        }
        return false;
    }

}


