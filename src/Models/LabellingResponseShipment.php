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

class LabellingResponseShipment implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $productCodeDelivery;

    /**
     * @var LabellingLabel[]|null
     */
    private $labels;

    /**
     * @var string|null
     */
    private $barcode;

    /**
     * @var array[]|null
     */
    private $errors;

    /**
     * @var Warning[]|null
     */
    private $warnings;

    /**
     * Returns Product Code Delivery.
     * The product code of the shipment
     */
    public function getProductCodeDelivery(): ?string
    {
        return $this->productCodeDelivery;
    }

    /**
     * Sets Product Code Delivery.
     * The product code of the shipment
     *
     * @maps ProductCodeDelivery
     */
    public function setProductCodeDelivery(?string $productCodeDelivery): void
    {
        $this->productCodeDelivery = $productCodeDelivery;
    }

    /**
     * Returns Labels.
     * All labels belonging to the selected product
     *
     * @return LabellingLabel[]|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * Sets Labels.
     * All labels belonging to the selected product
     *
     * @maps Labels
     *
     * @param LabellingLabel[]|null $labels
     */
    public function setLabels(?array $labels): void
    {
        $this->labels = $labels;
    }

    /**
     * Returns Barcode.
     * The barcode used on the label
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * Sets Barcode.
     * The barcode used on the label
     *
     * @maps Barcode
     */
    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * Returns Errors.
     *
     * @return array[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps Errors
     *
     * @param array[]|null $errors
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
     * Converts the LabellingResponseShipment object to a human-readable string representation.
     *
     * @return string The string representation of the LabellingResponseShipment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LabellingResponseShipment',
            [
                'productCodeDelivery' => $this->productCodeDelivery,
                'labels' => $this->labels,
                'barcode' => $this->barcode,
                'errors' => $this->errors,
                'warnings' => $this->warnings
            ]
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
        if (isset($this->productCodeDelivery)) {
            $json['ProductCodeDelivery'] = $this->productCodeDelivery;
        }
        if (isset($this->labels)) {
            $json['Labels']              = $this->labels;
        }
        if (isset($this->barcode)) {
            $json['Barcode']             = $this->barcode;
        }
        if (isset($this->errors)) {
            $json['Errors']              = $this->errors;
        }
        if (isset($this->warnings)) {
            $json['Warnings']            = $this->warnings;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
