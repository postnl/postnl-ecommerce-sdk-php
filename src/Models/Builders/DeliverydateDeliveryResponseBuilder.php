<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\DeliverydateDeliveryResponse;
use PostnlEcommerceLib\Models\DeliverydateOptions;
use PostnlEcommerceLib\Models\Sustainability;

/**
 * Builder for model DeliverydateDeliveryResponse
 *
 * @see DeliverydateDeliveryResponse
 */
class DeliverydateDeliveryResponseBuilder
{
    /**
     * @var DeliverydateDeliveryResponse
     */
    private $instance;

    private function __construct(DeliverydateDeliveryResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Deliverydate Delivery Response Builder object.
     */
    public static function init(): self
    {
        return new self(new DeliverydateDeliveryResponse());
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
     * Sets Options field.
     *
     * @param DeliverydateOptions|null $value
     */
    public function options(?DeliverydateOptions $value): self
    {
        $this->instance->setOptions($value);
        return $this;
    }

    /**
     * Sets Sustainability field.
     *
     * @param Sustainability|null $value
     */
    public function sustainability(?Sustainability $value): self
    {
        $this->instance->setSustainability($value);
        return $this;
    }

    /**
     * Initializes a new Deliverydate Delivery Response object.
     */
    public function build(): DeliverydateDeliveryResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
