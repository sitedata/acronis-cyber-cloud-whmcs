<?php
/**
 * SettingSchemaBusinessType
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


/**
 * SettingSchemaBusinessType Class Doc Comment
 *
 * @category    Class
 * @description High-level type that determines how this setting affects platform functionality
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SettingSchemaBusinessType
{
    /**
     * Possible values of this enum
     */
    const QUOTA = 'quota';
    const BRAND = 'brand';
    const FEATURE = 'feature';
    const SETTING = 'setting';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::QUOTA,
            self::BRAND,
            self::FEATURE,
            self::SETTING,
        ];
    }
}


