<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Exceptions;

use PostnlEcommerceLib\ApiHelper;

class TooManyRequestsException extends ApiException
{
    /**
     * @var string|null
     */
    private $messageProperty;

    /**
     * @var float|null
     */
    private $httpStatusCode;

    /**
     * Returns Message Property.
     */
    public function getMessageProperty(): ?string
    {
        return $this->messageProperty;
    }

    /**
     * Sets Message Property.
     *
     * @maps message
     */
    public function setMessageProperty(?string $messageProperty): void
    {
        $this->messageProperty = $messageProperty;
    }

    /**
     * Returns Http Status Code.
     */
    public function getHttpStatusCode(): ?float
    {
        return $this->httpStatusCode;
    }

    /**
     * Sets Http Status Code.
     *
     * @maps http_status_code
     */
    public function setHttpStatusCode(?float $httpStatusCode): void
    {
        $this->httpStatusCode = $httpStatusCode;
    }

    /**
     * Converts the TooManyRequestsException object to a human-readable string representation.
     *
     * @return string The string representation of the TooManyRequestsException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TooManyRequestsException',
            ['messageProperty' => $this->messageProperty, 'httpStatusCode' => $this->httpStatusCode],
            parent::__toString()
        );
    }
}
