<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CheckoutPickupAddress;

/**
 * Builder for model CheckoutPickupAddress
 *
 * @see CheckoutPickupAddress
 */
class CheckoutPickupAddressBuilder
{
    /**
     * @var CheckoutPickupAddress
     */
    private $instance;

    private function __construct(CheckoutPickupAddress $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Pickup Address Builder object.
     */
    public static function init(): self
    {
        return new self(new CheckoutPickupAddress());
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
     * Sets Zipcode field.
     *
     * @param string|null $value
     */
    public function zipcode(?string $value): self
    {
        $this->instance->setZipcode($value);
        return $this;
    }

    /**
     * Sets House Nr field.
     *
     * @param int|null $value
     */
    public function houseNr(?int $value): self
    {
        $this->instance->setHouseNr($value);
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
     * Sets Countrycode field.
     *
     * @param string|null $value
     */
    public function countrycode(?string $value): self
    {
        $this->instance->setCountrycode($value);
        return $this;
    }

    /**
     * Sets Company Name field.
     *
     * @param string|null $value
     */
    public function companyName(?string $value): self
    {
        $this->instance->setCompanyName($value);
        return $this;
    }

    /**
     * Initializes a new Checkout Pickup Address object.
     */
    public function build(): CheckoutPickupAddress
    {
        return CoreHelper::clone($this->instance);
    }
}
