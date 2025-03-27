<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Event;

/**
 * Builder for model Event
 *
 * @see Event
 */
class EventBuilder
{
    /**
     * @var Event
     */
    private $instance;

    private function __construct(Event $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Event Builder object.
     */
    public static function init(): self
    {
        return new self(new Event());
    }

    /**
     * Sets Code field.
     *
     * @param string|null $value
     */
    public function code(?string $value): self
    {
        $this->instance->setCode($value);
        return $this;
    }

    /**
     * Sets Description field.
     *
     * @param string|null $value
     */
    public function description(?string $value): self
    {
        $this->instance->setDescription($value);
        return $this;
    }

    /**
     * Sets Destination Location Code field.
     *
     * @param string|null $value
     */
    public function destinationLocationCode(?string $value): self
    {
        $this->instance->setDestinationLocationCode($value);
        return $this;
    }

    /**
     * Sets Location Code field.
     *
     * @param string|null $value
     */
    public function locationCode(?string $value): self
    {
        $this->instance->setLocationCode($value);
        return $this;
    }

    /**
     * Sets Route Code field.
     *
     * @param string|null $value
     */
    public function routeCode(?string $value): self
    {
        $this->instance->setRouteCode($value);
        return $this;
    }

    /**
     * Sets Route Number field.
     *
     * @param string|null $value
     */
    public function routeNumber(?string $value): self
    {
        $this->instance->setRouteNumber($value);
        return $this;
    }

    /**
     * Sets Time Stamp field.
     *
     * @param string|null $value
     */
    public function timeStamp(?string $value): self
    {
        $this->instance->setTimeStamp($value);
        return $this;
    }

    /**
     * Initializes a new Event object.
     */
    public function build(): Event
    {
        return CoreHelper::clone($this->instance);
    }
}
