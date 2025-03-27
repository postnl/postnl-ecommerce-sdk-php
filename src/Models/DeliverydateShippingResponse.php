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

class DeliverydateShippingResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $sentDate;

    /**
     * Returns Sent Date.
     */
    public function getSentDate(): ?string
    {
        return $this->sentDate;
    }

    /**
     * Sets Sent Date.
     *
     * @maps SentDate
     */
    public function setSentDate(?string $sentDate): void
    {
        $this->sentDate = $sentDate;
    }

    /**
     * Converts the DeliverydateShippingResponse object to a human-readable string representation.
     *
     * @return string The string representation of the DeliverydateShippingResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('DeliverydateShippingResponse', ['sentDate' => $this->sentDate]);
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
        if (isset($this->sentDate)) {
            $json['SentDate'] = $this->sentDate;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
