<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ShippingstatusAmount;

/**
 * Builder for model ShippingstatusAmount
 *
 * @see ShippingstatusAmount
 */
class ShippingstatusAmountBuilder
{
    /**
     * @var ShippingstatusAmount
     */
    private $instance;

    private function __construct(ShippingstatusAmount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Shippingstatus Amount Builder object.
     */
    public static function init(): self
    {
        return new self(new ShippingstatusAmount());
    }

    /**
     * Sets Rembours Bedrag field.
     *
     * @param string|null $value
     */
    public function remboursBedrag(?string $value): self
    {
        $this->instance->setRemboursBedrag($value);
        return $this;
    }

    /**
     * Sets Verzekerd Bedrag field.
     *
     * @param string|null $value
     */
    public function verzekerdBedrag(?string $value): self
    {
        $this->instance->setVerzekerdBedrag($value);
        return $this;
    }

    /**
     * Initializes a new Shippingstatus Amount object.
     */
    public function build(): ShippingstatusAmount
    {
        return CoreHelper::clone($this->instance);
    }
}
