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

class Timeframe implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $date;

    /**
     * @var TimeframesResponseObject|null
     */
    private $timeframes;

    /**
     * Returns Date.
     * The expected date of delivery
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * Sets Date.
     * The expected date of delivery
     *
     * @maps Date
     */
    public function setDate(?string $date): void
    {
        $this->date = $date;
    }

    /**
     * Returns Timeframes.
     */
    public function getTimeframes(): ?TimeframesResponseObject
    {
        return $this->timeframes;
    }

    /**
     * Sets Timeframes.
     *
     * @maps Timeframes
     */
    public function setTimeframes(?TimeframesResponseObject $timeframes): void
    {
        $this->timeframes = $timeframes;
    }

    /**
     * Converts the Timeframe object to a human-readable string representation.
     *
     * @return string The string representation of the Timeframe object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Timeframe', ['date' => $this->date, 'timeframes' => $this->timeframes]);
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
        if (isset($this->date)) {
            $json['Date']       = $this->date;
        }
        if (isset($this->timeframes)) {
            $json['Timeframes'] = $this->timeframes;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
