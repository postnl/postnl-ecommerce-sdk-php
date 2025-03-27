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

class ShippingstatusProductOption implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $optionCode;

    /**
     * @var string|null
     */
    private $characteristicCode;

    /**
     * Returns Option Code.
     * The product option code for this ProductOption.
     */
    public function getOptionCode(): ?string
    {
        return $this->optionCode;
    }

    /**
     * Sets Option Code.
     * The product option code for this ProductOption.
     *
     * @maps OptionCode
     */
    public function setOptionCode(?string $optionCode): void
    {
        $this->optionCode = $optionCode;
    }

    /**
     * Returns Characteristic Code.
     * The characteristic of the ProductOption.
     */
    public function getCharacteristicCode(): ?string
    {
        return $this->characteristicCode;
    }

    /**
     * Sets Characteristic Code.
     * The characteristic of the ProductOption.
     *
     * @maps CharacteristicCode
     */
    public function setCharacteristicCode(?string $characteristicCode): void
    {
        $this->characteristicCode = $characteristicCode;
    }

    /**
     * Converts the ShippingstatusProductOption object to a human-readable string representation.
     *
     * @return string The string representation of the ShippingstatusProductOption object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ShippingstatusProductOption',
            ['optionCode' => $this->optionCode, 'characteristicCode' => $this->characteristicCode]
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
        if (isset($this->optionCode)) {
            $json['OptionCode']         = $this->optionCode;
        }
        if (isset($this->characteristicCode)) {
            $json['CharacteristicCode'] = $this->characteristicCode;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
