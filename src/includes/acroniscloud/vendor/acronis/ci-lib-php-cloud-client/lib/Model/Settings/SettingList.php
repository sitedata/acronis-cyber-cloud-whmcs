<?php
/**
 * SettingList
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

namespace Acronis\Cloud\Client\Model\Settings;

use Acronis\Cloud\Client\BaseModel;
/**
 * SettingList Class Doc Comment
 *
 * @category    Class
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SettingList extends BaseModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Settings\SettingList';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerTypes()
    {
        return [
            'settings' => '\Acronis\Cloud\Client\Model\Settings\Setting[]'
        ];
    }


    /**
     * Array of property to format mappings. Used for (de)serialization
     * @return array
     */
    public static function swaggerFormats()
    {
        return [
            'settings' => null
        ];
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @return array
     */
    public static function attributeMap()
    {
        return [
            'settings' => 'settings'
        ];
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @return array
     */
    public static function setters()
    {
        return [
            'settings' => 'setSettings'
        ];
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @return array
     */
    public static function getters()
    {
        return [
            'settings' => 'getSettings'
        ];
    }

    /**
     * Array of attributes to checkers functions (for deserialization of responses)
     * @return array
     */
    public static function checkers()
    {
        return [
            'settings' => 'hasSettings'
        ];
    }

    /**
     * Array of attributes to validators functions (for deserialization of responses)
     * @return array
     */
    public static function validators() {
        return [
            'settings' => 'validateSettings'
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
        if (!empty($this->validateSettings())) {
            $invalid_properties[] = $this->validateSettings();
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
        if (!empty($this->validateSettings())) {
            return false;
        }
        return true;
    }


    /**
     * Gets settings
     * @return \Acronis\Cloud\Client\Model\Settings\Setting[]
     */
    public function getSettings()
    {
        return $this->offsetGet('settings');
    }

    /**
     * Checks settings
     * @return boolean
     */
    public function hasSettings()
    {
        return $this->offsetExists('settings');
    }

    /**
     * Sets settings
     * @param \Acronis\Cloud\Client\Model\Settings\Setting[] $settings
     * @return $this
     */
    public function setSettings($settings)
    {
        $this->offsetSet('settings', $settings);

        return $this;
    }

    /**
     * Unset settings
     */
    public function unsetSettings() {
        $this->offsetUnset('settings');
    }

    /**
     * Valid settings
     * @return array|boolean
     */
    public function validateSettings()
    {
        if (!$this->offsetExists('settings')) {
            return "Property 'settings' was not initialized.";
        }
        return false;
    }

}


