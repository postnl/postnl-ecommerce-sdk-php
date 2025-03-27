<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CheckoutWarning;

/**
 * Builder for model CheckoutWarning
 *
 * @see CheckoutWarning
 */
class CheckoutWarningBuilder
{
    /**
     * @var CheckoutWarning
     */
    private $instance;

    private function __construct(CheckoutWarning $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Warning Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutWarning());
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
     * Sets Code field.
     *
     * @param string|null $value
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets Description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets Options field.
     *
     * @param string|null $value
     */
    public function options(?string $value): self
    {
        $this->instance->setOptions($value);
        return $this;
    }

    /**
     * Initializes a new Checkout Warning object.
     */
    public function build(): CheckoutWarning
    {
        return CoreHelper::clone($this->instance);
    }
}
