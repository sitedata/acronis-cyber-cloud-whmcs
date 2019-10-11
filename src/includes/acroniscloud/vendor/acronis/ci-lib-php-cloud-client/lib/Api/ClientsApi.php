<?php
/**
 * ClientsApi
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
 * ClientsApi Class Doc Comment
 *
 * @category Class
 * @package  Acronis\Cloud\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientsApi
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
     * @return ClientsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteClientsByClientId
     *
     * ClientsByClientId
     *
     * @param string $client_id  (required)
     * @param string $_issues  (optional)
     * @throws \Acronis\Cloud\Client\ApiException on non-2xx response
     * @return HttpResponse
     */
    public function deleteClientsByClientId($client_id, $_issues = null)
    {
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling deleteClientsByClientId');
        }
        // parse inputs
        $resourcePath = "/clients/{client_id}";
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
        // path params
        if ($client_id !== null) {
            $resourcePath = str_replace(
                "{" . "client_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($client_id),
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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/clients/{client_id}'
            );

            return new HttpResponse($statusCode, $httpHeader, null);
        } catch (HttpException $e) {
            switch ($e->getCode()) {
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
     * Operation getClientsByClientId
     *
     * ClientsByClientId
     *
     * @param string $client_id  (required)
     * @param string $_issues  (optional)
     * @param string $if_modified_since  (optional)
     * @throws \Acronis\Cloud\Client\ApiException on non-2xx response
     * @return HttpResponse
     */
    public function getClientsByClientId($client_id, $_issues = null, $if_modified_since = null)
    {
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling getClientsByClientId');
        }
        // parse inputs
        $resourcePath = "/clients/{client_id}";
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
        if ($client_id !== null) {
            $resourcePath = str_replace(
                "{" . "client_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($client_id),
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
                '\Acronis\Cloud\Client\Model\Clients\Client',
                '/clients/{client_id}'
            );

            return new HttpResponse($statusCode, $httpHeader, $this->apiClient->getSerializer()->deserialize($response, '\Acronis\Cloud\Client\Model\Clients\Client', $httpHeader));
        } catch (HttpException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Acronis\Cloud\Client\Model\Clients\Client', $e->getResponseHeaders());
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
     * Operation postClients
     *
     * Clients
     *
     * @param \Acronis\Cloud\Client\Model\Clients\ClientPost $body  (required)
     * @param string $_issues  (optional)
     * @throws \Acronis\Cloud\Client\ApiException on non-2xx response
     * @return HttpResponse
     */
    public function postClients($body, $_issues = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling postClients');
        }
        // parse inputs
        $resourcePath = "/clients";
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
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Acronis\Cloud\Client\Model\Clients\ClientPostResult',
                '/clients'
            );

            return new HttpResponse($statusCode, $httpHeader, $this->apiClient->getSerializer()->deserialize($response, '\Acronis\Cloud\Client\Model\Clients\ClientPostResult', $httpHeader));
        } catch (HttpException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Acronis\Cloud\Client\Model\Clients\ClientPostResult', $e->getResponseHeaders());
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
                case 415:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Acronis\Cloud\Client\Model\Common\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation putClientsByClientId
     *
     * ClientsByClientId
     *
     * @param string $client_id  (required)
     * @param \Acronis\Cloud\Client\Model\Clients\ClientPut $body  (required)
     * @param string $_issues  (optional)
     * @throws \Acronis\Cloud\Client\ApiException on non-2xx response
     * @return HttpResponse
     */
    public function putClientsByClientId($client_id, $body, $_issues = null)
    {
        // verify the required parameter 'client_id' is set
        if ($client_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $client_id when calling putClientsByClientId');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling putClientsByClientId');
        }
        // parse inputs
        $resourcePath = "/clients/{client_id}";
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
        // path params
        if ($client_id !== null) {
            $resourcePath = str_replace(
                "{" . "client_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($client_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Acronis\Cloud\Client\Model\Clients\Client',
                '/clients/{client_id}'
            );

            return new HttpResponse($statusCode, $httpHeader, $this->apiClient->getSerializer()->deserialize($response, '\Acronis\Cloud\Client\Model\Clients\Client', $httpHeader));
        } catch (HttpException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Acronis\Cloud\Client\Model\Clients\Client', $e->getResponseHeaders());
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
                case 415:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Acronis\Cloud\Client\Model\Common\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
