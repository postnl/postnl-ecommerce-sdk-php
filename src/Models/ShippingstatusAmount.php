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

/**
 * The amounts belonging to the shipment
 */
class ShippingstatusAmount implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $remboursBedrag;

    /**
     * @var string|null
     */
    private $verzekerdBedrag;

    /**
     * Returns Rembours Bedrag.
     * The cash-on-delivery (COD) amount
     */
    public function getRemboursBedrag(): ?string
    {
        return $this->remboursBedrag;
    }

    /**
     * Sets Rembours Bedrag.
     * The cash-on-delivery (COD) amount
     *
     * @maps RemboursBedrag
     */
    public function setRemboursBedrag(?string $remboursBedrag): void
    {
        $this->remboursBedrag = $remboursBedrag;
    }

    /**
     * Returns Verzekerd Bedrag.
     * The insurance amount of the shipment
     */
    public function getVerzekerdBedrag(): ?string
    {
        return $this->verzekerdBedrag;
    }

    /**
     * Sets Verzekerd Bedrag.
     * The insurance amount of the shipment
     *
     * @maps VerzekerdBedrag
     */
    public function setVerzekerdBedrag(?string $verzekerdBedrag): void
    {
        $this->verzekerdBedrag = $verzekerdBedrag;
    }

    /**
     * Converts the ShippingstatusAmount object to a human-readable string representation.
     *
     * @return string The string representation of the ShippingstatusAmount object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ShippingstatusAmount',
            ['remboursBedrag' => $this->remboursBedrag, 'verzekerdBedrag' => $this->verzekerdBedrag]
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
        if (isset($this->remboursBedrag)) {
            $json['RemboursBedrag']  = $this->remboursBedrag;
        }
        if (isset($this->verzekerdBedrag)) {
            $json['VerzekerdBedrag'] = $this->verzekerdBedrag;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
