<?php
/**
 * BulkPostLevel
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

namespace Acronis\Cloud\Client\Model\Reports;


/**
 * BulkPostLevel Class Doc Comment
 *
 * @category    Class
 * @description Level of report detail
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BulkPostLevel
{
    /**
     * Possible values of this enum
     */
    const ITSELF = 'itself';
    const DIRECT_PARTNERS = 'direct_partners';
    const ALL_PARTNERS = 'all_partners';
    const ALL_CUSTOMERS = 'all_customers';
    const ACCOUNTS = 'accounts';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ITSELF,
            self::DIRECT_PARTNERS,
            self::ALL_PARTNERS,
            self::ALL_CUSTOMERS,
            self::ACCOUNTS,
        ];
    }
}


