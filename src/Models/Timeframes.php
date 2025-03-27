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

class Timeframes implements \JsonSerializable
{
    /**
     * @var Timeframe[]|null
     */
    private $timeframe;

    /**
     * Returns Timeframe.
     * A calculated delivery timeframe
     *
     * @return Timeframe[]|null
     */
    public function getTimeframe(): ?array
    {
        return $this->timeframe;
    }

    /**
     * Sets Timeframe.
     * A calculated delivery timeframe
     *
     * @maps Timeframe
     *
     * @param Timeframe[]|null $timeframe
     */
    public function setTimeframe(?array $timeframe): void
    {
        $this->timeframe = $timeframe;
    }

    /**
     * Converts the Timeframes object to a human-readable string representation.
     *
     * @return string The string representation of the Timeframes object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('Timeframes', ['timeframe' => $this->timeframe]);
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
        if (isset($this->timeframe)) {
            $json['Timeframe'] = $this->timeframe;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
