<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Timeframe;
use PostnlEcommerceLib\Models\TimeframesResponseObject;

/**
 * Builder for model Timeframe
 *
 * @see Timeframe
 */
class TimeframeBuilder
{
    /**
     * @var Timeframe
     */
    private $instance;

    private function __construct(Timeframe $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Timeframe Builder object.
     */
    public static function init(): self
    {
        return new self(new Timeframe());
    }

    /**
     * Sets Date field.
     *
     * @param string|null $value
     */
    public function date(?string $value): self
    {
        $this->instance->setDate($value);
        return $this;
    }

    /**
     * Sets Timeframes field.
     *
     * @param TimeframesResponseObject|null $value
     */
    public function timeframes(?TimeframesResponseObject $value): self
    {
        $this->instance->setTimeframes($value);
        return $this;
    }

    /**
     * Initializes a new Timeframe object.
     */
    public function build(): Timeframe
    {
        return CoreHelper::clone($this->instance);
    }
}
