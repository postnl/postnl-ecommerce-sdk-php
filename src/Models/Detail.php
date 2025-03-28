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

class Detail implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $errorcode;

    /**
     * Returns Errorcode.
     */
    public function getErrorcode(): ?string
    {
        return $this->errorcode;
    }

    /**
     * Sets Errorcode.
     *
     * @maps errorcode
     */
    public function setErrorcode(?string $errorcode): void
    {
        $this->errorcode = $errorcode;
    }

    /**
     * Converts the Detail object to a human-readable string representation.
     *
     * @return string The string representation of the Detail object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Detail', ['errorcode' => $this->errorcode]);
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
        if (isset($this->errorcode)) {
            $json['errorcode'] = $this->errorcode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
