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
use PostnlEcommerceLib\Models\Timeframes;

/**
 * Builder for model Timeframes
 *
 * @see Timeframes
 */
class TimeframesBuilder
{
    /**
     * @var Timeframes
     */
    private $instance;

    private function __construct(Timeframes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Timeframes Builder object.
     */
    public static function init(): self
    {
        return new self(new Timeframes());
    }

    /**
     * Sets Timeframe field.
     *
     * @param Timeframe[]|null $value
     */
    public function timeframe(?array $value): self
    {
        $this->instance->setTimeframe($value);
        return $this;
    }

    /**
     * Initializes a new Timeframes object.
     */
    public function build(): Timeframes
    {
        return CoreHelper::clone($this->instance);
    }
}
