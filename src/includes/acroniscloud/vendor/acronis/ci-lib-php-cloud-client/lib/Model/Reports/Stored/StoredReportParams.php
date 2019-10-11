<?php
/**
 * StoredReportParams
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

namespace Acronis\Cloud\Client\Model\Reports\Stored;

use Acronis\Cloud\Client\BaseModel;
/**
 * StoredReportParams Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StoredReportParams extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Reports\Stored\StoredReportParams';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'items' => '\Acronis\Cloud\Client\Model\Reports\Stored\StoredReportParamsItems[]'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'items' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'items' => 'items'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'items' => 'setItems'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'items' => 'getItems'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'items' => 'hasItems'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'items' => 'validateItems'
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
        if (!empty($this->validateItems())) {
            $invalid_properties[] = $this->validateItems();
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
        if (!empty($this->validateItems())) {
            return false;
        }
        return true;
    }


    /**
     * Gets items
     * @return \Acronis\Cloud\Client\Model\Reports\Stored\StoredReportParamsItems[]
     */
    public function getItems()
    {
        return $this->offsetGet('items');
    }

    /**
     * Checks items
     * @return boolean
     */
    public function hasItems()
    {
        return $this->offsetExists('items');
    }

    /**
     * Sets items
     * @param \Acronis\Cloud\Client\Model\Reports\Stored\StoredReportParamsItems[] $items
     * @return $this
     */
    public function setItems($items)
    {
        $this->offsetSet('items', $items);

        return $this;
    }

    /**
     * Unset items
     */
    public function unsetItems() {
        $this->offsetUnset('items');
    }

    /**
     * Valid items
     * @return array|boolean
     */
    public function validateItems()
    {
        if (!$this->offsetExists('items')) {
            return false;
        }
        return false;
    }

}


