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
use PostnlEcommerceLib\Models\CheckoutPickupOption;

/**
 * Builder for model CheckoutPickupOption
 *
 * @see CheckoutPickupOption
 */
class CheckoutPickupOptionBuilder
{
    /**
     * @var CheckoutPickupOption
     */
    private $instance;

    private function __construct(CheckoutPickupOption $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Pickup Option Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutPickupOption());
    }

    /**
     * Sets Pickup Date field.
     *
     * @param string|null $value
     */
    public function pickupDate(?string $value): self
    {
        $this->instance->setPickupDate($value);
        return $this;
    }

    /**
     * Sets Shipping Date field.
     *
     * @param string|null $value
     */
    public function shippingDate(?string $value): self
    {
        $this->instance->setShippingDate($value);
        return $this;
    }

    /**
     * Sets Option field.
     *
     * @param string|null $value
     */
    public function option(?string $value): self
    {
        $this->instance->setOption($value);
        return $this;
    }

    /**
     * Sets Locations field.
     *
     * @param CheckoutLocation[]|null $value
     */
    public function locations(?array $value): self
    {
        $this->instance->setLocations($value);
        return $this;
    }

    /**
     * Initializes a new Checkout Pickup Option object.
     */
    public function build(): CheckoutPickupOption
    {
        return CoreHelper::clone($this->instance);
    }
}
