<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models;

use PostnlEcommerceLib\ApiHelper;
use stdClass;

class HazardousMaterial implements \JsonSerializable
{
    /**
     * @var string
     */
    private $toxicSubstanceCode;

    /**
     * @var string[]|null
     */
    private $additionalToxicSubstanceCode;

    /**
     * @var string|null
     */
    private $aDRPoints;

    /**
     * @var string|null
     */
    private $tunnelCode;

    /**
     * @var string|null
     */
    private $packagingGroupCode;

    /**
     * @var string|null
     */
    private $packagingGroupDescription;

    /**
     * @var string|null
     */
    private $grossWeight;

    /**
     * @var string|null
     */
    private $uNDGNumber;

    /**
     * @var string|null
     */
    private $transportCategoryCode;

    /**
     * @var string|null
     */
    private $chemicalTechnicalDescription;

    /**
     * @param string $toxicSubstanceCode
     */
    public function __construct(string $toxicSubstanceCode)
    {
        $this->toxicSubstanceCode = $toxicSubstanceCode;
    }

    /**
     * Returns Toxic Substance Code.
     * Toxic substance code as stated in the ADR agreement
     */
    public function getToxicSubstanceCode(): string
    {
        return $this->toxicSubstanceCode;
    }

    /**
     * Sets Toxic Substance Code.
     * Toxic substance code as stated in the ADR agreement
     *
     * @required
     * @maps ToxicSubstanceCode
     */
    public function setToxicSubstanceCode(string $toxicSubstanceCode): void
    {
        $this->toxicSubstanceCode = $toxicSubstanceCode;
    }

    /**
     * Returns Additional Toxic Substance Code.
     * Array of additional toxic substance codes as stated in the ADR agreement
     *
     * @return string[]|null
     */
    public function getAdditionalToxicSubstanceCode(): ?array
    {
        return $this->additionalToxicSubstanceCode;
    }

    /**
     * Sets Additional Toxic Substance Code.
     * Array of additional toxic substance codes as stated in the ADR agreement
     *
     * @maps AdditionalToxicSubstanceCode
     *
     * @param string[]|null $additionalToxicSubstanceCode
     */
    public function setAdditionalToxicSubstanceCode(?array $additionalToxicSubstanceCode): void
    {
        $this->additionalToxicSubstanceCode = $additionalToxicSubstanceCode;
    }

    /**
     * Returns A DR Points.
     * The amount of ADR points
     */
    public function getADRPoints(): ?string
    {
        return $this->aDRPoints;
    }

    /**
     * Sets A DR Points.
     * The amount of ADR points
     *
     * @maps ADRPoints
     */
    public function setADRPoints(?string $aDRPoints): void
    {
        $this->aDRPoints = $aDRPoints;
    }

    /**
     * Returns Tunnel Code.
     * The code indicating for which category of tunnels passage is prohibited with these goods.
     */
    public function getTunnelCode(): ?string
    {
        return $this->tunnelCode;
    }

    /**
     * Sets Tunnel Code.
     * The code indicating for which category of tunnels passage is prohibited with these goods.
     *
     * @maps TunnelCode
     */
    public function setTunnelCode(?string $tunnelCode): void
    {
        $this->tunnelCode = $tunnelCode;
    }

    /**
     * Returns Packaging Group Code.
     * Code identifying the category of the packaging material.
     */
    public function getPackagingGroupCode(): ?string
    {
        return $this->packagingGroupCode;
    }

    /**
     * Sets Packaging Group Code.
     * Code identifying the category of the packaging material.
     *
     * @maps PackagingGroupCode
     */
    public function setPackagingGroupCode(?string $packagingGroupCode): void
    {
        $this->packagingGroupCode = $packagingGroupCode;
    }

    /**
     * Returns Packaging Group Description.
     * Description of the packaging material
     */
    public function getPackagingGroupDescription(): ?string
    {
        return $this->packagingGroupDescription;
    }

    /**
     * Sets Packaging Group Description.
     * Description of the packaging material
     *
     * @maps PackagingGroupDescription
     */
    public function setPackagingGroupDescription(?string $packagingGroupDescription): void
    {
        $this->packagingGroupDescription = $packagingGroupDescription;
    }

    /**
     * Returns Gross Weight.
     * Gross weight of the goods in grams.
     */
    public function getGrossWeight(): ?string
    {
        return $this->grossWeight;
    }

    /**
     * Sets Gross Weight.
     * Gross weight of the goods in grams.
     *
     * @maps GrossWeight
     */
    public function setGrossWeight(?string $grossWeight): void
    {
        $this->grossWeight = $grossWeight;
    }

    /**
     * Returns U NDG Number.
     * The UNDG number
     */
    public function getUNDGNumber(): ?string
    {
        return $this->uNDGNumber;
    }

    /**
     * Sets U NDG Number.
     * The UNDG number
     *
     * @maps UNDGNumber
     */
    public function setUNDGNumber(?string $uNDGNumber): void
    {
        $this->uNDGNumber = $uNDGNumber;
    }

    /**
     * Returns Transport Category Code.
     * The transport category code
     */
    public function getTransportCategoryCode(): ?string
    {
        return $this->transportCategoryCode;
    }

    /**
     * Sets Transport Category Code.
     * The transport category code
     *
     * @maps TransportCategoryCode
     */
    public function setTransportCategoryCode(?string $transportCategoryCode): void
    {
        $this->transportCategoryCode = $transportCategoryCode;
    }

    /**
     * Returns Chemical Technical Description.
     * The chemical technical description of the goods.
     */
    public function getChemicalTechnicalDescription(): ?string
    {
        return $this->chemicalTechnicalDescription;
    }

    /**
     * Sets Chemical Technical Description.
     * The chemical technical description of the goods.
     *
     * @maps ChemicalTechnicalDescription
     */
    public function setChemicalTechnicalDescription(?string $chemicalTechnicalDescription): void
    {
        $this->chemicalTechnicalDescription = $chemicalTechnicalDescription;
    }

    /**
     * Converts the HazardousMaterial object to a human-readable string representation.
     *
     * @return string The string representation of the HazardousMaterial object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'HazardousMaterial',
            [
                'toxicSubstanceCode' => $this->toxicSubstanceCode,
                'additionalToxicSubstanceCode' => $this->additionalToxicSubstanceCode,
                'aDRPoints' => $this->aDRPoints,
                'tunnelCode' => $this->tunnelCode,
                'packagingGroupCode' => $this->packagingGroupCode,
                'packagingGroupDescription' => $this->packagingGroupDescription,
                'grossWeight' => $this->grossWeight,
                'uNDGNumber' => $this->uNDGNumber,
                'transportCategoryCode' => $this->transportCategoryCode,
                'chemicalTechnicalDescription' => $this->chemicalTechnicalDescription
            ]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['ToxicSubstanceCode']               = $this->toxicSubstanceCode;
        if (isset($this->additionalToxicSubstanceCode)) {
            $json['AdditionalToxicSubstanceCode'] = $this->additionalToxicSubstanceCode;
        }
        if (isset($this->aDRPoints)) {
            $json['ADRPoints']                    = $this->aDRPoints;
        }
        if (isset($this->tunnelCode)) {
            $json['TunnelCode']                   = $this->tunnelCode;
        }
        if (isset($this->packagingGroupCode)) {
            $json['PackagingGroupCode']           = $this->packagingGroupCode;
        }
        if (isset($this->packagingGroupDescription)) {
            $json['PackagingGroupDescription']    = $this->packagingGroupDescription;
        }
        if (isset($this->grossWeight)) {
            $json['GrossWeight']                  = $this->grossWeight;
        }
        if (isset($this->uNDGNumber)) {
            $json['UNDGNumber']                   = $this->uNDGNumber;
        }
        if (isset($this->transportCategoryCode)) {
            $json['TransportCategoryCode']        = $this->transportCategoryCode;
        }
        if (isset($this->chemicalTechnicalDescription)) {
            $json['ChemicalTechnicalDescription'] = $this->chemicalTechnicalDescription;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
