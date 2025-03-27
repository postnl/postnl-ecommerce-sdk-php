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
use PostnlEcommerceLib\Models\CheckoutTimeFrame;

/**
 * Builder for model CheckoutDeliveryOption
 *
 * @see CheckoutDeliveryOption
 */
class CheckoutDeliveryOptionBuilder
{
    /**
     * @var CheckoutDeliveryOption
     */
    private $instance;

    private function __construct(CheckoutDeliveryOption $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Delivery Option Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutDeliveryOption());
    }

    /**
     * Sets Delivery Date field.
     *
     * @param string|null $value
     */
    public function deliveryDate(?string $value): self
    {
        $this->instance->setDeliveryDate($value);
        return $this;
    }

    /**
     * Sets Timeframe field.
     *
     * @param CheckoutTimeFrame[]|null $value
     */
    public function timeframe(?array $value): self
    {
        $this->instance->setTimeframe($value);
        return $this;
    }

    /**
     * Initializes a new Checkout Delivery Option object.
     */
    public function build(): CheckoutDeliveryOption
    {
        return CoreHelper::clone($this->instance);
    }
}
