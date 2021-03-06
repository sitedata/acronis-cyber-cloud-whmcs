<?php
/**
 * LegalDocumentPut
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
 * LegalDocumentPut Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LegalDocumentPut extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LegalDocument\LegalDocumentPut';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'published' => 'bool'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'published' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'published' => 'published'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'published' => 'setPublished'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'published' => 'getPublished'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'published' => 'hasPublished'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'published' => 'validatePublished'
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
        if (!empty($this->validatePublished())) {
            $invalid_properties[] = $this->validatePublished();
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
        if (!empty($this->validatePublished())) {
            return false;
        }
        return true;
    }


    /**
     * Gets published
     * @return bool
     */
    public function getPublished()
    {
        return $this->offsetGet('published');
    }

    /**
     * Checks published
     * @return boolean
     */
    public function hasPublished()
    {
        return $this->offsetExists('published');
    }

    /**
     * Sets published
     * @param bool $published True if document was made available for partners
     * @return $this
     */
    public function setPublished($published)
    {
        $this->offsetSet('published', $published);

        return $this;
    }

    /**
     * Unset published
     */
    public function unsetPublished() {
        $this->offsetUnset('published');
    }

    /**
     * Valid published
     * @return array|boolean
     */
    public function validatePublished()
    {
        if (!$this->offsetExists('published')) {
            return false;
        }
        return false;
    }

}


