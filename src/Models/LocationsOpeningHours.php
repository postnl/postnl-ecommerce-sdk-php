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
 * The standard opening times of the pickup location
 */
class LocationsOpeningHours implements \JsonSerializable
{
    /**
     * @var Monday|null
     */
    private $monday;

    /**
     * @var Tuesday|null
     */
    private $tuesday;

    /**
     * @var Wednesday|null
     */
    private $wednesday;

    /**
     * @var Thursday|null
     */
    private $thursday;

    /**
     * @var Friday|null
     */
    private $friday;

    /**
     * @var Saturday|null
     */
    private $saturday;

    /**
     * @var Sunday|null
     */
    private $sunday;

    /**
     * Returns Monday.
     */
    public function getMonday(): ?Monday
    {
        return $this->monday;
    }

    /**
     * Sets Monday.
     *
     * @maps Monday
     */
    public function setMonday(?Monday $monday): void
    {
        $this->monday = $monday;
    }

    /**
     * Returns Tuesday.
     */
    public function getTuesday(): ?Tuesday
    {
        return $this->tuesday;
    }

    /**
     * Sets Tuesday.
     *
     * @maps Tuesday
     */
    public function setTuesday(?Tuesday $tuesday): void
    {
        $this->tuesday = $tuesday;
    }

    /**
     * Returns Wednesday.
     */
    public function getWednesday(): ?Wednesday
    {
        return $this->wednesday;
    }

    /**
     * Sets Wednesday.
     *
     * @maps Wednesday
     */
    public function setWednesday(?Wednesday $wednesday): void
    {
        $this->wednesday = $wednesday;
    }

    /**
     * Returns Thursday.
     */
    public function getThursday(): ?Thursday
    {
        return $this->thursday;
    }

    /**
     * Sets Thursday.
     *
     * @maps Thursday
     */
    public function setThursday(?Thursday $thursday): void
    {
        $this->thursday = $thursday;
    }

    /**
     * Returns Friday.
     */
    public function getFriday(): ?Friday
    {
        return $this->friday;
    }

    /**
     * Sets Friday.
     *
     * @maps Friday
     */
    public function setFriday(?Friday $friday): void
    {
        $this->friday = $friday;
    }

    /**
     * Returns Saturday.
     */
    public function getSaturday(): ?Saturday
    {
        return $this->saturday;
    }

    /**
     * Sets Saturday.
     *
     * @maps Saturday
     */
    public function setSaturday(?Saturday $saturday): void
    {
        $this->saturday = $saturday;
    }

    /**
     * Returns Sunday.
     */
    public function getSunday(): ?Sunday
    {
        return $this->sunday;
    }

    /**
     * Sets Sunday.
     *
     * @maps Sunday
     */
    public function setSunday(?Sunday $sunday): void
    {
        $this->sunday = $sunday;
    }

    /**
     * Converts the LocationsOpeningHours object to a human-readable string representation.
     *
     * @return string The string representation of the LocationsOpeningHours object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LocationsOpeningHours',
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
