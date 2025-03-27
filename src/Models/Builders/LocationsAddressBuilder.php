<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\LocationsAddress;

/**
 * Builder for model LocationsAddress
 *
 * @see LocationsAddress
 */
class LocationsAddressBuilder
{
    /**
     * @var LocationsAddress
     */
    private $instance;

    private function __construct(LocationsAddress $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Locations Address Builder object.
     */
    public static function init(): self
    {
        return new self(new LocationsAddress());
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
     * Sets Remark field.
     *
     * @param string|null $value
     */
    public function remark(?string $value): self
    {
        $this->instance->setRemark($value);
        return $this;
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
     * Initializes a new Locations Address object.
     */
    public function build(): LocationsAddress
    {
        return CoreHelper::clone($this->instance);
    }
}
