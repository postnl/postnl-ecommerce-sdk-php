<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Detail;
use PostnlEcommerceLib\Models\FaultShippingStatusAPI;

/**
 * Builder for model FaultShippingStatusAPI
 *
 * @see FaultShippingStatusAPI
 */
class FaultShippingStatusAPIBuilder
{
    /**
     * @var FaultShippingStatusAPI
     */
    private $instance;

    private function __construct(FaultShippingStatusAPI $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Fault Shipping Status API Builder object.
     */
    public static function init(): self
    {
        return new self(new FaultShippingStatusAPI());
    }

    /**
     * Sets faultstring field.
     *
     * @param string|null $value
     */
    public function faultstring(?string $value): self
    {
        $this->instance->setFaultstring($value);
        return $this;
    }

    /**
     * Sets detail field.
     *
     * @param Detail|null $value
     */
    public function detail(?Detail $value): self
    {
        $this->instance->setDetail($value);
        return $this;
    }

    /**
     * Initializes a new Fault Shipping Status API object.
     */
    public function build(): FaultShippingStatusAPI
    {
        return CoreHelper::clone($this->instance);
    }
}
