<?php

declare(strict_types=1);

/*
 * PplusSubscriptionPapiLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PplusSubscriptionPapiLib\Exceptions;

use CoreInterfaces\Sdk\ExceptionInterface;
use PplusSubscriptionPapiLib\ApiHelper;
use PplusSubscriptionPapiLib\Http\HttpResponse;
use PplusSubscriptionPapiLib\Http\HttpRequest;

/**
 * Thrown when there is a network error or HTTP response status code is not okay.
 */
class ApiException extends \Exception implements ExceptionInterface
{
    /**
     * HTTP request
     *
     * @var HttpRequest
     */
    private $request;

    /**
     * HTTP response
     *
     * @var HttpResponse|null
     */
    private $response;

    /**
     * @param string $reason the reason for raising an exception
     * @param HttpRequest $request
     * @param HttpResponse|null $response
     */
    public function __construct(string $reason, HttpRequest $request, ?HttpResponse $response)
    {
        parent::__construct($reason, \is_null($response) ? 0 : $response->getStatusCode());
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * Returns the HTTP request
     */
    public function getHttpRequest(): HttpRequest
    {
        return $this->request;
    }

    /**
     * Returns the HTTP response
     */
    public function getHttpResponse(): ?HttpResponse
    {
        return $this->response;
    }

    /**
     * Is the response available?
     */
    public function hasResponse(): bool
    {
        return !\is_null($this->response);
    }

    /**
     * Converts the ApiException object to a human-readable string representation.
     *
     * @return string The string representation of the ApiException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ApiException',
            [
                'statusCode' => $this->getCode(),
                'message' => $this->getMessage()
            ]
        );
    }
}
