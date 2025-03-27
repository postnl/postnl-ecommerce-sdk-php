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

class ConfirmingResponseShipment implements \JsonSerializable
{
    /**
     * @var ConfirmingError[]|null
     */
    private $errors;

    /**
     * @var Warning[]|null
     */
    private $warnings;

    /**
     * @var string|null
     */
    private $barcode;

    /**
     * Returns Errors.
     * Possible errors. See the [Error Codes](https://developer.postnl.nl/docs/#/http/reference-data/error-
     * codes) for possible values
     *
     * @return ConfirmingError[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * Possible errors. See the [Error Codes](https://developer.postnl.nl/docs/#/http/reference-data/error-
     * codes) for possible values
     *
     * @maps Errors
     *
     * @param ConfirmingError[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Returns Warnings.
     * Possible warnings. See the [Error Codes](https://developer.postnl.nl/docs/#/http/reference-
     * data/error-codes) for possible values
     *
     * @return Warning[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * Sets Warnings.
     * Possible warnings. See the [Error Codes](https://developer.postnl.nl/docs/#/http/reference-
     * data/error-codes) for possible values
     *
     * @maps Warnings
     *
     * @param Warning[]|null $warnings
     */
    public function setWarnings(?array $warnings): void
    {
        $this->warnings = $warnings;
    }

    /**
     * Returns Barcode.
     * The barcode used
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * Sets Barcode.
     * The barcode used
     *
     * @maps Barcode
     */
    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * Converts the ConfirmingResponseShipment object to a human-readable string representation.
     *
     * @return string The string representation of the ConfirmingResponseShipment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ConfirmingResponseShipment',
            ['errors' => $this->errors, 'warnings' => $this->warnings, 'barcode' => $this->barcode]
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
        if (isset($this->errors)) {
            $json['Errors']   = $this->errors;
        }
        if (isset($this->warnings)) {
            $json['Warnings'] = $this->warnings;
        }
        if (isset($this->barcode)) {
            $json['Barcode']  = $this->barcode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
