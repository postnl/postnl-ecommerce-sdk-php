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

class TimeframesResponseObject implements \JsonSerializable
{
    /**
     * @var TimeframeTimeframe[]|null
     */
    private $timeframeTimeframe;

    /**
     * Returns Timeframe Timeframe.
     *
     * @return TimeframeTimeframe[]|null
     */
    public function getTimeframeTimeframe(): ?array
    {
        return $this->timeframeTimeframe;
    }

    /**
     * Sets Timeframe Timeframe.
     *
     * @maps TimeframeTimeframe
     *
     * @param TimeframeTimeframe[]|null $timeframeTimeframe
     */
    public function setTimeframeTimeframe(?array $timeframeTimeframe): void
    {
        $this->timeframeTimeframe = $timeframeTimeframe;
    }

    /**
     * Converts the TimeframesResponseObject object to a human-readable string representation.
     *
     * @return string The string representation of the TimeframesResponseObject object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TimeframesResponseObject',
            ['timeframeTimeframe' => $this->timeframeTimeframe]
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
        if (isset($this->timeframeTimeframe)) {
            $json['TimeframeTimeframe'] = $this->timeframeTimeframe;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
