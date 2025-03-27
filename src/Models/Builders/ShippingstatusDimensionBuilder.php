<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ShippingstatusDimension;

/**
 * Builder for model ShippingstatusDimension
 *
 * @see ShippingstatusDimension
 */
class ShippingstatusDimensionBuilder
{
    /**
     * @var ShippingstatusDimension
     */
    private $instance;

    private function __construct(ShippingstatusDimension $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Shippingstatus Dimension Builder object.
     */
    public static function init(): self
    {
        return new self(new ShippingstatusDimension());
    }

    /**
     * Sets Weight field.
     *
     * @param string|null $value
     */
    public function weight(?string $value): self
    {
        $this->instance->setWeight($value);
        return $this;
    }

    /**
     * Sets Height field.
     *
     * @param string|null $value
     */
    public function height(?string $value): self
    {
        $this->instance->setHeight($value);
        return $this;
    }

    /**
     * Sets Length field.
     *
     * @param string|null $value
     */
    public function length(?string $value): self
    {
        $this->instance->setLength($value);
        return $this;
    }

    /**
     * Sets Width field.
     *
     * @param string|null $value
     */
    public function width(?string $value): self
    {
        $this->instance->setWidth($value);
        return $this;
    }

    /**
     * Sets Volume field.
     *
     * @param string|null $value
     */
    public function volume(?string $value): self
    {
        $this->instance->setVolume($value);
        return $this;
    }

    /**
     * Initializes a new Shippingstatus Dimension object.
     */
    public function build(): ShippingstatusDimension
    {
        return CoreHelper::clone($this->instance);
    }
}
