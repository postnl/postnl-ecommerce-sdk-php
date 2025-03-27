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

class ReasonNoTimeframe implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $date;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var NoTimeframesOptions|null
     */
    private $options;

    /**
     * @var Sustainability|null
     */
    private $sustainability;

    /**
     * Returns Code.
     * The reason code
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * The reason code
     *
     * @maps Code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Date.
     * The date associated with the reason no timeframe was calculated
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Sets Date.
     * The date associated with the reason no timeframe was calculated
     *
     * @maps Date
     */
    public function setDate(?string $date): void
    {
        $this->date = $date;
    }

    /**
     * Returns Description.
     * The description associated with the reason no timeframe was calculated
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * The description associated with the reason no timeframe was calculated
     *
     * @maps Description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Options.
     * The option for which no timeframe was calculated for a specific date
     */
    public function getOptions(): ?NoTimeframesOptions
    {
        return $this->options;
    }

    /**
     * Sets Options.
     * The option for which no timeframe was calculated for a specific date
     *
     * @maps Options
     */
    public function setOptions(?NoTimeframesOptions $options): void
    {
        $this->options = $options;
    }

    /**
     * Returns Sustainability.
     * Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-
     * data/reference-codes/sustainability-codes) for possible values.
     */
    public function getSustainability(): ?Sustainability
    {
        return $this->sustainability;
    }

    /**
     * Sets Sustainability.
     * Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-
     * data/reference-codes/sustainability-codes) for possible values.
     *
     * @maps Sustainability
     */
    public function setSustainability(?Sustainability $sustainability): void
    {
        $this->sustainability = $sustainability;
    }

    /**
     * Converts the ReasonNoTimeframe object to a human-readable string representation.
     *
     * @return string The string representation of the ReasonNoTimeframe object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ReasonNoTimeframe',
            [
                'code' => $this->code,
                'date' => $this->date,
                'description' => $this->description,
                'options' => $this->options,
                'sustainability' => $this->sustainability
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
        if (isset($this->code)) {
            $json['Code']           = $this->code;
        }
        if (isset($this->date)) {
            $json['Date']           = $this->date;
        }
        if (isset($this->description)) {
            $json['Description']    = $this->description;
        }
        if (isset($this->options)) {
            $json['Options']        = $this->options;
        }
        if (isset($this->sustainability)) {
            $json['Sustainability'] = $this->sustainability;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
