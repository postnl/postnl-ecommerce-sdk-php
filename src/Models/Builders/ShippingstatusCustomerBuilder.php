<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ShippingstatusCustomer;

/**
 * Builder for model ShippingstatusCustomer
 *
 * @see ShippingstatusCustomer
 */
class ShippingstatusCustomerBuilder
{
    /**
     * @var ShippingstatusCustomer
     */
    private $instance;

    private function __construct(ShippingstatusCustomer $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Shippingstatus Customer Builder object.
     */
    public static function init(): self
    {
        return new self(new ShippingstatusCustomer());
    }

    /**
     * Sets Customer Code field.
     *
     * @param string|null $value
     */
    public function customerCode(?string $value): self
    {
        $this->instance->setCustomerCode($value);
        return $this;
    }

    /**
     * Sets Customer Number field.
     *
     * @param string|null $value
     */
    public function customerNumber(?string $value): self
    {
        $this->instance->setCustomerNumber($value);
        return $this;
    }

    /**
     * Sets Name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Initializes a new Shippingstatus Customer object.
     */
    public function build(): ShippingstatusCustomer
    {
        return CoreHelper::clone($this->instance);
    }
}
