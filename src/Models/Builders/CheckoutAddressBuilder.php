<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CheckoutAddress;

/**
 * Builder for model CheckoutAddress
 *
 * @see CheckoutAddress
 */
class CheckoutAddressBuilder
{
    /**
     * @var CheckoutAddress
     */
    private $instance;

    private function __construct(CheckoutAddress $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Address Builder object.
     *
     * @param string $addressType
     * @param int $houseNr
     * @param string $zipcode
     * @param string $countrycode
     */
    public static function init(string $addressType, int $houseNr, string $zipcode, string $countrycode): self
    {
        return new self(new CheckoutAddress($addressType, $houseNr, $zipcode, $countrycode));
    }

    /**
     * Sets Street field.
     *
     * @param string|null $value
     */
    public function street(?string $value): self
    {
        $this->instance->setStreet($value);
        return $this;
    }

    /**
     * Sets House Nr Ext field.
     *
     * @param string|null $value
     */
    public function houseNrExt(?string $value): self
    {
        $this->instance->setHouseNrExt($value);
        return $this;
    }

    /**
     * Sets City field.
     *
     * @param string|null $value
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Initializes a new Checkout Address object.
     */
    public function build(): CheckoutAddress
    {
        return CoreHelper::clone($this->instance);
    }
}
