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

class LabellingCustomsContent implements \JsonSerializable
{
    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $weight;

    /**
     * @var float
     */
    private $value;

    /**
     * @var string|null
     */
    private $hSTariffNr;

    /**
     * @var string|null
     */
    private $countryOfOrigin;

    /**
     * @param string $description
     * @param int $quantity
     * @param int $weight
     * @param float $value
     */
    public function __construct(string $description, int $quantity, int $weight, float $value)
    {
        $this->description = $description;
        $this->quantity = $quantity;
        $this->weight = $weight;
        $this->value = $value;
    }

    /**
     * Returns Description.
     * Description of goods
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Description of goods
     *
     * @required
     * @maps Description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Quantity.
     * Fill in the total of the item(s)
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Sets Quantity.
     * Fill in the total of the item(s)
     *
     * @required
     * @maps Quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * Returns Weight.
     * Net weight of goods in gram(gr)
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * Sets Weight.
     * Net weight of goods in gram(gr)
     *
     * @required
     * @maps Weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * Returns Value.
     * Commercial (customs) value of goods. Fill in the value of the item(s).
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * Commercial (customs) value of goods. Fill in the value of the item(s).
     *
     * @required
     * @maps Value
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns H S Tariff Nr.
     * Specify every item with the standard HS commodity code (HS-code), [more information](https://tarief.
     * douane.nl/ite-tariff-public/#/home)
     */
    public function getHSTariffNr(): ?string
    {
        return $this->hSTariffNr;
    }

    /**
     * Sets H S Tariff Nr.
     * Specify every item with the standard HS commodity code (HS-code), [more information](https://tarief.
     * douane.nl/ite-tariff-public/#/home)
     *
     * @maps HSTariffNr
     */
    public function setHSTariffNr(?string $hSTariffNr): void
    {
        $this->hSTariffNr = $hSTariffNr;
    }

    /**
     * Returns Country of Origin.
     * Fill in the code of the country where the item was produced (ISO-code), [more information](https:
     * //www.iso.org/home.html)
     */
    public function getCountryOfOrigin(): ?string
    {
        return $this->countryOfOrigin;
    }

    /**
     * Sets Country of Origin.
     * Fill in the code of the country where the item was produced (ISO-code), [more information](https:
     * //www.iso.org/home.html)
     *
     * @maps CountryOfOrigin
     */
    public function setCountryOfOrigin(?string $countryOfOrigin): void
    {
        $this->countryOfOrigin = $countryOfOrigin;
    }

    /**
     * Converts the LabellingCustomsContent object to a human-readable string representation.
     *
     * @return string The string representation of the LabellingCustomsContent object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LabellingCustomsContent',
            [
                'description' => $this->description,
                'quantity' => $this->quantity,
                'weight' => $this->weight,
                'value' => $this->value,
                'hSTariffNr' => $this->hSTariffNr,
                'countryOfOrigin' => $this->countryOfOrigin
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
        $json['Description']         = $this->description;
        $json['Quantity']            = $this->quantity;
        $json['Weight']              = $this->weight;
        $json['Value']               = $this->value;
        if (isset($this->hSTariffNr)) {
            $json['HSTariffNr']      = $this->hSTariffNr;
        }
        if (isset($this->countryOfOrigin)) {
            $json['CountryOfOrigin'] = $this->countryOfOrigin;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
