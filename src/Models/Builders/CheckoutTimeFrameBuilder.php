<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CheckoutTimeFrame;
use PostnlEcommerceLib\Models\Sustainability;

/**
 * Builder for model CheckoutTimeFrame
 *
 * @see CheckoutTimeFrame
 */
class CheckoutTimeFrameBuilder
{
    /**
     * @var CheckoutTimeFrame
     */
    private $instance;

    private function __construct(CheckoutTimeFrame $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Time Frame Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutTimeFrame());
    }

    /**
     * Sets From field.
     *
     * @param string|null $value
     */
    public function from(?string $value): self
    {
        $this->instance->setFrom($value);
        return $this;
    }

    /**
     * Sets To field.
     *
     * @param string|null $value
     */
    public function to(?string $value): self
    {
        $this->instance->setTo($value);
        return $this;
    }

    /**
     * Sets Options field.
     *
     * @param string[]|null $value
     */
    public function options(?array $value): self
    {
        $this->instance->setOptions($value);
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
     * Initializes a new Checkout Time Frame object.
     */
    public function build(): CheckoutTimeFrame
    {
        return CoreHelper::clone($this->instance);
    }
}
