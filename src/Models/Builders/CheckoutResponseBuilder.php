<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CheckoutDeliveryOption;
use PostnlEcommerceLib\Models\CheckoutPickupOption;
use PostnlEcommerceLib\Models\CheckoutResponse;
use PostnlEcommerceLib\Models\CheckoutWarning;

/**
 * Builder for model CheckoutResponse
 *
 * @see CheckoutResponse
 */
class CheckoutResponseBuilder
{
    /**
     * @var CheckoutResponse
     */
    private $instance;

    private function __construct(CheckoutResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Response Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutResponse());
    }

    /**
     * Sets Delivery Options field.
     *
     * @param CheckoutDeliveryOption[]|null $value
     */
    public function deliveryOptions(?array $value): self
    {
        $this->instance->setDeliveryOptions($value);
        return $this;
    }

    /**
     * Sets Pickup Options field.
     *
     * @param CheckoutPickupOption[]|null $value
     */
    public function pickupOptions(?array $value): self
    {
        $this->instance->setPickupOptions($value);
        return $this;
    }

    /**
     * Sets Warnings field.
     *
     * @param CheckoutWarning[]|null $value
     */
    public function warnings(?array $value): self
    {
        $this->instance->setWarnings($value);
        return $this;
    }

    /**
     * Initializes a new Checkout Response object.
     */
    public function build(): CheckoutResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
