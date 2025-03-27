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

class CheckoutCutOffTime implements \JsonSerializable
{
    /**
     * @var string
     */
    private $day;

    /**
     * @var bool|null
     */
    private $available;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var string|null
     */
    private $time;

    /**
     * @param string $day
     */
    public function __construct(string $day)
    {
        $this->day = $day;
    }

    /**
     * Returns Day.
     * The day for which the cutoff time applies. 00 is your default cutoff that applies to all otherwise
     * not specified days, 01 to 07 is Monday to Sunday.
     */
    public function getDay(): string
    {
        return $this->day;
    }

    /**
     * Sets Day.
     * The day for which the cutoff time applies. 00 is your default cutoff that applies to all otherwise
     * not specified days, 01 to 07 is Monday to Sunday.
     *
     * @required
     * @maps Day
     * @factory \PostnlEcommerceLib\Models\CheckoutCutOffDayEnum::checkValue
     */
    public function setDay(string $day): void
    {
        $this->day = $day;
    }

    /**
     * Returns Available.
     * Specifies whether you are available to process shipments during the selected day
     */
    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    /**
     * Sets Available.
     * Specifies whether you are available to process shipments during the selected day
     *
     * @maps Available
     */
    public function setAvailable(?bool $available): void
    {
        $this->available = $available;
    }

    /**
     * Returns Type.
     * Specifies the type belonging to the cutoff time.
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * Specifies the type belonging to the cutoff time.
     *
     * @maps Type
     * @factory \PostnlEcommerceLib\Models\CheckoutCutOffTypeEnum::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Time.
     * Specifies the cutoff time (mandatory when Available is true)
     */
    public function getTime(): ?string
    {
        return $this->time;
    }

    /**
     * Sets Time.
     * Specifies the cutoff time (mandatory when Available is true)
     *
     * @maps Time
     */
    public function setTime(?string $time): void
    {
        $this->time = $time;
    }

    /**
     * Converts the CheckoutCutOffTime object to a human-readable string representation.
     *
     * @return string The string representation of the CheckoutCutOffTime object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CheckoutCutOffTime',
            ['day' => $this->day, 'available' => $this->available, 'type' => $this->type, 'time' => $this->time]
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
        $json['Day']           = CheckoutCutOffDayEnum::checkValue($this->day);
        if (isset($this->available)) {
            $json['Available'] = $this->available;
        }
        if (isset($this->type)) {
            $json['Type']      = CheckoutCutOffTypeEnum::checkValue($this->type);
        }
        if (isset($this->time)) {
            $json['Time']      = $this->time;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
