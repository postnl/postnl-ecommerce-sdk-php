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

/**
 * Builder for model DeliveryOptions
 *
 * @see DeliveryOptions
 */
class DeliveryOptionsBuilder
{
    /**
     * @var DeliveryOptions
     */
    private $instance;

    private function __construct(DeliveryOptions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Delivery Options Builder object.
     */
    public static function init(): self
    {
        return new self(new DeliveryOptions());
    }

    /**
     * Sets string field.
     *
     * @param string[]|null $value
     */
    public function string(?array $value): self
    {
        $this->instance->setString($value);
        return $this;
    }

    /**
     * Initializes a new Delivery Options object.
     */
    public function build(): DeliveryOptions
    {
        return CoreHelper::clone($this->instance);
    }
}
