<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\OpeningHours;
use PostnlEcommerceLib\Models\OpeningHoursPerDay;

/**
 * Builder for model OpeningHours
 *
 * @see OpeningHours
 */
class OpeningHoursBuilder
{
    /**
     * @var OpeningHours
     */
    private $instance;

    private function __construct(OpeningHours $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Opening Hours Builder object.
     */
    public static function init(): self
    {
        return new self(new OpeningHours());
    }

    /**
     * Sets Monday field.
     *
     * @param OpeningHoursPerDay|null $value
     */
    public function monday(?OpeningHoursPerDay $value): self
    {
        $this->instance->setMonday($value);
        return $this;
    }

    /**
     * Sets Tuesday field.
     *
     * @param OpeningHoursPerDay|null $value
     */
    public function tuesday(?OpeningHoursPerDay $value): self
    {
        $this->instance->setTuesday($value);
        return $this;
    }

    /**
     * Sets Wednesday field.
     *
     * @param OpeningHoursPerDay|null $value
     */
    public function wednesday(?OpeningHoursPerDay $value): self
    {
        $this->instance->setWednesday($value);
        return $this;
    }

    /**
     * Sets Thursday field.
     *
     * @param OpeningHoursPerDay|null $value
     */
    public function thursday(?OpeningHoursPerDay $value): self
    {
        $this->instance->setThursday($value);
        return $this;
    }

    /**
     * Sets Friday field.
     *
     * @param OpeningHoursPerDay|null $value
     */
    public function friday(?OpeningHoursPerDay $value): self
    {
        $this->instance->setFriday($value);
        return $this;
    }

    /**
     * Sets Saturday field.
     *
     * @param OpeningHoursPerDay|null $value
     */
    public function saturday(?OpeningHoursPerDay $value): self
    {
        $this->instance->setSaturday($value);
        return $this;
    }

    /**
     * Sets Sunday field.
     *
     * @param OpeningHoursPerDay|null $value
     */
    public function sunday(?OpeningHoursPerDay $value): self
    {
        $this->instance->setSunday($value);
        return $this;
    }

    /**
     * Initializes a new Opening Hours object.
     */
    public function build(): OpeningHours
    {
        return CoreHelper::clone($this->instance);
    }
}
