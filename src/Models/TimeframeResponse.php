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

class TimeframeResponse implements \JsonSerializable
{
    /**
     * @var Timeframes|null
     */
    private $timeframes;

    /**
     * @var ReasonNoTimeframes|null
     */
    private $reasonNoTimeframes;

    /**
     * Returns Timeframes.
     */
    public function getTimeframes(): ?Timeframes
    {
        return $this->timeframes;
    }

    /**
     * Sets Timeframes.
     *
     * @maps Timeframes
     */
    public function setTimeframes(?Timeframes $timeframes): void
    {
        $this->timeframes = $timeframes;
    }

    /**
     * Returns Reason No Timeframes.
     */
    public function getReasonNoTimeframes(): ?ReasonNoTimeframes
    {
        return $this->reasonNoTimeframes;
    }

    /**
     * Sets Reason No Timeframes.
     *
     * @maps ReasonNoTimeframes
     */
    public function setReasonNoTimeframes(?ReasonNoTimeframes $reasonNoTimeframes): void
    {
        $this->reasonNoTimeframes = $reasonNoTimeframes;
    }

    /**
     * Converts the TimeframeResponse object to a human-readable string representation.
     *
     * @return string The string representation of the TimeframeResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TimeframeResponse',
            ['timeframes' => $this->timeframes, 'reasonNoTimeframes' => $this->reasonNoTimeframes]
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
        if (isset($this->timeframes)) {
            $json['Timeframes']         = $this->timeframes;
        }
        if (isset($this->reasonNoTimeframes)) {
            $json['ReasonNoTimeframes'] = $this->reasonNoTimeframes;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
