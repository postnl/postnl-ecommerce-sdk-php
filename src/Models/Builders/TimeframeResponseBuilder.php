<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ReasonNoTimeframes;
use PostnlEcommerceLib\Models\TimeframeResponse;
use PostnlEcommerceLib\Models\Timeframes;

/**
 * Builder for model TimeframeResponse
 *
 * @see TimeframeResponse
 */
class TimeframeResponseBuilder
{
    /**
     * @var TimeframeResponse
     */
    private $instance;

    private function __construct(TimeframeResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Timeframe Response Builder object.
     */
    public static function init(): self
    {
        return new self(new TimeframeResponse());
    }

    /**
     * Sets Timeframes field.
     *
     * @param Timeframes|null $value
     */
    public function timeframes(?Timeframes $value): self
    {
        $this->instance->setTimeframes($value);
        return $this;
    }

    /**
     * Sets Reason No Timeframes field.
     *
     * @param ReasonNoTimeframes|null $value
     */
    public function reasonNoTimeframes(?ReasonNoTimeframes $value): self
    {
        $this->instance->setReasonNoTimeframes($value);
        return $this;
    }

    /**
     * Initializes a new Timeframe Response object.
     */
    public function build(): TimeframeResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
