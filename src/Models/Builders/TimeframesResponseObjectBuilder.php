<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\TimeframesResponseObject;
use PostnlEcommerceLib\Models\TimeframeTimeframe;

/**
 * Builder for model TimeframesResponseObject
 *
 * @see TimeframesResponseObject
 */
class TimeframesResponseObjectBuilder
{
    /**
     * @var TimeframesResponseObject
     */
    private $instance;

    private function __construct(TimeframesResponseObject $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Timeframes Response Object Builder object.
     */
    public static function init(): self
    {
        return new self(new TimeframesResponseObject());
    }

    /**
     * Sets Timeframe Timeframe field.
     *
     * @param TimeframeTimeframe[]|null $value
     */
    public function timeframeTimeframe(?array $value): self
    {
        $this->instance->setTimeframeTimeframe($value);
        return $this;
    }

    /**
     * Initializes a new Timeframes Response Object object.
     */
    public function build(): TimeframesResponseObject
    {
        return CoreHelper::clone($this->instance);
    }
}
