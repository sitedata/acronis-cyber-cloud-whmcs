<?php
/**
 * StoredReportParamsReportFormat
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

namespace Acronis\Cloud\Client\Model\Reports\Stored;


/**
 * StoredReportParamsReportFormat Class Doc Comment
 *
 * @category    Class
 * @description Stored report data format
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class StoredReportParamsReportFormat
{
    /**
     * Possible values of this enum
     */
    const JSON_V1 = 'json_v1';
    const CSV_V2_0 = 'csv_v2_0';
    const CSV = 'csv';
    const HTML = 'html';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::JSON_V1,
            self::CSV_V2_0,
            self::CSV,
            self::HTML,
        ];
    }
}


