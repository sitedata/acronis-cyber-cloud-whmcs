<?php
/**
 * RolePut
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

namespace Acronis\Cloud\Client\Model\Roles;

use Acronis\Cloud\Client\BaseModel;
/**
 * RolePut Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RolePut extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Roles\RolePut';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'name' => 'string',
            'scopes' => '\Acronis\Cloud\Client\Model\Roles\RolePutItems[]'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'name' => null,
            'scopes' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'name' => 'name',
            'scopes' => 'scopes'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'name' => 'setName',
            'scopes' => 'setScopes'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'name' => 'getName',
            'scopes' => 'getScopes'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'name' => 'hasName',
            'scopes' => 'hasScopes'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'name' => 'validateName',
            'scopes' => 'validateScopes'
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
        if (!empty($this->validateName())) {
            $invalid_properties[] = $this->validateName();
        }
        if (!empty($this->validateScopes())) {
            $invalid_properties[] = $this->validateScopes();
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
        if (!empty($this->validateName())) {
            return false;
        }
        if (!empty($this->validateScopes())) {
            return false;
        }
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->offsetGet('name');
    }

    /**
     * Checks name
     * @return boolean
     */
    public function hasName()
    {
        return $this->offsetExists('name');
    }

    /**
     * Sets name
     * @param string $name Role human-readable name that will be displayed to the users
     * @return $this
     */
    public function setName($name)
    {
        $this->offsetSet('name', $name);

        return $this;
    }

    /**
     * Unset name
     */
    public function unsetName() {
        $this->offsetUnset('name');
    }

    /**
     * Valid name
     * @return array|boolean
     */
    public function validateName()
    {
        if (!$this->offsetExists('name')) {
            return false;
        }
        return false;
    }


    /**
     * Gets scopes
     * @return \Acronis\Cloud\Client\Model\Roles\RolePutItems[]
     */
    public function getScopes()
    {
        return $this->offsetGet('scopes');
    }

    /**
     * Checks scopes
     * @return boolean
     */
    public function hasScopes()
    {
        return $this->offsetExists('scopes');
    }

    /**
     * Sets scopes
     * @param \Acronis\Cloud\Client\Model\Roles\RolePutItems[] $scopes
     * @return $this
     */
    public function setScopes($scopes)
    {
        $this->offsetSet('scopes', $scopes);

        return $this;
    }

    /**
     * Unset scopes
     */
    public function unsetScopes() {
        $this->offsetUnset('scopes');
    }

    /**
     * Valid scopes
     * @return array|boolean
     */
    public function validateScopes()
    {
        if (!$this->offsetExists('scopes')) {
            return false;
        }
        return false;
    }

}


