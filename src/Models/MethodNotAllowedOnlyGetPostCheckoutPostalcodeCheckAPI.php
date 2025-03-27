<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models;

use PostnlEcommerceLib\ApiHelper;
use stdClass;

class MethodNotAllowedOnlyGetPostCheckoutPostalcodeCheckAPI implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $message;

    /**
     * @var float|null
     */
    private $httpStatusCode;

    /**
     * Returns Message.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @maps message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
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
     * Converts the MethodNotAllowedOnlyGetPostCheckoutPostalcodeCheckAPI object to a human-readable string
     * representation.
     *
     * @return string The string representation of the MethodNotAllowedOnlyGetPostCheckoutPostalcodeCheckAPI object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'MethodNotAllowedOnlyGetPostCheckoutPostalcodeCheckAPI',
            ['message' => $this->message, 'httpStatusCode' => $this->httpStatusCode]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->message)) {
            $json['message']          = $this->message;
        }
        if (isset($this->httpStatusCode)) {
            $json['http_status_code'] = $this->httpStatusCode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
