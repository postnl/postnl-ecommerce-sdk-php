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

class DeliverydateDeliveryResponse implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $deliveryDate;

    /**
     * @var DeliverydateOptions|null
     */
    private $options;

    /**
     * @var Sustainability|null
     */
    private $sustainability;

    /**
     * Returns Delivery Date.
     */
    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    /**
     * Sets Delivery Date.
     *
     * @maps DeliveryDate
     */
    public function setDeliveryDate(?string $deliveryDate): void
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * Returns Options.
     * The delivery options for which a delivery date is returned. Only one delivery option is specified.
     * See [Delivery Options](https://developer.postnl.nl/docs/#/http/reference-data/reference-
     * codes/delivery-options) for possible values.
     */
    public function getOptions(): ?DeliverydateOptions
    {
        return $this->options;
    }

    /**
     * Sets Options.
     * The delivery options for which a delivery date is returned. Only one delivery option is specified.
     * See [Delivery Options](https://developer.postnl.nl/docs/#/http/reference-data/reference-
     * codes/delivery-options) for possible values.
     *
     * @maps Options
     */
    public function setOptions(?DeliverydateOptions $options): void
    {
        $this->options = $options;
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
     * Converts the DeliverydateDeliveryResponse object to a human-readable string representation.
     *
     * @return string The string representation of the DeliverydateDeliveryResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'DeliverydateDeliveryResponse',
            [
                'deliveryDate' => $this->deliveryDate,
                'options' => $this->options,
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
        if (isset($this->deliveryDate)) {
            $json['DeliveryDate']   = $this->deliveryDate;
        }
        if (isset($this->options)) {
            $json['Options']        = $this->options;
        }
        if (isset($this->sustainability)) {
            $json['Sustainability'] = $this->sustainability;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
