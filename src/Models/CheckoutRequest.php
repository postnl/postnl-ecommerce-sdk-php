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

class CheckoutRequest implements \JsonSerializable
{
    /**
     * @var string
     */
    private $orderDate;

    /**
     * @var int|null
     */
    private $shippingDuration;

    /**
     * @var CheckoutCutOffTime[]
     */
    private $cutOffTimes;

    /**
     * @var bool|null
     */
    private $holidaySorting;

    /**
     * @var string[]
     */
    private $options;

    /**
     * @var int
     */
    private $locations;

    /**
     * @var int
     */
    private $days;

    /**
     * @var CheckoutAddress[]
     */
    private $addresses;

    /**
     * @param string $orderDate
     * @param CheckoutCutOffTime[] $cutOffTimes
     * @param string[] $options
     * @param int $locations
     * @param int $days
     * @param CheckoutAddress[] $addresses
     */
    public function __construct(
        string $orderDate,
        array $cutOffTimes,
        array $options,
        int $locations,
        int $days,
        array $addresses
    ) {
        $this->orderDate = $orderDate;
        $this->cutOffTimes = $cutOffTimes;
        $this->options = $options;
        $this->locations = $locations;
        $this->days = $days;
        $this->addresses = $addresses;
    }

    /**
     * Returns Order Date.
     * The order date of the shipment. Format dd-MM-YYYY HH:mm:ss
     */
    public function getOrderDate(): string
    {
        return $this->orderDate;
    }

    /**
     * Sets Order Date.
     * The order date of the shipment. Format dd-MM-YYYY HH:mm:ss
     *
     * @required
     * @maps OrderDate
     */
    public function setOrderDate(string $orderDate): void
    {
        $this->orderDate = $orderDate;
    }

    /**
     * Returns Shipping Duration.
     * The amount of days it takes for a parcel to be received by PostN. If you delivery the parcel the
     * same day as the order is placed on the webshop, please use the value of 1. A value of 2 means the
     * parcel will arrive at PostNL a day later etc.
     */
    public function getShippingDuration(): ?int
    {
        return $this->shippingDuration;
    }

    /**
     * Sets Shipping Duration.
     * The amount of days it takes for a parcel to be received by PostN. If you delivery the parcel the
     * same day as the order is placed on the webshop, please use the value of 1. A value of 2 means the
     * parcel will arrive at PostNL a day later etc.
     *
     * @maps ShippingDuration
     */
    public function setShippingDuration(?int $shippingDuration): void
    {
        $this->shippingDuration = $shippingDuration;
    }

    /**
     * Returns Cut Off Times.
     * Array of CutOffTimes
     *
     * @return CheckoutCutOffTime[]
     */
    public function getCutOffTimes(): array
    {
        return $this->cutOffTimes;
    }

    /**
     * Sets Cut Off Times.
     * Array of CutOffTimes
     *
     * @required
     * @maps CutOffTimes
     *
     * @param CheckoutCutOffTime[] $cutOffTimes
     */
    public function setCutOffTimes(array $cutOffTimes): void
    {
        $this->cutOffTimes = $cutOffTimes;
    }

    /**
     * Returns Holiday Sorting.
     * Specifies whether you are available to ship parcels to PostNL during holidays
     */
    public function getHolidaySorting(): ?bool
    {
        return $this->holidaySorting;
    }

    /**
     * Sets Holiday Sorting.
     * Specifies whether you are available to ship parcels to PostNL during holidays
     *
     * @maps HolidaySorting
     */
    public function setHolidaySorting(?bool $holidaySorting): void
    {
        $this->holidaySorting = $holidaySorting;
    }

    /**
     * Returns Options.
     * Specifies the delivery and pickup options.
     *
     * @return string[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * Sets Options.
     * Specifies the delivery and pickup options.
     *
     * @required
     * @maps Options
     * @factory \PostnlEcommerceLib\Models\CheckoutOptionEnum::checkValue
     *
     * @param string[] $options
     */
    public function setOptions(array $options): void
    {
        $this->options = $options;
    }

    /**
     * Returns Locations.
     * Specifies the number of locations you want returned. This can be a value of 1-3
     */
    public function getLocations(): int
    {
        return $this->locations;
    }

    /**
     * Sets Locations.
     * Specifies the number of locations you want returned. This can be a value of 1-3
     *
     * @required
     * @maps Locations
     */
    public function setLocations(int $locations): void
    {
        $this->locations = $locations;
    }

    /**
     * Returns Days.
     * Specifies the number of days for which the timeframes are returned. This can be a value of 1-9
     */
    public function getDays(): int
    {
        return $this->days;
    }

    /**
     * Sets Days.
     * Specifies the number of days for which the timeframes are returned. This can be a value of 1-9
     *
     * @required
     * @maps Days
     */
    public function setDays(int $days): void
    {
        $this->days = $days;
    }

    /**
     * Returns Addresses.
     * Array of addresses
     *
     * @return CheckoutAddress[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * Sets Addresses.
     * Array of addresses
     *
     * @required
     * @maps Addresses
     *
     * @param CheckoutAddress[] $addresses
     */
    public function setAddresses(array $addresses): void
    {
        $this->addresses = $addresses;
    }

    /**
     * Converts the CheckoutRequest object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutRequest',
            [
                'orderDate' => $this->orderDate,
                'shippingDuration' => $this->shippingDuration,
                'cutOffTimes' => $this->cutOffTimes,
                'holidaySorting' => $this->holidaySorting,
                'options' => $this->options,
                'locations' => $this->locations,
                'days' => $this->days,
                'addresses' => $this->addresses
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
        $json['OrderDate']            = $this->orderDate;
        if (isset($this->shippingDuration)) {
            $json['ShippingDuration'] = $this->shippingDuration;
        }
        $json['CutOffTimes']          = $this->cutOffTimes;
        if (isset($this->holidaySorting)) {
            $json['HolidaySorting']   = $this->holidaySorting;
        }
        $json['Options']              = CheckoutOptionEnum::checkValue($this->options);
        $json['Locations']            = $this->locations;
        $json['Days']                 = $this->days;
        $json['Addresses']            = $this->addresses;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
