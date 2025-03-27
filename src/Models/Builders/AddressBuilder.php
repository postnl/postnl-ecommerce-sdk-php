<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Address;

/**
 * Builder for model Address
 *
 * @see Address
 */
class AddressBuilder
{
    /**
     * @var Address
     */
    private $instance;

    private function __construct(Address $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Address Builder object.
     *
     * @param string $addressType
     * @param string $countrycode
     */
    public static function init(string $addressType, string $countrycode): self
    {
        return new self(new Address($addressType, $countrycode));
    }

    /**
     * Sets Area field.
     *
     * @param string|null $value
     */
    public function area(?string $value): self
    {
        $this->instance->setArea($value);
        return $this;
    }

    /**
     * Sets Buildingname field.
     *
     * @param string|null $value
     */
    public function buildingname(?string $value): self
    {
        $this->instance->setBuildingname($value);
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
     * Sets Department field.
     *
     * @param string|null $value
     */
    public function department(?string $value): self
    {
        $this->instance->setDepartment($value);
        return $this;
    }

    /**
     * Sets Doorcode field.
     *
     * @param string|null $value
     */
    public function doorcode(?string $value): self
    {
        $this->instance->setDoorcode($value);
        return $this;
    }

    /**
     * Sets First Name field.
     *
     * @param string|null $value
     */
    public function firstName(?string $value): self
    {
        $this->instance->setFirstName($value);
        return $this;
    }

    /**
     * Sets Floor field.
     *
     * @param string|null $value
     */
    public function floor(?string $value): self
    {
        $this->instance->setFloor($value);
        return $this;
    }

    /**
     * Sets House Nr field.
     *
     * @param string|null $value
     */
    public function houseNr(?string $value): self
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
     * Sets Region field.
     *
     * @param string|null $value
     */
    public function region(?string $value): self
    {
        $this->instance->setRegion($value);
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
     * Sets Street House Nr Ext field.
     *
     * @param string|null $value
     */
    public function streetHouseNrExt(?string $value): self
    {
        $this->instance->setStreetHouseNrExt($value);
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
     * Initializes a new Address object.
     */
    public function build(): Address
    {
        return CoreHelper::clone($this->instance);
    }
}
