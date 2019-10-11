<?php
/**
 * ClientPost
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

namespace Acronis\Cloud\Client\Model\Clients;

use Acronis\Cloud\Client\BaseModel;
/**
 * ClientPost Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ClientPost extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Clients\ClientPost';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'type' => 'string',
            'tenant_id' => 'string',
            'data' => 'object',
            'token_endpoint_auth_method' => 'string'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'type' => null,
            'tenant_id' => null,
            'data' => null,
            'token_endpoint_auth_method' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'type' => 'type',
            'tenant_id' => 'tenant_id',
            'data' => 'data',
            'token_endpoint_auth_method' => 'token_endpoint_auth_method'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'type' => 'setType',
            'tenant_id' => 'setTenantId',
            'data' => 'setData',
            'token_endpoint_auth_method' => 'setTokenEndpointAuthMethod'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'type' => 'getType',
            'tenant_id' => 'getTenantId',
            'data' => 'getData',
            'token_endpoint_auth_method' => 'getTokenEndpointAuthMethod'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'type' => 'hasType',
            'tenant_id' => 'hasTenantId',
            'data' => 'hasData',
            'token_endpoint_auth_method' => 'hasTokenEndpointAuthMethod'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'type' => 'validateType',
            'tenant_id' => 'validateTenantId',
            'data' => 'validateData',
            'token_endpoint_auth_method' => 'validateTokenEndpointAuthMethod'
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
        if (!empty($this->validateType())) {
            $invalid_properties[] = $this->validateType();
        }
        if (!empty($this->validateTenantId())) {
            $invalid_properties[] = $this->validateTenantId();
        }
        if (!empty($this->validateData())) {
            $invalid_properties[] = $this->validateData();
        }
        if (!empty($this->validateTokenEndpointAuthMethod())) {
            $invalid_properties[] = $this->validateTokenEndpointAuthMethod();
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
        if (!empty($this->validateType())) {
            return false;
        }
        if (!empty($this->validateTenantId())) {
            return false;
        }
        if (!empty($this->validateData())) {
            return false;
        }
        if (!empty($this->validateTokenEndpointAuthMethod())) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->offsetGet('type');
    }

    /**
     * Checks type
     * @return boolean
     */
    public function hasType()
    {
        return $this->offsetExists('type');
    }

    /**
     * Sets type
     * @param string $type Client type
     * @return $this
     */
    public function setType($type)
    {
        $this->offsetSet('type', $type);

        return $this;
    }

    /**
     * Unset type
     */
    public function unsetType() {
        $this->offsetUnset('type');
    }

    /**
     * Valid type
     * @return array|boolean
     */
    public function validateType()
    {
        if (!$this->offsetExists('type')) {
            return "Property 'type' was not initialized.";
        }
        return false;
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
            throw new \InvalidArgumentException('invalid length for $tenant_id when calling ClientPost., must be smaller than or equal to 36.');
        }
        if ((strlen($tenant_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $tenant_id when calling ClientPost., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $tenant_id))) {
            throw new \InvalidArgumentException("invalid value for $tenant_id when calling ClientPost., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
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


    /**
     * Gets data
     * @return object
     */
    public function getData()
    {
        return $this->offsetGet('data');
    }

    /**
     * Checks data
     * @return boolean
     */
    public function hasData()
    {
        return $this->offsetExists('data');
    }

    /**
     * Sets data
     * @param object $data Additional metadata, like agentType, hostname, etc...
     * @return $this
     */
    public function setData($data)
    {
        $this->offsetSet('data', $data);

        return $this;
    }

    /**
     * Unset data
     */
    public function unsetData() {
        $this->offsetUnset('data');
    }

    /**
     * Valid data
     * @return array|boolean
     */
    public function validateData()
    {
        if (!$this->offsetExists('data')) {
            return false;
        }
        return false;
    }


    /**
     * Gets token_endpoint_auth_method
     * @return string
     */
    public function getTokenEndpointAuthMethod()
    {
        return $this->offsetGet('token_endpoint_auth_method');
    }

    /**
     * Checks token_endpoint_auth_method
     * @return boolean
     */
    public function hasTokenEndpointAuthMethod()
    {
        return $this->offsetExists('token_endpoint_auth_method');
    }

    /**
     * Sets token_endpoint_auth_method
     * @param string $token_endpoint_auth_method Explicit specified auth method
     * @return $this
     */
    public function setTokenEndpointAuthMethod($token_endpoint_auth_method)
    {
        $this->offsetSet('token_endpoint_auth_method', $token_endpoint_auth_method);

        return $this;
    }

    /**
     * Unset token_endpoint_auth_method
     */
    public function unsetTokenEndpointAuthMethod() {
        $this->offsetUnset('token_endpoint_auth_method');
    }

    /**
     * Valid token_endpoint_auth_method
     * @return array|boolean
     */
    public function validateTokenEndpointAuthMethod()
    {
        if (!$this->offsetExists('token_endpoint_auth_method')) {
            return "Property 'token_endpoint_auth_method' was not initialized.";
        }
        return false;
    }

}


