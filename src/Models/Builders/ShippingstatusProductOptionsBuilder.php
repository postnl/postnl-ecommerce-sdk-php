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
use PostnlEcommerceLib\Models\ShippingstatusProductOptions;

/**
 * Builder for model ShippingstatusProductOptions
 *
 * @see ShippingstatusProductOptions
 */
class ShippingstatusProductOptionsBuilder
{
    /**
     * @var ShippingstatusProductOptions
     */
    private $instance;

    private function __construct(ShippingstatusProductOptions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Shippingstatus Product Options Builder object.
     */
    public static function init(): self
    {
        return new self(new ShippingstatusProductOptions());
    }

    /**
     * Sets Product Option field.
     *
     * @param ShippingstatusProductOption|null $value
     */
    public function productOption(?ShippingstatusProductOption $value): self
    {
        $this->instance->setProductOption($value);
        return $this;
    }

    /**
     * Initializes a new Shippingstatus Product Options object.
     */
    public function build(): ShippingstatusProductOptions
    {
        return CoreHelper::clone($this->instance);
    }
}
