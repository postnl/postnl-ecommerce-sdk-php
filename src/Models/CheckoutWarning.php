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

class CheckoutWarning implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $deliveryDate;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $options;

    /**
     * Returns Delivery Date.
     * Deliverydate that triggered the warning
     */
    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    /**
     * Sets Delivery Date.
     * Deliverydate that triggered the warning
     *
     * @maps DeliveryDate
     */
    public function setDeliveryDate(?string $deliveryDate): void
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * Returns Code.
     * Warning code (for a possible list of warnings, see the generic error codes page)
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Warning code (for a possible list of warnings, see the generic error codes page)
     *
     * @maps Code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Description.
     * Warning description (for a possible list of warnings, see the generic error codes page)
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Warning description (for a possible list of warnings, see the generic error codes page)
     *
     * @maps Description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Options.
     */
    public function getOptions(): ?string
    {
        return $this->options;
    }

    /**
     * Sets Options.
     *
     * @maps Options
     * @factory \PostnlEcommerceLib\Models\CheckoutWarningOptionEnum::checkValue
     */
    public function setOptions(?string $options): void
    {
        $this->options = $options;
    }

    /**
     * Converts the CheckoutWarning object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutWarning object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutWarning',
            [
                'deliveryDate' => $this->deliveryDate,
                'code' => $this->code,
                'description' => $this->description,
                'options' => $this->options
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
        if (isset($this->deliveryDate)) {
            $json['DeliveryDate'] = $this->deliveryDate;
        }
        if (isset($this->code)) {
            $json['Code']         = $this->code;
        }
        if (isset($this->description)) {
            $json['Description']  = $this->description;
        }
        if (isset($this->options)) {
            $json['Options']      = CheckoutWarningOptionEnum::checkValue($this->options);
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
