<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CheckoutLocation;
use PostnlEcommerceLib\Models\CheckoutPickupAddress;
use PostnlEcommerceLib\Models\OpeningHours;
use PostnlEcommerceLib\Models\Sustainability;

/**
 * Builder for model CheckoutLocation
 *
 * @see CheckoutLocation
 */
class CheckoutLocationBuilder
{
    /**
     * @var CheckoutLocation
     */
    private $instance;

    private function __construct(CheckoutLocation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Location Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutLocation());
    }

    /**
     * Sets Address field.
     *
     * @param CheckoutPickupAddress|null $value
     */
    public function address(?CheckoutPickupAddress $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets Pickup Time field.
     *
     * @param string|null $value
     */
    public function pickupTime(?string $value): self
    {
        $this->instance->setPickupTime($value);
        return $this;
    }

    /**
     * Sets Opening Hours field.
     *
     * @param OpeningHours|null $value
     */
    public function openingHours(?OpeningHours $value): self
    {
        $this->instance->setOpeningHours($value);
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
     * Sets Location Code field.
     *
     * @param string|null $value
     */
    public function locationCode(?string $value): self
    {
        $this->instance->setLocationCode($value);
        return $this;
    }

    /**
     * Sets Partner ID field.
     *
     * @param string|null $value
     */
    public function partnerID(?string $value): self
    {
        $this->instance->setPartnerID($value);
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
     * Initializes a new Checkout Location object.
     */
    public function build(): CheckoutLocation
    {
        return CoreHelper::clone($this->instance);
    }
}
