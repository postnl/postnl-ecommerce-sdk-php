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

/**
 * Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-
 * data/reference-codes/sustainability-codes) for possible values.
 */
class Sustainability implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $description;

    /**
     * Returns Code.
     * Sustainability score code
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * Sustainability score code
     *
     * @maps Code
     * @factory \PostnlEcommerceLib\Models\CodeEnum::checkValue
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Description.
     * Sustainability score code description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * Sustainability score code description
     *
     * @maps Description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Converts the Sustainability object to a human-readable string representation.
     *
     * @return string The string representation of the Sustainability object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Sustainability', ['code' => $this->code, 'description' => $this->description]);
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
            $json['Code']        = CodeEnum::checkValue($this->code);
        }
        if (isset($this->description)) {
            $json['Description'] = $this->description;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
