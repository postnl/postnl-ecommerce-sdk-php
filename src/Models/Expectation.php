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
 * The expected delivery timeframe
 */
class Expectation implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $eTAFrom;

    /**
     * @var string|null
     */
    private $eTATo;

    /**
     * Returns E TA From.
     * The start of the timeframe
     */
    public function getETAFrom(): ?string
    {
        return $this->eTAFrom;
    }

    /**
     * Sets E TA From.
     * The start of the timeframe
     *
     * @maps ETAFrom
     */
    public function setETAFrom(?string $eTAFrom): void
    {
        $this->eTAFrom = $eTAFrom;
    }

    /**
     * Returns E TA To.
     * The end of the timeframe
     */
    public function getETATo(): ?string
    {
        return $this->eTATo;
    }

    /**
     * Sets E TA To.
     * The end of the timeframe
     *
     * @maps ETATo
     */
    public function setETATo(?string $eTATo): void
    {
        $this->eTATo = $eTATo;
    }

    /**
     * Converts the Expectation object to a human-readable string representation.
     *
     * @return string The string representation of the Expectation object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Expectation', ['eTAFrom' => $this->eTAFrom, 'eTATo' => $this->eTATo]);
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
        if (isset($this->eTAFrom)) {
            $json['ETAFrom'] = $this->eTAFrom;
        }
        if (isset($this->eTATo)) {
            $json['ETATo']   = $this->eTATo;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
