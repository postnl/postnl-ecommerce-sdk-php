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

class ReasonNoTimeframes implements \JsonSerializable
{
    /**
     * @var ReasonNoTimeframe[]|null
     */
    private $reasonNoTimeframe;

    /**
     * Returns Reason No Timeframe.
     * The reason why no timeframe was returned
     *
     * @return ReasonNoTimeframe[]|null
     */
    public function getReasonNoTimeframe(): ?array
    {
        return $this->reasonNoTimeframe;
    }

    /**
     * Sets Reason No Timeframe.
     * The reason why no timeframe was returned
     *
     * @maps ReasonNoTimeframe
     *
     * @param ReasonNoTimeframe[]|null $reasonNoTimeframe
     */
    public function setReasonNoTimeframe(?array $reasonNoTimeframe): void
    {
        $this->reasonNoTimeframe = $reasonNoTimeframe;
    }

    /**
     * Converts the ReasonNoTimeframes object to a human-readable string representation.
     *
     * @return string The string representation of the ReasonNoTimeframes object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('ReasonNoTimeframes', ['reasonNoTimeframe' => $this->reasonNoTimeframe]);
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
        if (isset($this->reasonNoTimeframe)) {
            $json['ReasonNoTimeframe'] = $this->reasonNoTimeframe;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
