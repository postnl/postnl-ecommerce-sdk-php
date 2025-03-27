<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ShippingstatusAddress;

/**
 * Builder for model ShippingstatusAddress
 *
 * @see ShippingstatusAddress
 */
class ShippingstatusAddressBuilder
{
    /**
     * @var ShippingstatusAddress
     */
    private $instance;

    private function __construct(ShippingstatusAddress $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Shippingstatus Address Builder object.
     */
    public static function init(): self
    {
        return new self(new ShippingstatusAddress());
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
     * Sets Last Name field.
     *
     * @param string|null $value
     */
    public function lastName(?string $value): self
    {
        $this->instance->setLastName($value);
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
     * Sets Department Name field.
     *
     * @param string|null $value
     */
    public function departmentName(?string $value): self
    {
        $this->instance->setDepartmentName($value);
        return $this;
    }

    /**
     * Sets Country Code field.
     *
     * @param string|null $value
     */
    public function countryCode(?string $value): self
    {
        $this->instance->setCountryCode($value);
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
     * Sets District field.
     *
     * @param string|null $value
     */
    public function district(?string $value): self
    {
        $this->instance->setDistrict($value);
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
     * Sets House Number field.
     *
     * @param string|null $value
     */
    public function houseNumber(?string $value): self
    {
        $this->instance->setHouseNumber($value);
        return $this;
    }

    /**
     * Sets House Number Suffix field.
     *
     * @param string|null $value
     */
    public function houseNumberSuffix(?string $value): self
    {
        $this->instance->setHouseNumberSuffix($value);
        return $this;
    }

    /**
     * Sets Building field.
     *
     * @param string|null $value
     */
    public function building(?string $value): self
    {
        $this->instance->setBuilding($value);
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
     * Initializes a new Shippingstatus Address object.
     */
    public function build(): ShippingstatusAddress
    {
        return CoreHelper::clone($this->instance);
    }
}
