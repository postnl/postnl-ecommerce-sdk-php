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

class CheckoutPickupOption implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $pickupDate;

    /**
     * @var string|null
     */
    private $shippingDate;

    /**
     * @var string|null
     */
    private $option;

    /**
     * @var CheckoutLocation[]|null
     */
    private $locations;

    /**
     * Returns Pickup Date.
     * Date from which the parcel can be picked up at the PostNL location
     */
    public function getPickupDate(): ?string
    {
        return $this->pickupDate;
    }

    /**
     * Sets Pickup Date.
     * Date from which the parcel can be picked up at the PostNL location
     *
     * @maps PickupDate
     */
    public function setPickupDate(?string $pickupDate): void
    {
        $this->pickupDate = $pickupDate;
    }

    /**
     * Returns Shipping Date.
     * The date when you need to deliver the shipment to PostNL to ensure the expected delivery date is
     * achieved. Will be returned as 'null' if not calculated
     */
    public function getShippingDate(): ?string
    {
        return $this->shippingDate;
    }

    /**
     * Sets Shipping Date.
     * The date when you need to deliver the shipment to PostNL to ensure the expected delivery date is
     * achieved. Will be returned as 'null' if not calculated
     *
     * @maps ShippingDate
     */
    public function setShippingDate(?string $shippingDate): void
    {
        $this->shippingDate = $shippingDate;
    }

    /**
     * Returns Option.
     * The pickup option
     */
    public function getOption(): ?string
    {
        return $this->option;
    }

    /**
     * Sets Option.
     * The pickup option
     *
     * @maps Option
     */
    public function setOption(?string $option): void
    {
        $this->option = $option;
    }

    /**
     * Returns Locations.
     * Array of pickup locations
     *
     * @return CheckoutLocation[]|null
     */
    public function getLocations(): ?array
    {
        return $this->locations;
    }

    /**
     * Sets Locations.
     * Array of pickup locations
     *
     * @maps Locations
     *
     * @param CheckoutLocation[]|null $locations
     */
    public function setLocations(?array $locations): void
    {
        $this->locations = $locations;
    }

    /**
     * Converts the CheckoutPickupOption object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutPickupOption object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutPickupOption',
            [
                'pickupDate' => $this->pickupDate,
                'shippingDate' => $this->shippingDate,
                'option' => $this->option,
                'locations' => $this->locations
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
        if (isset($this->pickupDate)) {
            $json['PickupDate']   = $this->pickupDate;
        }
        if (isset($this->shippingDate)) {
            $json['ShippingDate'] = $this->shippingDate;
        }
        if (isset($this->option)) {
            $json['Option']       = $this->option;
        }
        if (isset($this->locations)) {
            $json['Locations']    = $this->locations;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
