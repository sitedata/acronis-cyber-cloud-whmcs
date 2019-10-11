<?php
/**
 * ClientPostResult
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
 * ClientPostResult Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ClientPostResult extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Clients\ClientPostResult';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'client_id' => 'string',
            'tenant_id' => 'string',
            'client_secret_expires_at' => 'int',
            'type' => 'string',
            'data' => 'object',
            'token_endpoint_auth_method' => 'string',
            'client_secret' => 'string',
            'registration_access_token' => 'string',
            'registration_client_uri' => 'string'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'client_id' => null,
            'tenant_id' => null,
            'client_secret_expires_at' => 'int32',
            'type' => null,
            'data' => null,
            'token_endpoint_auth_method' => null,
            'client_secret' => null,
            'registration_access_token' => null,
            'registration_client_uri' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'client_id' => 'client_id',
            'tenant_id' => 'tenant_id',
            'client_secret_expires_at' => 'client_secret_expires_at',
            'type' => 'type',
            'data' => 'data',
            'token_endpoint_auth_method' => 'token_endpoint_auth_method',
            'client_secret' => 'client_secret',
            'registration_access_token' => 'registration_access_token',
            'registration_client_uri' => 'registration_client_uri'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'client_id' => 'setClientId',
            'tenant_id' => 'setTenantId',
            'client_secret_expires_at' => 'setClientSecretExpiresAt',
            'type' => 'setType',
            'data' => 'setData',
            'token_endpoint_auth_method' => 'setTokenEndpointAuthMethod',
            'client_secret' => 'setClientSecret',
            'registration_access_token' => 'setRegistrationAccessToken',
            'registration_client_uri' => 'setRegistrationClientUri'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'client_id' => 'getClientId',
            'tenant_id' => 'getTenantId',
            'client_secret_expires_at' => 'getClientSecretExpiresAt',
            'type' => 'getType',
            'data' => 'getData',
            'token_endpoint_auth_method' => 'getTokenEndpointAuthMethod',
            'client_secret' => 'getClientSecret',
            'registration_access_token' => 'getRegistrationAccessToken',
            'registration_client_uri' => 'getRegistrationClientUri'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'client_id' => 'hasClientId',
            'tenant_id' => 'hasTenantId',
            'client_secret_expires_at' => 'hasClientSecretExpiresAt',
            'type' => 'hasType',
            'data' => 'hasData',
            'token_endpoint_auth_method' => 'hasTokenEndpointAuthMethod',
            'client_secret' => 'hasClientSecret',
            'registration_access_token' => 'hasRegistrationAccessToken',
            'registration_client_uri' => 'hasRegistrationClientUri'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'client_id' => 'validateClientId',
            'tenant_id' => 'validateTenantId',
            'client_secret_expires_at' => 'validateClientSecretExpiresAt',
            'type' => 'validateType',
            'data' => 'validateData',
            'token_endpoint_auth_method' => 'validateTokenEndpointAuthMethod',
            'client_secret' => 'validateClientSecret',
            'registration_access_token' => 'validateRegistrationAccessToken',
            'registration_client_uri' => 'validateRegistrationClientUri'
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
        if (!empty($this->validateClientId())) {
            $invalid_properties[] = $this->validateClientId();
        }
        if (!empty($this->validateTenantId())) {
            $invalid_properties[] = $this->validateTenantId();
        }
        if (!empty($this->validateClientSecretExpiresAt())) {
            $invalid_properties[] = $this->validateClientSecretExpiresAt();
        }
        if (!empty($this->validateType())) {
            $invalid_properties[] = $this->validateType();
        }
        if (!empty($this->validateData())) {
            $invalid_properties[] = $this->validateData();
        }
        if (!empty($this->validateTokenEndpointAuthMethod())) {
            $invalid_properties[] = $this->validateTokenEndpointAuthMethod();
        }
        if (!empty($this->validateClientSecret())) {
            $invalid_properties[] = $this->validateClientSecret();
        }
        if (!empty($this->validateRegistrationAccessToken())) {
            $invalid_properties[] = $this->validateRegistrationAccessToken();
        }
        if (!empty($this->validateRegistrationClientUri())) {
            $invalid_properties[] = $this->validateRegistrationClientUri();
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
        if (!empty($this->validateClientId())) {
            return false;
        }
        if (!empty($this->validateTenantId())) {
            return false;
        }
        if (!empty($this->validateClientSecretExpiresAt())) {
            return false;
        }
        if (!empty($this->validateType())) {
            return false;
        }
        if (!empty($this->validateData())) {
            return false;
        }
        if (!empty($this->validateTokenEndpointAuthMethod())) {
            return false;
        }
        if (!empty($this->validateClientSecret())) {
            return false;
        }
        if (!empty($this->validateRegistrationAccessToken())) {
            return false;
        }
        if (!empty($this->validateRegistrationClientUri())) {
            return false;
        }
        return true;
    }


    /**
     * Gets client_id
     * @return string
     */
    public function getClientId()
    {
        return $this->offsetGet('client_id');
    }

    /**
     * Checks client_id
     * @return boolean
     */
    public function hasClientId()
    {
        return $this->offsetExists('client_id');
    }

    /**
     * Sets client_id
     * @param string $client_id
     * @return $this
     */
    public function setClientId($client_id)
    {
        if ((strlen($client_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $client_id when calling ClientPostResult., must be smaller than or equal to 36.');
        }
        if ((strlen($client_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $client_id when calling ClientPostResult., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $client_id))) {
            throw new \InvalidArgumentException("invalid value for $client_id when calling ClientPostResult., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
        }

        $this->offsetSet('client_id', $client_id);

        return $this;
    }

    /**
     * Unset client_id
     */
    public function unsetClientId() {
        $this->offsetUnset('client_id');
    }

    /**
     * Valid client_id
     * @return array|boolean
     */
    public function validateClientId()
    {
        if (!$this->offsetExists('client_id')) {
            return "Property 'client_id' was not initialized.";
        }
            if ($this->offsetExists('client_id') && strlen($this->offsetGet('client_id')) > 36) {
                return "invalid value for 'client_id', the character length must be smaller than or equal to 36.";
            }
            if ($this->offsetExists('client_id') && strlen($this->offsetGet('client_id')) < 36) {
                return "invalid value for 'client_id', the character length must be bigger than or equal to 36.";
            }
            if ($this->offsetExists('client_id') && !preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $this->offsetGet('client_id'))) {
                return "invalid value for 'client_id', must be conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.";
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
            throw new \InvalidArgumentException('invalid length for $tenant_id when calling ClientPostResult., must be smaller than or equal to 36.');
        }
        if ((strlen($tenant_id) < 36)) {
            throw new \InvalidArgumentException('invalid length for $tenant_id when calling ClientPostResult., must be bigger than or equal to 36.');
        }
        if ((!preg_match("/[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/", $tenant_id))) {
            throw new \InvalidArgumentException("invalid value for $tenant_id when calling ClientPostResult., must conform to the pattern /[0-9a-f]{8}-([0-9a-f]{4}-){3}[0-9a-f]{12}/.");
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
     * Gets client_secret_expires_at
     * @return int
     */
    public function getClientSecretExpiresAt()
    {
        return $this->offsetGet('client_secret_expires_at');
    }

    /**
     * Checks client_secret_expires_at
     * @return boolean
     */
    public function hasClientSecretExpiresAt()
    {
        return $this->offsetExists('client_secret_expires_at');
    }

    /**
     * Sets client_secret_expires_at
     * @param int $client_secret_expires_at Time at which the client_secret will expire or 0 if it will not expire, according to the configured client secret lifetime. Its value is represented as number of seconds since the Unix epoch.
     * @return $this
     */
    public function setClientSecretExpiresAt($client_secret_expires_at)
    {
        $this->offsetSet('client_secret_expires_at', $client_secret_expires_at);

        return $this;
    }

    /**
     * Unset client_secret_expires_at
     */
    public function unsetClientSecretExpiresAt() {
        $this->offsetUnset('client_secret_expires_at');
    }

    /**
     * Valid client_secret_expires_at
     * @return array|boolean
     */
    public function validateClientSecretExpiresAt()
    {
        if (!$this->offsetExists('client_secret_expires_at')) {
            return "Property 'client_secret_expires_at' was not initialized.";
        }
        return false;
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
     * @param object $data Client internal data
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
     * @param string $token_endpoint_auth_method Token endpoint auth method
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


    /**
     * Gets client_secret
     * @return string
     */
    public function getClientSecret()
    {
        return $this->offsetGet('client_secret');
    }

    /**
     * Checks client_secret
     * @return boolean
     */
    public function hasClientSecret()
    {
        return $this->offsetExists('client_secret');
    }

    /**
     * Sets client_secret
     * @param string $client_secret Client secret
     * @return $this
     */
    public function setClientSecret($client_secret)
    {
        $this->offsetSet('client_secret', $client_secret);

        return $this;
    }

    /**
     * Unset client_secret
     */
    public function unsetClientSecret() {
        $this->offsetUnset('client_secret');
    }

    /**
     * Valid client_secret
     * @return array|boolean
     */
    public function validateClientSecret()
    {
        if (!$this->offsetExists('client_secret')) {
            return false;
        }
        return false;
    }


    /**
     * Gets registration_access_token
     * @return string
     */
    public function getRegistrationAccessToken()
    {
        return $this->offsetGet('registration_access_token');
    }

    /**
     * Checks registration_access_token
     * @return boolean
     */
    public function hasRegistrationAccessToken()
    {
        return $this->offsetExists('registration_access_token');
    }

    /**
     * Sets registration_access_token
     * @param string $registration_access_token Registration access token that can be used to query, modify or delete the client`s registration.
     * @return $this
     */
    public function setRegistrationAccessToken($registration_access_token)
    {
        $this->offsetSet('registration_access_token', $registration_access_token);

        return $this;
    }

    /**
     * Unset registration_access_token
     */
    public function unsetRegistrationAccessToken() {
        $this->offsetUnset('registration_access_token');
    }

    /**
     * Valid registration_access_token
     * @return array|boolean
     */
    public function validateRegistrationAccessToken()
    {
        if (!$this->offsetExists('registration_access_token')) {
            return false;
        }
        return false;
    }


    /**
     * Gets registration_client_uri
     * @return string
     */
    public function getRegistrationClientUri()
    {
        return $this->offsetGet('registration_client_uri');
    }

    /**
     * Checks registration_client_uri
     * @return boolean
     */
    public function hasRegistrationClientUri()
    {
        return $this->offsetExists('registration_client_uri');
    }

    /**
     * Sets registration_client_uri
     * @param string $registration_client_uri Location of the Client Configuration Endpoint where the Registration Access Token can be used to perform subsequent operations upon the resulting Client registration.
     * @return $this
     */
    public function setRegistrationClientUri($registration_client_uri)
    {
        $this->offsetSet('registration_client_uri', $registration_client_uri);

        return $this;
    }

    /**
     * Unset registration_client_uri
     */
    public function unsetRegistrationClientUri() {
        $this->offsetUnset('registration_client_uri');
    }

    /**
     * Valid registration_client_uri
     * @return array|boolean
     */
    public function validateRegistrationClientUri()
    {
        if (!$this->offsetExists('registration_client_uri')) {
            return false;
        }
        return false;
    }

}


