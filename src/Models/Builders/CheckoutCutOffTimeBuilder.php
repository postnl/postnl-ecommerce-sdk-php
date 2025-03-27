<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CheckoutCutOffTime;

/**
 * Builder for model CheckoutCutOffTime
 *
 * @see CheckoutCutOffTime
 */
class CheckoutCutOffTimeBuilder
{
    /**
     * @var CheckoutCutOffTime
     */
    private $instance;

    private function __construct(CheckoutCutOffTime $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Cut Off Time Builder object.
     *
     * @param string $day
     */
    public static function init(string $day): self
    {
        return new self(new CheckoutCutOffTime($day));
    }

    /**
     * Sets Available field.
     *
     * @param bool|null $value
     */
    public function available(?bool $value): self
    {
        $this->instance->setAvailable($value);
        return $this;
    }

    /**
     * Sets Type field.
     *
     * @param string|null $value
     */
    public function type(?string $value): self
    {
        $this->instance->setType($value);
        return $this;
    }

    /**
     * Sets Time field.
     *
     * @param string|null $value
     */
    public function time(?string $value): self
    {
        $this->instance->setTime($value);
        return $this;
    }

    /**
     * Initializes a new Checkout Cut Off Time object.
     */
    public function build(): CheckoutCutOffTime
    {
        return CoreHelper::clone($this->instance);
    }
}
