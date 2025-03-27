<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\DeliverydateShippingResponse;

/**
 * Builder for model DeliverydateShippingResponse
 *
 * @see DeliverydateShippingResponse
 */
class DeliverydateShippingResponseBuilder
{
    /**
     * @var DeliverydateShippingResponse
     */
    private $instance;

    private function __construct(DeliverydateShippingResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Deliverydate Shipping Response Builder object.
     */
    public static function init(): self
    {
        return new self(new DeliverydateShippingResponse());
    }

    /**
     * Sets Sent Date field.
     *
     * @param string|null $value
     */
    public function sentDate(?string $value): self
    {
        $this->instance->setSentDate($value);
        return $this;
    }

    /**
     * Initializes a new Deliverydate Shipping Response object.
     */
    public function build(): DeliverydateShippingResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
