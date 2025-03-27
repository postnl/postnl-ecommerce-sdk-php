<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CompleteStatus;
use PostnlEcommerceLib\Models\CurrentStatus;
use PostnlEcommerceLib\Models\ShippingstatusResponse;
use PostnlEcommerceLib\Models\ShippingstatusWarning;

/**
 * Builder for model ShippingstatusResponse
 *
 * @see ShippingstatusResponse
 */
class ShippingstatusResponseBuilder
{
    /**
     * @var ShippingstatusResponse
     */
    private $instance;

    private function __construct(ShippingstatusResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Shippingstatus Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ShippingstatusResponse());
    }

    /**
     * Sets Complete Status field.
     *
     * @param CompleteStatus|null $value
     */
    public function completeStatus(?CompleteStatus $value): self
    {
        $this->instance->setCompleteStatus($value);
        return $this;
    }

    /**
     * Sets Current Status field.
     *
     * @param CurrentStatus|null $value
     */
    public function currentStatus(?CurrentStatus $value): self
    {
        $this->instance->setCurrentStatus($value);
        return $this;
    }

    /**
     * Sets Warnings field.
     *
     * @param ShippingstatusWarning[]|null $value
     */
    public function warnings(?array $value): self
    {
        $this->instance->setWarnings($value);
        return $this;
    }

    /**
     * Initializes a new Shippingstatus Response object.
     */
    public function build(): ShippingstatusResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
