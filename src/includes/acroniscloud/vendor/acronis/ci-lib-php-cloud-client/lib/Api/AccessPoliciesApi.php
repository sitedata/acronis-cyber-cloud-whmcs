<?php
/**
 * AccessPoliciesApi
 * PHP version 5
 *
 * @category Class
 * @package  Acronis\Cloud\Client
 * @author   Swagger Codegen team
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

namespace Acronis\Cloud\Client\Api;

use \Acronis\Cloud\Client\ApiClient;
use \Acronis\Cloud\Client\HttpException;
use \Acronis\Cloud\Client\HttpResponse;
use \Acronis\Cloud\Client\Configuration;
use \Acronis\Cloud\Client\ObjectSerializer;

/**
 * AccessPoliciesApi Class Doc Comment
 *
 * @category Class
 * @package  Acronis\Cloud\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccessPoliciesApi
{
    /**
     * API Client
     *
     * @var \Acronis\Cloud\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     */
    public function __construct(ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return AccessPoliciesApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getAccessPolicies
     *
     * AccessPolicies
     *
     * @param string $users Return access policies for users with specified UUIDs (required)
     * @param string $if_modified_since  (optional)
     * @throws \Acronis\Cloud\Client\ApiException on non-2xx response
     * @return HttpResponse
     */
    public function getAccessPolicies($users, $if_modified_since = null)
    {
        // verify the required parameter 'users' is set
        if ($users === null) {
            throw new \InvalidArgumentException('Missing the required parameter $users when calling getAccessPolicies');
        }
        // parse inputs
        $resourcePath = "/access_policies";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($users !== null) {
            $queryParams['users'] = $this->apiClient->getSerializer()->toQueryValue($users);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = $this->apiClient->getSerializer()->toHeaderValue($if_modified_since);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Acronis\Cloud\Client\Model\AccessPolicies\AccessPoliciesList',
                '/access_policies'
            );

            return new HttpResponse($statusCode, $httpHeader, $this->apiClient->getSerializer()->deserialize($response, '\Acronis\Cloud\Client\Model\AccessPolicies\AccessPoliciesList', $httpHeader));
        } catch (HttpException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Acronis\Cloud\Client\Model\AccessPolicies\AccessPoliciesList', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Acronis\Cloud\Client\Model\Common\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Acronis\Cloud\Client\Model\Common\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Acronis\Cloud\Client\Model\Common\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAccessPoliciesByAccessPolicyId
     *
     * AccessPoliciesByAccessPolicyId
     *
     * @param string $access_policy_id  (required)
     * @param string $_issues  (optional)
     * @param string $if_modified_since  (optional)
     * @throws \Acronis\Cloud\Client\ApiException on non-2xx response
     * @return HttpResponse
     */
    public function getAccessPoliciesByAccessPolicyId($access_policy_id, $_issues = null, $if_modified_since = null)
    {
        // verify the required parameter 'access_policy_id' is set
        if ($access_policy_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $access_policy_id when calling getAccessPoliciesByAccessPolicyId');
        }
        // parse inputs
        $resourcePath = "/access_policies/{access_policy_id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($_issues !== null) {
            $queryParams['_issues'] = $this->apiClient->getSerializer()->toQueryValue($_issues);
        }
        // header params
        if ($if_modified_since !== null) {
            $headerParams['If-Modified-Since'] = $this->apiClient->getSerializer()->toHeaderValue($if_modified_since);
        }
        // path params
        if ($access_policy_id !== null) {
            $resourcePath = str_replace(
                "{" . "access_policy_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($access_policy_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Acronis\Cloud\Client\Model\AccessPolicies\AccessPolicy',
                '/access_policies/{access_policy_id}'
            );

            return new HttpResponse($statusCode, $httpHeader, $this->apiClient->getSerializer()->deserialize($response, '\Acronis\Cloud\Client\Model\AccessPolicies\AccessPolicy', $httpHeader));
        } catch (HttpException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Acronis\Cloud\Client\Model\AccessPolicies\AccessPolicy', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Acronis\Cloud\Client\Model\Common\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Acronis\Cloud\Client\Model\Common\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Acronis\Cloud\Client\Model\Common\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
