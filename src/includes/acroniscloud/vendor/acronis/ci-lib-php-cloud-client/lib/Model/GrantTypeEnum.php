<?php
/**
 * GrantTypeEnum
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

namespace Acronis\Cloud\Client\Model;


/**
 * GrantTypeEnum Class Doc Comment
 *
 * @category    Class
 * @description the only always-required parameter; &#39;password&#39; grant_type implements https://tools.ietf.org/html/rfc6749#section-4.3, &#39;authorization_code&#39;, &#39;refresh_token&#39; and &#39;client_credentials&#39; grant_type&#39;s implement http://openid.net/specs/openid-connect-core-1_0.html#TokenEndpoint &#39;urn:ietf:params:oauth:grant-type:device_code&#39; grant type implements https://tools.ietf.org/html/draft-ietf-oauth-device-flow-07 (available only in Backup Account Server) &#39;urn:ietf:params:oauth:grant-type:jwt-bearer&#39; grant type implements https://tools.ietf.org/html/rfc7523 (available only in Backup Account Server)
 * @package     Acronis\Cloud\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GrantTypeEnum
{
    /**
     * Possible values of this enum
     */
    const PASSWORD = 'password';
    const AUTHORIZATION_CODE = 'authorization_code';
    const REFRESH_TOKEN = 'refresh_token';
    const CLIENT_CREDENTIALS = 'client_credentials';
    const URNIETFPARAMSOAUTHGRANT_TYPEDEVICE_CODE = 'urn:ietf:params:oauth:grant-type:device_code';
    const URNIETFPARAMSOAUTHGRANT_TYPEJWT_BEARER = 'urn:ietf:params:oauth:grant-type:jwt-bearer';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PASSWORD,
            self::AUTHORIZATION_CODE,
            self::REFRESH_TOKEN,
            self::CLIENT_CREDENTIALS,
            self::URNIETFPARAMSOAUTHGRANT_TYPEDEVICE_CODE,
            self::URNIETFPARAMSOAUTHGRANT_TYPEJWT_BEARER,
        ];
    }
}


