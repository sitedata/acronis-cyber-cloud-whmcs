<?php
/**
 * ErrorError
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

namespace Acronis\Cloud\Client\Model\Common;

use Acronis\Cloud\Client\BaseModel;
/**
 * ErrorError Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ErrorError extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Common\ErrorError';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'code' => 'string',
            'context' => 'object',
            'domain' => 'string',
            'message' => 'string',
            'details' => '\Acronis\Cloud\Client\Model\Common\ErrorDetails',
            'data' => 'string[]'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'code' => null,
            'context' => null,
            'domain' => null,
            'message' => null,
            'details' => null,
            'data' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'code' => 'code',
            'context' => 'context',
            'domain' => 'domain',
            'message' => 'message',
            'details' => 'details',
            'data' => 'data'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'code' => 'setCode',
            'context' => 'setContext',
            'domain' => 'setDomain',
            'message' => 'setMessage',
            'details' => 'setDetails',
            'data' => 'setData'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'code' => 'getCode',
            'context' => 'getContext',
            'domain' => 'getDomain',
            'message' => 'getMessage',
            'details' => 'getDetails',
            'data' => 'getData'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'code' => 'hasCode',
            'context' => 'hasContext',
            'domain' => 'hasDomain',
            'message' => 'hasMessage',
            'details' => 'hasDetails',
            'data' => 'hasData'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'code' => 'validateCode',
            'context' => 'validateContext',
            'domain' => 'validateDomain',
            'message' => 'validateMessage',
            'details' => 'validateDetails',
            'data' => 'validateData'
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
        if (!empty($this->validateCode())) {
            $invalid_properties[] = $this->validateCode();
        }
        if (!empty($this->validateContext())) {
            $invalid_properties[] = $this->validateContext();
        }
        if (!empty($this->validateDomain())) {
            $invalid_properties[] = $this->validateDomain();
        }
        if (!empty($this->validateMessage())) {
            $invalid_properties[] = $this->validateMessage();
        }
        if (!empty($this->validateDetails())) {
            $invalid_properties[] = $this->validateDetails();
        }
        if (!empty($this->validateData())) {
            $invalid_properties[] = $this->validateData();
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
        if (!empty($this->validateCode())) {
            return false;
        }
        if (!empty($this->validateContext())) {
            return false;
        }
        if (!empty($this->validateDomain())) {
            return false;
        }
        if (!empty($this->validateMessage())) {
            return false;
        }
        if (!empty($this->validateDetails())) {
            return false;
        }
        if (!empty($this->validateData())) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->offsetGet('code');
    }

    /**
     * Checks code
     * @return boolean
     */
    public function hasCode()
    {
        return $this->offsetExists('code');
    }

    /**
     * Sets code
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->offsetSet('code', $code);

        return $this;
    }

    /**
     * Unset code
     */
    public function unsetCode() {
        $this->offsetUnset('code');
    }

    /**
     * Valid code
     * @return array|boolean
     */
    public function validateCode()
    {
        if (!$this->offsetExists('code')) {
            return "Property 'code' was not initialized.";
        }
        return false;
    }


    /**
     * Gets context
     * @return object
     */
    public function getContext()
    {
        return $this->offsetGet('context');
    }

    /**
     * Checks context
     * @return boolean
     */
    public function hasContext()
    {
        return $this->offsetExists('context');
    }

    /**
     * Sets context
     * @param object $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->offsetSet('context', $context);

        return $this;
    }

    /**
     * Unset context
     */
    public function unsetContext() {
        $this->offsetUnset('context');
    }

    /**
     * Valid context
     * @return array|boolean
     */
    public function validateContext()
    {
        if (!$this->offsetExists('context')) {
            return false;
        }
        return false;
    }


    /**
     * Gets domain
     * @return string
     */
    public function getDomain()
    {
        return $this->offsetGet('domain');
    }

    /**
     * Checks domain
     * @return boolean
     */
    public function hasDomain()
    {
        return $this->offsetExists('domain');
    }

    /**
     * Sets domain
     * @param string $domain
     * @return $this
     */
    public function setDomain($domain)
    {
        $this->offsetSet('domain', $domain);

        return $this;
    }

    /**
     * Unset domain
     */
    public function unsetDomain() {
        $this->offsetUnset('domain');
    }

    /**
     * Valid domain
     * @return array|boolean
     */
    public function validateDomain()
    {
        if (!$this->offsetExists('domain')) {
            return "Property 'domain' was not initialized.";
        }
        return false;
    }


    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->offsetGet('message');
    }

    /**
     * Checks message
     * @return boolean
     */
    public function hasMessage()
    {
        return $this->offsetExists('message');
    }

    /**
     * Sets message
     * @param string $message
     * @return $this
     */
    public function setMessage($message)
    {
        $this->offsetSet('message', $message);

        return $this;
    }

    /**
     * Unset message
     */
    public function unsetMessage() {
        $this->offsetUnset('message');
    }

    /**
     * Valid message
     * @return array|boolean
     */
    public function validateMessage()
    {
        if (!$this->offsetExists('message')) {
            return "Property 'message' was not initialized.";
        }
        return false;
    }


    /**
     * Gets details
     * @return \Acronis\Cloud\Client\Model\Common\ErrorDetails
     */
    public function getDetails()
    {
        return $this->offsetGet('details');
    }

    /**
     * Checks details
     * @return boolean
     */
    public function hasDetails()
    {
        return $this->offsetExists('details');
    }

    /**
     * Sets details
     * @param \Acronis\Cloud\Client\Model\Common\ErrorDetails $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->offsetSet('details', $details);

        return $this;
    }

    /**
     * Unset details
     */
    public function unsetDetails() {
        $this->offsetUnset('details');
    }

    /**
     * Valid details
     * @return array|boolean
     */
    public function validateDetails()
    {
        if (!$this->offsetExists('details')) {
            return "Property 'details' was not initialized.";
        }
        return false;
    }


    /**
     * Gets data
     * @return string[]
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
     * @param string[] $data
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

}


