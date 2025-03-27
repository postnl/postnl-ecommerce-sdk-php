<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ShippingstatusProductOption;

/**
 * Builder for model ShippingstatusProductOption
 *
 * @see ShippingstatusProductOption
 */
class ShippingstatusProductOptionBuilder
{
    /**
     * @var ShippingstatusProductOption
     */
    private $instance;

    private function __construct(ShippingstatusProductOption $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Shippingstatus Product Option Builder object.
     */
    public static function init(): self
    {
        return new self(new ShippingstatusProductOption());
    }

    /**
     * Sets Option Code field.
     *
     * @param string|null $value
     */
    public function optionCode(?string $value): self
    {
        $this->instance->setOptionCode($value);
        return $this;
    }

    /**
     * Sets Characteristic Code field.
     *
     * @param string|null $value
     */
    public function characteristicCode(?string $value): self
    {
        $this->instance->setCharacteristicCode($value);
        return $this;
    }

    /**
     * Initializes a new Shippingstatus Product Option object.
     */
    public function build(): ShippingstatusProductOption
    {
        return CoreHelper::clone($this->instance);
    }
}
