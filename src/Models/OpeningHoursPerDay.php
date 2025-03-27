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

class OpeningHoursPerDay implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $from;

    /**
     * @var string|null
     */
    private $to;

    /**
     * Returns From.
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * Sets From.
     *
     * @maps From
     */
    public function setFrom(?string $from): void
    {
        $this->from = $from;
    }

    /**
     * Returns To.
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * Sets To.
     *
     * @maps To
     */
    public function setTo(?string $to): void
    {
        $this->to = $to;
    }

    /**
     * Converts the OpeningHoursPerDay object to a human-readable string representation.
     *
     * @return string The string representation of the OpeningHoursPerDay object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify('OpeningHoursPerDay', ['from' => $this->from, 'to' => $this->to]);
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
        if (isset($this->from)) {
            $json['From'] = $this->from;
        }
        if (isset($this->to)) {
            $json['To']   = $this->to;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
