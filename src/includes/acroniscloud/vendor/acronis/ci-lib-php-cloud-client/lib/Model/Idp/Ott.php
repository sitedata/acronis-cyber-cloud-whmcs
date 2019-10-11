<?php
/**
 * Ott
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

namespace Acronis\Cloud\Client\Model\Idp;

use Acronis\Cloud\Client\BaseModel;
/**
 * Ott Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ott extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Idp\Ott';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'ott' => 'string'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'ott' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'ott' => 'ott'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'ott' => 'setOtt'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'ott' => 'getOtt'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'ott' => 'hasOtt'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'ott' => 'validateOtt'
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
        if (!empty($this->validateOtt())) {
            $invalid_properties[] = $this->validateOtt();
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
        if (!empty($this->validateOtt())) {
            return false;
        }
        return true;
    }


    /**
     * Gets ott
     * @return string
     */
    public function getOtt()
    {
        return $this->offsetGet('ott');
    }

    /**
     * Checks ott
     * @return boolean
     */
    public function hasOtt()
    {
        return $this->offsetExists('ott');
    }

    /**
     * Sets ott
     * @param string $ott
     * @return $this
     */
    public function setOtt($ott)
    {
        $this->offsetSet('ott', $ott);

        return $this;
    }

    /**
     * Unset ott
     */
    public function unsetOtt() {
        $this->offsetUnset('ott');
    }

    /**
     * Valid ott
     * @return array|boolean
     */
    public function validateOtt()
    {
        if (!$this->offsetExists('ott')) {
            return "Property 'ott' was not initialized.";
        }
        return false;
    }

}

