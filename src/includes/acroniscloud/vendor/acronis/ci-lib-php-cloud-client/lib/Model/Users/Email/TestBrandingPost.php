<?php
/**
 * TestBrandingPost
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

namespace Acronis\Cloud\Client\Model\Users\Email;

use Acronis\Cloud\Client\BaseModel;
/**
 * TestBrandingPost Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TestBrandingPost extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Users\Email\TestBrandingPost';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'tenant_id' => 'string'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'tenant_id' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'tenant_id' => 'tenant_id'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'tenant_id' => 'setTenantId'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'tenant_id' => 'getTenantId'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'tenant_id' => 'hasTenantId'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'tenant_id' => 'validateTenantId'
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
        if (!empty($this->validateTenantId())) {
            $invalid_properties[] = $this->validateTenantId();
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
        if (!empty($this->validateTenantId())) {
            return false;
        }
        return true;
    }


    /**
     * Gets tenant_id
     * @return string
     */
    public function getTenantId()
    {
        return $this->offsetGet('tenant_id');
    }

    /**
     * Checks tenant_id
     * @return boolean
     */
    public function hasTenantId()
    {
        return $this->offsetExists('tenant_id');
    }

    /**
     * Sets tenant_id
     * @param string $tenant_id
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        if ((strlen($tenant_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $tenant_id when calling TestBrandingPost., must be smaller than or equal to 36.');
        }
        if ((strlen($tenant_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $tenant_id when calling TestBrandingPost., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $tenant_id))) {
            throw new \InvalidArgumentException("invalid value for $tenant_id when calling TestBrandingPost., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
        }

        $this->offsetSet('tenant_id', $tenant_id);

        return $this;
    }

    /**
     * Unset tenant_id
     */
    public function unsetTenantId() {
        $this->offsetUnset('tenant_id');
    }

    /**
     * Valid tenant_id
     * @return array|boolean
     */
    public function validateTenantId()
    {
        if (!$this->offsetExists('tenant_id')) {
            return "Property 'tenant_id' was not initialized.";
        }
            if ($this->offsetExists('tenant_id') && strlen($this->offsetGet('tenant_id')) > 36) {
                return "invalid value for 'tenant_id', the character length must be smaller than or equal to 36.";
            }
            if ($this->offsetExists('tenant_id') && strlen($this->offsetGet('tenant_id')) < 36) {
                return "invalid value for 'tenant_id', the character length must be bigger than or equal to 36.";
            }
            if ($this->offsetExists('tenant_id') && !preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $this->offsetGet('tenant_id'))) {
                return "invalid value for 'tenant_id', must be conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.";
            }
        return false;
    }

}


