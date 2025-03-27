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

class CheckoutTimeFrame implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $from;

    /**
     * @var string|null
     */
    private $to;

    /**
     * @var string[]|null
     */
    private $options;

    /**
     * @var string|null
     */
    private $shippingDate;

    /**
     * @var Sustainability|null
     */
    private $sustainability;

    /**
     * Returns From.
     * Format hh:mm:ss
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * Sets From.
     * Format hh:mm:ss
     *
     * @maps From
     */
    public function setFrom(?string $from): void
    {
        $this->from = $from;
    }

    /**
     * Returns To.
     * Format hh:mm:ss
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * Sets To.
     * Format hh:mm:ss
     *
     * @maps To
     */
    public function setTo(?string $to): void
    {
        $this->to = $to;
    }

    /**
     * Returns Options.
     * The delivery options applicable to the timeframe information. See [Delivery Options](https:
     * //developer.postnl.nl/docs/#/http/reference-data/reference-codes/delivery-options) for possible
     * values.
     *
     * @return string[]|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
    }

    /**
     * Sets Options.
     * The delivery options applicable to the timeframe information. See [Delivery Options](https:
     * //developer.postnl.nl/docs/#/http/reference-data/reference-codes/delivery-options) for possible
     * values.
     *
     * @maps Options
     * @factory \PostnlEcommerceLib\Models\CheckoutOptionEnum::checkValue
     *
     * @param string[]|null $options
     */
    public function setOptions(?array $options): void
    {
        $this->options = $options;
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
     * Returns Sustainability.
     * Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-
     * data/reference-codes/sustainability-codes) for possible values.
     */
    public function getSustainability(): ?Sustainability
    {
        return $this->sustainability;
    }

    /**
     * Sets Sustainability.
     * Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-
     * data/reference-codes/sustainability-codes) for possible values.
     *
     * @maps Sustainability
     */
    public function setSustainability(?Sustainability $sustainability): void
    {
        $this->sustainability = $sustainability;
    }

    /**
     * Converts the CheckoutTimeFrame object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutTimeFrame object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutTimeFrame',
            [
                'from' => $this->from,
                'to' => $this->to,
                'options' => $this->options,
                'shippingDate' => $this->shippingDate,
                'sustainability' => $this->sustainability
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
        if (isset($this->from)) {
            $json['From']           = $this->from;
        }
        if (isset($this->to)) {
            $json['To']             = $this->to;
        }
        if (isset($this->options)) {
            $json['Options']        = CheckoutOptionEnum::checkValue($this->options);
        }
        if (isset($this->shippingDate)) {
            $json['ShippingDate']   = $this->shippingDate;
        }
        if (isset($this->sustainability)) {
            $json['Sustainability'] = $this->sustainability;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
