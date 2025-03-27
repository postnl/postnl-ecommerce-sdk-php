<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ShippingstatusWarning;

/**
 * Builder for model ShippingstatusWarning
 *
 * @see ShippingstatusWarning
 */
class ShippingstatusWarningBuilder
{
    /**
     * @var ShippingstatusWarning
     */
    private $instance;

    private function __construct(ShippingstatusWarning $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Shippingstatus Warning Builder object.
     */
    public static function init(): self
    {
        return new self(new ShippingstatusWarning());
    }

    /**
     * Sets Message field.
     *
     * @param string|null $value
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
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
     * Initializes a new Shippingstatus Warning object.
     */
    public function build(): ShippingstatusWarning
    {
        return CoreHelper::clone($this->instance);
    }
}
