<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\DeliveryOptions;
use PostnlEcommerceLib\Models\Location;
use PostnlEcommerceLib\Models\LocationsAddress;
use PostnlEcommerceLib\Models\LocationsOpeningHours;
use PostnlEcommerceLib\Models\Sustainability;

/**
 * Builder for model Location
 *
 * @see Location
 */
class LocationBuilder
{
    /**
     * @var Location
     */
    private $instance;

    private function __construct(Location $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Location Builder object.
     */
    public static function init(): self
    {
        return new self(new Location());
    }

    /**
     * Sets Address field.
     *
     * @param LocationsAddress|null $value
     */
    public function address(?LocationsAddress $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets Delivery Options field.
     *
     * @param DeliveryOptions|null $value
     */
    public function deliveryOptions(?DeliveryOptions $value): self
    {
        $this->instance->setDeliveryOptions($value);
        return $this;
    }

    /**
     * Sets Distance field.
     *
     * @param int|null $value
     */
    public function distance(?int $value): self
    {
        $this->instance->setDistance($value);
        return $this;
    }

    /**
     * Sets Latitude field.
     *
     * @param float|null $value
     */
    public function latitude(?float $value): self
    {
        $this->instance->setLatitude($value);
        return $this;
    }

    /**
     * Sets Location Code field.
     *
     * @param int|null $value
     */
    public function locationCode(?int $value): self
    {
        $this->instance->setLocationCode($value);
        return $this;
    }

    /**
     * Sets Longitude field.
     *
     * @param float|null $value
     */
    public function longitude(?float $value): self
    {
        $this->instance->setLongitude($value);
        return $this;
    }

    /**
     * Sets Name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets Opening Hours field.
     *
     * @param LocationsOpeningHours|null $value
     */
    public function openingHours(?LocationsOpeningHours $value): self
    {
        $this->instance->setOpeningHours($value);
        return $this;
    }

    /**
     * Sets Sustainability field.
     *
     * @param Sustainability|null $value
     */
    public function sustainability(?Sustainability $value): self
    {
        $this->instance->setSustainability($value);
        return $this;
    }

    /**
     * Sets Partner Name field.
     *
     * @param string|null $value
     */
    public function partnerName(?string $value): self
    {
        $this->instance->setPartnerName($value);
        return $this;
    }

    /**
     * Sets Retail Network ID field.
     *
     * @param string|null $value
     */
    public function retailNetworkID(?string $value): self
    {
        $this->instance->setRetailNetworkID($value);
        return $this;
    }

    /**
     * Initializes a new Location object.
     */
    public function build(): Location
    {
        return CoreHelper::clone($this->instance);
    }
}
