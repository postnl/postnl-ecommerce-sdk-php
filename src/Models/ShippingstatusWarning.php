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

class ShippingstatusWarning implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $message;

    /**
     * @var string|null
     */
    private $code;

    /**
     * Returns Message.
     * Warning message
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Sets Message.
     * Warning message
     *
     * @maps Message
     */
    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Code.
     * Warning code
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Warning code
     *
     * @maps Code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Converts the ShippingstatusWarning object to a human-readable string representation.
     *
     * @return string The string representation of the ShippingstatusWarning object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('ShippingstatusWarning', ['message' => $this->message, 'code' => $this->code]);
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
            $json['Message'] = $this->message;
        }
        if (isset($this->code)) {
            $json['Code']    = $this->code;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
