<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\DeliverydateOptions;

/**
 * Builder for model DeliverydateOptions
 *
 * @see DeliverydateOptions
 */
class DeliverydateOptionsBuilder
{
    /**
     * @var DeliverydateOptions
     */
    private $instance;

    private function __construct(DeliverydateOptions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Deliverydate Options Builder object.
     */
    public static function init(): self
    {
        return new self(new DeliverydateOptions());
    }

    /**
     * Sets string field.
     *
     * @param string|null $value
     */
    public function string(?string $value): self
    {
        $this->instance->setString($value);
        return $this;
    }

    /**
     * Initializes a new Deliverydate Options object.
     */
    public function build(): DeliverydateOptions
    {
        return CoreHelper::clone($this->instance);
    }
}
