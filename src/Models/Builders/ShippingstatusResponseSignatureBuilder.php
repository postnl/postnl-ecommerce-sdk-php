<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ShippingstatusResponseSignature;
use PostnlEcommerceLib\Models\Signature;
use PostnlEcommerceLib\Models\Warnings;

/**
 * Builder for model ShippingstatusResponseSignature
 *
 * @see ShippingstatusResponseSignature
 */
class ShippingstatusResponseSignatureBuilder
{
    /**
     * @var ShippingstatusResponseSignature
     */
    private $instance;

    private function __construct(ShippingstatusResponseSignature $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Shippingstatus Response Signature Builder object.
     */
    public static function init(): self
    {
        return new self(new ShippingstatusResponseSignature());
    }

    /**
     * Sets Signature field.
     *
     * @param Signature|null $value
     */
    public function signature(?Signature $value): self
    {
        $this->instance->setSignature($value);
        return $this;
    }

    /**
     * Sets Warnings field.
     *
     * @param Warnings|null $value
     */
    public function warnings(?Warnings $value): self
    {
        $this->instance->setWarnings($value);
        return $this;
    }

    /**
     * Initializes a new Shippingstatus Response Signature object.
     */
    public function build(): ShippingstatusResponseSignature
    {
        return CoreHelper::clone($this->instance);
    }
}
