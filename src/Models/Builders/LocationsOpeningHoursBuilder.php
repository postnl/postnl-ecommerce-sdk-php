<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Friday;
use PostnlEcommerceLib\Models\LocationsOpeningHours;
use PostnlEcommerceLib\Models\Monday;
use PostnlEcommerceLib\Models\Saturday;
use PostnlEcommerceLib\Models\Sunday;
use PostnlEcommerceLib\Models\Thursday;
use PostnlEcommerceLib\Models\Tuesday;
use PostnlEcommerceLib\Models\Wednesday;

/**
 * Builder for model LocationsOpeningHours
 *
 * @see LocationsOpeningHours
 */
class LocationsOpeningHoursBuilder
{
    /**
     * @var LocationsOpeningHours
     */
    private $instance;

    private function __construct(LocationsOpeningHours $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Locations Opening Hours Builder object.
     */
    public static function init(): self
    {
        return new self(new LocationsOpeningHours());
    }

    /**
     * Sets Monday field.
     *
     * @param Monday|null $value
     */
    public function monday(?Monday $value): self
    {
        $this->instance->setMonday($value);
        return $this;
    }

    /**
     * Sets Tuesday field.
     *
     * @param Tuesday|null $value
     */
    public function tuesday(?Tuesday $value): self
    {
        $this->instance->setTuesday($value);
        return $this;
    }

    /**
     * Sets Wednesday field.
     *
     * @param Wednesday|null $value
     */
    public function wednesday(?Wednesday $value): self
    {
        $this->instance->setWednesday($value);
        return $this;
    }

    /**
     * Sets Thursday field.
     *
     * @param Thursday|null $value
     */
    public function thursday(?Thursday $value): self
    {
        $this->instance->setThursday($value);
        return $this;
    }

    /**
     * Sets Friday field.
     *
     * @param Friday|null $value
     */
    public function friday(?Friday $value): self
    {
        $this->instance->setFriday($value);
        return $this;
    }

    /**
     * Sets Saturday field.
     *
     * @param Saturday|null $value
     */
    public function saturday(?Saturday $value): self
    {
        $this->instance->setSaturday($value);
        return $this;
    }

    /**
     * Sets Sunday field.
     *
     * @param Sunday|null $value
     */
    public function sunday(?Sunday $value): self
    {
        $this->instance->setSunday($value);
        return $this;
    }

    /**
     * Initializes a new Locations Opening Hours object.
     */
    public function build(): LocationsOpeningHours
    {
        return CoreHelper::clone($this->instance);
    }
}
