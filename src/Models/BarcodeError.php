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

class BarcodeError implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $errorMsg;

    /**
     * @var string|null
     */
    private $errorNumber;

    /**
     * Returns Error Msg.
     * The error message
     */
    public function getErrorMsg(): ?string
    {
        return $this->errorMsg;
    }

    /**
     * Sets Error Msg.
     * The error message
     *
     * @maps ErrorMsg
     */
    public function setErrorMsg(?string $errorMsg): void
    {
        $this->errorMsg = $errorMsg;
    }

    /**
     * Returns Error Number.
     * The error code
     */
    public function getErrorNumber(): ?string
    {
        return $this->errorNumber;
    }

    /**
     * Sets Error Number.
     * The error code
     *
     * @maps ErrorNumber
     */
    public function setErrorNumber(?string $errorNumber): void
    {
        $this->errorNumber = $errorNumber;
    }

    /**
     * Converts the BarcodeError object to a human-readable string representation.
     *
     * @return string The string representation of the BarcodeError object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BarcodeError',
            ['errorMsg' => $this->errorMsg, 'errorNumber' => $this->errorNumber]
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
        if (isset($this->errorMsg)) {
            $json['ErrorMsg']    = $this->errorMsg;
        }
        if (isset($this->errorNumber)) {
            $json['ErrorNumber'] = $this->errorNumber;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
