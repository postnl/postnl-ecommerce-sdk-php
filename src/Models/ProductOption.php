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

class ProductOption implements \JsonSerializable
{
    /**
     * @var string
     */
    private $characteristic;

    /**
     * @var string
     */
    private $option;

    /**
     * @param string $characteristic
     * @param string $option
     */
    public function __construct(string $characteristic, string $option)
    {
        $this->characteristic = $characteristic;
        $this->option = $option;
    }

    /**
     * Returns Characteristic.
     * The characteristic of the ProductOption. Mandatory for some products, please see the [Products
     * page](https://developer.postnl.nl/docs/#/http/reference-data/product-codes-dutch-domestic)
     */
    public function getCharacteristic(): string
    {
        return $this->characteristic;
    }

    /**
     * Sets Characteristic.
     * The characteristic of the ProductOption. Mandatory for some products, please see the [Products
     * page](https://developer.postnl.nl/docs/#/http/reference-data/product-codes-dutch-domestic)
     *
     * @required
     * @maps Characteristic
     */
    public function setCharacteristic(string $characteristic): void
    {
        $this->characteristic = $characteristic;
    }

    /**
     * Returns Option.
     * The product option code for this ProductOption. Mandatory for some products, please see the
     * [Products page](https://developer.postnl.nl/docs/#/http/reference-data/product-codes-dutch-
     * domestic)
     */
    public function getOption(): string
    {
        return $this->option;
    }

    /**
     * Sets Option.
     * The product option code for this ProductOption. Mandatory for some products, please see the
     * [Products page](https://developer.postnl.nl/docs/#/http/reference-data/product-codes-dutch-
     * domestic)
     *
     * @required
     * @maps Option
     */
    public function setOption(string $option): void
    {
        $this->option = $option;
    }

    /**
     * Converts the ProductOption object to a human-readable string representation.
     *
     * @return string The string representation of the ProductOption object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ProductOption',
            ['characteristic' => $this->characteristic, 'option' => $this->option]
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
        $json['Characteristic'] = $this->characteristic;
        $json['Option']         = $this->option;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
