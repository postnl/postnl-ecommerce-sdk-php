<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\PostalcodeCheckAddress;

/**
 * Builder for model PostalcodeCheckAddress
 *
 * @see PostalcodeCheckAddress
 */
class PostalcodeCheckAddressBuilder
{
    /**
     * @var PostalcodeCheckAddress
     */
    private $instance;

    private function __construct(PostalcodeCheckAddress $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Postalcode Check Address Builder object.
     */
    public static function init(): self
    {
        return new self(new PostalcodeCheckAddress());
    }

    /**
     * Sets city field.
     *
     * @param string|null $value
     */
    public function city(?string $value): self
    {
        $this->instance->setCity($value);
        return $this;
    }

    /**
     * Sets postal Code field.
     *
     * @param string|null $value
     */
    public function postalCode(?string $value): self
    {
        $this->instance->setPostalCode($value);
        return $this;
    }

    /**
     * Sets street Name field.
     *
     * @param string|null $value
     */
    public function streetName(?string $value): self
    {
        $this->instance->setStreetName($value);
        return $this;
    }

    /**
     * Sets house Number field.
     *
     * @param int|null $value
     */
    public function houseNumber(?int $value): self
    {
        $this->instance->setHouseNumber($value);
        return $this;
    }

    /**
     * Sets house Number Addition field.
     *
     * @param string|null $value
     */
    public function houseNumberAddition(?string $value): self
    {
        $this->instance->setHouseNumberAddition($value);
        return $this;
    }

    /**
     * Sets formatted Address field.
     *
     * @param string[]|null $value
     */
    public function formattedAddress(?array $value): self
    {
        $this->instance->setFormattedAddress($value);
        return $this;
    }

    /**
     * Initializes a new Postalcode Check Address object.
     */
    public function build(): PostalcodeCheckAddress
    {
        return CoreHelper::clone($this->instance);
    }
}
