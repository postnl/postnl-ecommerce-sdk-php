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

class CheckoutDeliveryOption implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $deliveryDate;

    /**
     * @var CheckoutTimeFrame[]|null
     */
    private $timeframe;

    /**
     * Returns Delivery Date.
     * The possible delivery date
     */
    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    /**
     * Sets Delivery Date.
     * The possible delivery date
     *
     * @maps DeliveryDate
     */
    public function setDeliveryDate(?string $deliveryDate): void
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * Returns Timeframe.
     * Array of timeframes
     *
     * @return CheckoutTimeFrame[]|null
     */
    public function getTimeframe(): ?array
    {
        return $this->timeframe;
    }

    /**
     * Sets Timeframe.
     * Array of timeframes
     *
     * @maps Timeframe
     *
     * @param CheckoutTimeFrame[]|null $timeframe
     */
    public function setTimeframe(?array $timeframe): void
    {
        $this->timeframe = $timeframe;
    }

    /**
     * Converts the CheckoutDeliveryOption object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutDeliveryOption object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutDeliveryOption',
            ['deliveryDate' => $this->deliveryDate, 'timeframe' => $this->timeframe]
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
        if (isset($this->timeframe)) {
            $json['Timeframe']    = $this->timeframe;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
