<?php
/**
 * InfraList
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

namespace Acronis\Cloud\Client\Model\Infra;

use Acronis\Cloud\Client\BaseModel;
/**
 * InfraList Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InfraList extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Infra\InfraList';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'infras' => 'string[]'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'infras' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'infras' => 'infras'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'infras' => 'setInfras'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'infras' => 'getInfras'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'infras' => 'hasInfras'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'infras' => 'validateInfras'
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
        if (!empty($this->validateInfras())) {
            $invalid_properties[] = $this->validateInfras();
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
        if (!empty($this->validateInfras())) {
            return false;
        }
        return true;
    }


    /**
     * Gets infras
     * @return string[]
     */
    public function getInfras()
    {
        return $this->offsetGet('infras');
    }

    /**
     * Checks infras
     * @return boolean
     */
    public function hasInfras()
    {
        return $this->offsetExists('infras');
    }

    /**
     * Sets infras
     * @param string[] $infras
     * @return $this
     */
    public function setInfras($infras)
    {
        $this->offsetSet('infras', $infras);

        return $this;
    }

    /**
     * Unset infras
     */
    public function unsetInfras() {
        $this->offsetUnset('infras');
    }

    /**
     * Valid infras
     * @return array|boolean
     */
    public function validateInfras()
    {
        if (!$this->offsetExists('infras')) {
            return false;
        }
        return false;
    }

}


