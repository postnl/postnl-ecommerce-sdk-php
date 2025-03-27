<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\OpeningHoursPerDay;

/**
 * Builder for model OpeningHoursPerDay
 *
 * @see OpeningHoursPerDay
 */
class OpeningHoursPerDayBuilder
{
    /**
     * @var OpeningHoursPerDay
     */
    private $instance;

    private function __construct(OpeningHoursPerDay $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Opening Hours Per Day Builder object.
     */
    public static function init(): self
    {
        return new self(new OpeningHoursPerDay());
    }

    /**
     * Sets From field.
     *
     * @param string|null $value
     */
    public function from(?string $value): self
    {
        $this->instance->setFrom($value);
        return $this;
    }

    /**
     * Sets To field.
     *
     * @param string|null $value
     */
    public function to(?string $value): self
    {
        $this->instance->setTo($value);
        return $this;
    }

    /**
     * Initializes a new Opening Hours Per Day object.
     */
    public function build(): OpeningHoursPerDay
    {
        return CoreHelper::clone($this->instance);
    }
}
