<?php
/**
 * TenantBatchDeletePostItems
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
 * TenantBatchDeletePostItems Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TenantBatchDeletePostItems extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Tenants\TenantBatchDeletePostItems';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'id' => 'string',
            'version' => 'int'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'id' => null,
            'version' => 'int32'
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'id' => 'id',
            'version' => 'version'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'id' => 'setId',
            'version' => 'setVersion'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'id' => 'getId',
            'version' => 'getVersion'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'id' => 'hasId',
            'version' => 'hasVersion'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'id' => 'validateId',
            'version' => 'validateVersion'
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
        if (!empty($this->validateId())) {
            $invalid_properties[] = $this->validateId();
        }
        if (!empty($this->validateVersion())) {
            $invalid_properties[] = $this->validateVersion();
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
        if (!empty($this->validateId())) {
            return false;
        }
        if (!empty($this->validateVersion())) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->offsetGet('id');
    }

    /**
     * Checks id
     * @return boolean
     */
    public function hasId()
    {
        return $this->offsetExists('id');
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        if ((strlen($id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling TenantBatchDeletePostItems., must be smaller than or equal to 36.');
        }
        if ((strlen($id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $id when calling TenantBatchDeletePostItems., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling TenantBatchDeletePostItems., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
        }

        $this->offsetSet('id', $id);

        return $this;
    }

    /**
     * Unset id
     */
    public function unsetId() {
        $this->offsetUnset('id');
    }

    /**
     * Valid id
     * @return array|boolean
     */
    public function validateId()
    {
        if (!$this->offsetExists('id')) {
            return "Property 'id' was not initialized.";
        }
            if ($this->offsetExists('id') && strlen($this->offsetGet('id')) > 36) {
                return "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ($this->offsetExists('id') && strlen($this->offsetGet('id')) < 36) {
                return "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if ($this->offsetExists('id') && !preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $this->offsetGet('id'))) {
                return "invalid value for 'id', must be conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.";
            }
        return false;
    }


    /**
     * Gets version
     * @return int
     */
    public function getVersion()
    {
        return $this->offsetGet('version');
    }

    /**
     * Checks version
     * @return boolean
     */
    public function hasVersion()
    {
        return $this->offsetExists('version');
    }

    /**
     * Sets version
     * @param int $version Auto-incremented entity version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->offsetSet('version', $version);

        return $this;
    }

    /**
     * Unset version
     */
    public function unsetVersion() {
        $this->offsetUnset('version');
    }

    /**
     * Valid version
     * @return array|boolean
     */
    public function validateVersion()
    {
        if (!$this->offsetExists('version')) {
            return "Property 'version' was not initialized.";
        }
        return false;
    }

}

