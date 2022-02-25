<?php
/**
 * NewsletterApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Shopware Store API
 *
 * This endpoint reference contains an overview of all endpoints comprising the Shopware Store API
 *
 * OpenAPI spec version: 6.4.8.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.33
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * NewsletterApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NewsletterApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation confirmNewsletter
     *
     * Confirm a newsletter registration
     *
     * @param  \Swagger\Client\Model\NewsletterConfirmBody $body body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function confirmNewsletter($body, $content_type, $accept)
    {
        $this->confirmNewsletterWithHttpInfo($body, $content_type, $accept);
    }

    /**
     * Operation confirmNewsletterWithHttpInfo
     *
     * Confirm a newsletter registration
     *
     * @param  \Swagger\Client\Model\NewsletterConfirmBody $body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function confirmNewsletterWithHttpInfo($body, $content_type, $accept)
    {
        $returnType = '';
        $request = $this->confirmNewsletterRequest($body, $content_type, $accept);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation confirmNewsletterAsync
     *
     * Confirm a newsletter registration
     *
     * @param  \Swagger\Client\Model\NewsletterConfirmBody $body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function confirmNewsletterAsync($body, $content_type, $accept)
    {
        return $this->confirmNewsletterAsyncWithHttpInfo($body, $content_type, $accept)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation confirmNewsletterAsyncWithHttpInfo
     *
     * Confirm a newsletter registration
     *
     * @param  \Swagger\Client\Model\NewsletterConfirmBody $body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function confirmNewsletterAsyncWithHttpInfo($body, $content_type, $accept)
    {
        $returnType = '';
        $request = $this->confirmNewsletterRequest($body, $content_type, $accept);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'confirmNewsletter'
     *
     * @param  \Swagger\Client\Model\NewsletterConfirmBody $body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function confirmNewsletterRequest($body, $content_type, $accept)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling confirmNewsletter'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling confirmNewsletter'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling confirmNewsletter'
            );
        }

        $resourcePath = '/newsletter/confirm';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('sw-access-key');
        if ($apiKey !== null) {
            $headers['sw-access-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation subscribeToNewsletter
     *
     * Create or remove a newsletter subscription
     *
     * @param  \Swagger\Client\Model\NewsletterSubscribeBody $body body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function subscribeToNewsletter($body, $content_type, $accept)
    {
        $this->subscribeToNewsletterWithHttpInfo($body, $content_type, $accept);
    }

    /**
     * Operation subscribeToNewsletterWithHttpInfo
     *
     * Create or remove a newsletter subscription
     *
     * @param  \Swagger\Client\Model\NewsletterSubscribeBody $body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function subscribeToNewsletterWithHttpInfo($body, $content_type, $accept)
    {
        $returnType = '';
        $request = $this->subscribeToNewsletterRequest($body, $content_type, $accept);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation subscribeToNewsletterAsync
     *
     * Create or remove a newsletter subscription
     *
     * @param  \Swagger\Client\Model\NewsletterSubscribeBody $body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function subscribeToNewsletterAsync($body, $content_type, $accept)
    {
        return $this->subscribeToNewsletterAsyncWithHttpInfo($body, $content_type, $accept)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation subscribeToNewsletterAsyncWithHttpInfo
     *
     * Create or remove a newsletter subscription
     *
     * @param  \Swagger\Client\Model\NewsletterSubscribeBody $body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function subscribeToNewsletterAsyncWithHttpInfo($body, $content_type, $accept)
    {
        $returnType = '';
        $request = $this->subscribeToNewsletterRequest($body, $content_type, $accept);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'subscribeToNewsletter'
     *
     * @param  \Swagger\Client\Model\NewsletterSubscribeBody $body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function subscribeToNewsletterRequest($body, $content_type, $accept)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling subscribeToNewsletter'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling subscribeToNewsletter'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling subscribeToNewsletter'
            );
        }

        $resourcePath = '/newsletter/subscribe';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('sw-access-key');
        if ($apiKey !== null) {
            $headers['sw-access-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation unsubscribeToNewsletter
     *
     * Remove a newsletter subscription
     *
     * @param  \Swagger\Client\Model\NewsletterUnsubscribeBody $body body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function unsubscribeToNewsletter($body, $content_type, $accept)
    {
        $this->unsubscribeToNewsletterWithHttpInfo($body, $content_type, $accept);
    }

    /**
     * Operation unsubscribeToNewsletterWithHttpInfo
     *
     * Remove a newsletter subscription
     *
     * @param  \Swagger\Client\Model\NewsletterUnsubscribeBody $body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function unsubscribeToNewsletterWithHttpInfo($body, $content_type, $accept)
    {
        $returnType = '';
        $request = $this->unsubscribeToNewsletterRequest($body, $content_type, $accept);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation unsubscribeToNewsletterAsync
     *
     * Remove a newsletter subscription
     *
     * @param  \Swagger\Client\Model\NewsletterUnsubscribeBody $body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function unsubscribeToNewsletterAsync($body, $content_type, $accept)
    {
        return $this->unsubscribeToNewsletterAsyncWithHttpInfo($body, $content_type, $accept)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation unsubscribeToNewsletterAsyncWithHttpInfo
     *
     * Remove a newsletter subscription
     *
     * @param  \Swagger\Client\Model\NewsletterUnsubscribeBody $body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function unsubscribeToNewsletterAsyncWithHttpInfo($body, $content_type, $accept)
    {
        $returnType = '';
        $request = $this->unsubscribeToNewsletterRequest($body, $content_type, $accept);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'unsubscribeToNewsletter'
     *
     * @param  \Swagger\Client\Model\NewsletterUnsubscribeBody $body (required)
     * @param  string $content_type Content type of the request (required)
     * @param  string $accept Accepted response content types (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function unsubscribeToNewsletterRequest($body, $content_type, $accept)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling unsubscribeToNewsletter'
            );
        }
        // verify the required parameter 'content_type' is set
        if ($content_type === null || (is_array($content_type) && count($content_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_type when calling unsubscribeToNewsletter'
            );
        }
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling unsubscribeToNewsletter'
            );
        }

        $resourcePath = '/newsletter/unsubscribe';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($content_type !== null) {
            $headerParams['Content-Type'] = ObjectSerializer::toHeaderValue($content_type);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('sw-access-key');
        if ($apiKey !== null) {
            $headers['sw-access-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}