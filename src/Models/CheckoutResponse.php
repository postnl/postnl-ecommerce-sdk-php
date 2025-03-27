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

class CheckoutResponse implements \JsonSerializable
{
    /**
     * @var CheckoutDeliveryOption[]|null
     */
    private $deliveryOptions;

    /**
     * @var CheckoutPickupOption[]|null
     */
    private $pickupOptions;

    /**
     * @var CheckoutWarning[]|null
     */
    private $warnings;

    /**
     * Returns Delivery Options.
     * Array of delivery options
     *
     * @return CheckoutDeliveryOption[]|null
     */
    public function getDeliveryOptions(): ?array
    {
        return $this->deliveryOptions;
    }

    /**
     * Sets Delivery Options.
     * Array of delivery options
     *
     * @maps DeliveryOptions
     *
     * @param CheckoutDeliveryOption[]|null $deliveryOptions
     */
    public function setDeliveryOptions(?array $deliveryOptions): void
    {
        $this->deliveryOptions = $deliveryOptions;
    }

    /**
     * Returns Pickup Options.
     * Array of possible pickup options
     *
     * @return CheckoutPickupOption[]|null
     */
    public function getPickupOptions(): ?array
    {
        return $this->pickupOptions;
    }

    /**
     * Sets Pickup Options.
     * Array of possible pickup options
     *
     * @maps PickupOptions
     *
     * @param CheckoutPickupOption[]|null $pickupOptions
     */
    public function setPickupOptions(?array $pickupOptions): void
    {
        $this->pickupOptions = $pickupOptions;
    }

    /**
     * Returns Warnings.
     * An array of warnings
     *
     * @return CheckoutWarning[]|null
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * Sets Warnings.
     * An array of warnings
     *
     * @maps Warnings
     *
     * @param CheckoutWarning[]|null $warnings
     */
    public function setWarnings(?array $warnings): void
    {
        $this->warnings = $warnings;
    }

    /**
     * Converts the CheckoutResponse object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutResponse',
            [
                'deliveryOptions' => $this->deliveryOptions,
                'pickupOptions' => $this->pickupOptions,
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
        if (isset($this->deliveryOptions)) {
            $json['DeliveryOptions'] = $this->deliveryOptions;
        }
        if (isset($this->pickupOptions)) {
            $json['PickupOptions']   = $this->pickupOptions;
        }
        if (isset($this->warnings)) {
            $json['Warnings']        = $this->warnings;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
