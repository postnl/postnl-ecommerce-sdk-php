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
 * The standard opening hours of the pickup location
 */
class OpeningHours implements \JsonSerializable
{
    /**
     * @var OpeningHoursPerDay|null
     */
    private $monday;

    /**
     * @var OpeningHoursPerDay|null
     */
    private $tuesday;

    /**
     * @var OpeningHoursPerDay|null
     */
    private $wednesday;

    /**
     * @var OpeningHoursPerDay|null
     */
    private $thursday;

    /**
     * @var OpeningHoursPerDay|null
     */
    private $friday;

    /**
     * @var OpeningHoursPerDay|null
     */
    private $saturday;

    /**
     * @var OpeningHoursPerDay|null
     */
    private $sunday;

    /**
     * Returns Monday.
     */
    public function getMonday(): ?OpeningHoursPerDay
    {
        return $this->monday;
    }

    /**
     * Sets Monday.
     *
     * @maps Monday
     */
    public function setMonday(?OpeningHoursPerDay $monday): void
    {
        $this->monday = $monday;
    }

    /**
     * Returns Tuesday.
     */
    public function getTuesday(): ?OpeningHoursPerDay
    {
        return $this->tuesday;
    }

    /**
     * Sets Tuesday.
     *
     * @maps Tuesday
     */
    public function setTuesday(?OpeningHoursPerDay $tuesday): void
    {
        $this->tuesday = $tuesday;
    }

    /**
     * Returns Wednesday.
     */
    public function getWednesday(): ?OpeningHoursPerDay
    {
        return $this->wednesday;
    }

    /**
     * Sets Wednesday.
     *
     * @maps Wednesday
     */
    public function setWednesday(?OpeningHoursPerDay $wednesday): void
    {
        $this->wednesday = $wednesday;
    }

    /**
     * Returns Thursday.
     */
    public function getThursday(): ?OpeningHoursPerDay
    {
        return $this->thursday;
    }

    /**
     * Sets Thursday.
     *
     * @maps Thursday
     */
    public function setThursday(?OpeningHoursPerDay $thursday): void
    {
        $this->thursday = $thursday;
    }

    /**
     * Returns Friday.
     */
    public function getFriday(): ?OpeningHoursPerDay
    {
        return $this->friday;
    }

    /**
     * Sets Friday.
     *
     * @maps Friday
     */
    public function setFriday(?OpeningHoursPerDay $friday): void
    {
        $this->friday = $friday;
    }

    /**
     * Returns Saturday.
     */
    public function getSaturday(): ?OpeningHoursPerDay
    {
        return $this->saturday;
    }

    /**
     * Sets Saturday.
     *
     * @maps Saturday
     */
    public function setSaturday(?OpeningHoursPerDay $saturday): void
    {
        $this->saturday = $saturday;
    }

    /**
     * Returns Sunday.
     */
    public function getSunday(): ?OpeningHoursPerDay
    {
        return $this->sunday;
    }

    /**
     * Sets Sunday.
     *
     * @maps Sunday
     */
    public function setSunday(?OpeningHoursPerDay $sunday): void
    {
        $this->sunday = $sunday;
    }

    /**
     * Converts the OpeningHours object to a human-readable string representation.
     *
     * @return string The string representation of the OpeningHours object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'OpeningHours',
            [
                'monday' => $this->monday,
                'tuesday' => $this->tuesday,
                'wednesday' => $this->wednesday,
                'thursday' => $this->thursday,
                'friday' => $this->friday,
                'saturday' => $this->saturday,
                'sunday' => $this->sunday
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
        if (isset($this->monday)) {
            $json['Monday']    = $this->monday;
        }
        if (isset($this->tuesday)) {
            $json['Tuesday']   = $this->tuesday;
        }
        if (isset($this->wednesday)) {
            $json['Wednesday'] = $this->wednesday;
        }
        if (isset($this->thursday)) {
            $json['Thursday']  = $this->thursday;
        }
        if (isset($this->friday)) {
            $json['Friday']    = $this->friday;
        }
        if (isset($this->saturday)) {
            $json['Saturday']  = $this->saturday;
        }
        if (isset($this->sunday)) {
            $json['Sunday']    = $this->sunday;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
