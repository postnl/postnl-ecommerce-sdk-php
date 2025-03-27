<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\HazardousMaterial;

/**
 * Builder for model HazardousMaterial
 *
 * @see HazardousMaterial
 */
class HazardousMaterialBuilder
{
    /**
     * @var HazardousMaterial
     */
    private $instance;

    private function __construct(HazardousMaterial $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Hazardous Material Builder object.
     *
     * @param string $toxicSubstanceCode
     */
    public static function init(string $toxicSubstanceCode): self
    {
        return new self(new HazardousMaterial($toxicSubstanceCode));
    }

    /**
     * Sets Additional Toxic Substance Code field.
     *
     * @param string[]|null $value
     */
    public function additionalToxicSubstanceCode(?array $value): self
    {
        $this->instance->setAdditionalToxicSubstanceCode($value);
        return $this;
    }

    /**
     * Sets ADR Points field.
     *
     * @param string|null $value
     */
    public function aDRPoints(?string $value): self
    {
        $this->instance->setADRPoints($value);
        return $this;
    }

    /**
     * Sets Tunnel Code field.
     *
     * @param string|null $value
     */
    public function tunnelCode(?string $value): self
    {
        $this->instance->setTunnelCode($value);
        return $this;
    }

    /**
     * Sets Packaging Group Code field.
     *
     * @param string|null $value
     */
    public function packagingGroupCode(?string $value): self
    {
        $this->instance->setPackagingGroupCode($value);
        return $this;
    }

    /**
     * Sets Packaging Group Description field.
     *
     * @param string|null $value
     */
    public function packagingGroupDescription(?string $value): self
    {
        $this->instance->setPackagingGroupDescription($value);
        return $this;
    }

    /**
     * Sets Gross Weight field.
     *
     * @param string|null $value
     */
    public function grossWeight(?string $value): self
    {
        $this->instance->setGrossWeight($value);
        return $this;
    }

    /**
     * Sets UNDG Number field.
     *
     * @param string|null $value
     */
    public function uNDGNumber(?string $value): self
    {
        $this->instance->setUNDGNumber($value);
        return $this;
    }

    /**
     * Sets Transport Category Code field.
     *
     * @param string|null $value
     */
    public function transportCategoryCode(?string $value): self
    {
        $this->instance->setTransportCategoryCode($value);
        return $this;
    }

    /**
     * Sets Chemical Technical Description field.
     *
     * @param string|null $value
     */
    public function chemicalTechnicalDescription(?string $value): self
    {
        $this->instance->setChemicalTechnicalDescription($value);
        return $this;
    }

    /**
     * Initializes a new Hazardous Material object.
     */
    public function build(): HazardousMaterial
    {
        return CoreHelper::clone($this->instance);
    }
}
