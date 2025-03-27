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
use PostnlEcommerceLib\Models\Warnings;

/**
 * Builder for model Warnings
 *
 * @see Warnings
 */
class WarningsBuilder
{
    /**
     * @var Warnings
     */
    private $instance;

    private function __construct(Warnings $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Warnings Builder object.
     */
    public static function init(): self
    {
        return new self(new Warnings());
    }

    /**
     * Sets Warning field.
     *
     * @param ShippingstatusWarning|null $value
     */
    public function warning(?ShippingstatusWarning $value): self
    {
        $this->instance->setWarning($value);
        return $this;
    }

    /**
     * Initializes a new Warnings object.
     */
    public function build(): Warnings
    {
        return CoreHelper::clone($this->instance);
    }
}
