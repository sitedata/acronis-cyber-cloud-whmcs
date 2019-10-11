<?php
/**
 * LegalDocumentCoveredItems
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

namespace Acronis\Cloud\Client\Model\LegalDocument;

use Acronis\Cloud\Client\BaseModel;
/**
 * LegalDocumentCoveredItems Class Doc Comment
 *
 * @category    Class
 * @description Full set of items covered by a given document
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LegalDocumentCoveredItems extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LegalDocument\LegalDocumentCoveredItems';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'offering_items' => 'string[]',
            'backend_types' => 'string[]'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'offering_items' => null,
            'backend_types' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'offering_items' => 'offering_items',
            'backend_types' => 'backend_types'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'offering_items' => 'setOfferingItems',
            'backend_types' => 'setBackendTypes'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'offering_items' => 'getOfferingItems',
            'backend_types' => 'getBackendTypes'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'offering_items' => 'hasOfferingItems',
            'backend_types' => 'hasBackendTypes'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'offering_items' => 'validateOfferingItems',
            'backend_types' => 'validateBackendTypes'
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
        if (!empty($this->validateBackendTypes())) {
            $invalid_properties[] = $this->validateBackendTypes();
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
        if (!empty($this->validateBackendTypes())) {
            return false;
        }
        return true;
    }


    /**
     * Gets offering_items
     * @return string[]
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
     * @param string[] $offering_items
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
            return false;
        }
        return false;
    }


    /**
     * Gets backend_types
     * @return string[]
     */
    public function getBackendTypes()
    {
        return $this->offsetGet('backend_types');
    }

    /**
     * Checks backend_types
     * @return boolean
     */
    public function hasBackendTypes()
    {
        return $this->offsetExists('backend_types');
    }

    /**
     * Sets backend_types
     * @param string[] $backend_types
     * @return $this
     */
    public function setBackendTypes($backend_types)
    {
        $this->offsetSet('backend_types', $backend_types);

        return $this;
    }

    /**
     * Unset backend_types
     */
    public function unsetBackendTypes() {
        $this->offsetUnset('backend_types');
    }

    /**
     * Valid backend_types
     * @return array|boolean
     */
    public function validateBackendTypes()
    {
        if (!$this->offsetExists('backend_types')) {
            return false;
        }
        return false;
    }

}

