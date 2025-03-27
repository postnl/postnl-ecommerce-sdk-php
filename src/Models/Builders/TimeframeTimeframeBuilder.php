<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Options;
use PostnlEcommerceLib\Models\Sustainability;
use PostnlEcommerceLib\Models\TimeframeTimeframe;

/**
 * Builder for model TimeframeTimeframe
 *
 * @see TimeframeTimeframe
 */
class TimeframeTimeframeBuilder
{
    /**
     * @var TimeframeTimeframe
     */
    private $instance;

    private function __construct(TimeframeTimeframe $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Timeframe Timeframe Builder object.
     */
    public static function init(): self
    {
        return new self(new TimeframeTimeframe());
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
     * Sets Options field.
     *
     * @param Options|null $value
     */
    public function options(?Options $value): self
    {
        $this->instance->setOptions($value);
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
     * Sets Sustainability field.
     *
     * @param Sustainability|null $value
     */
    public function sustainability(?Sustainability $value): self
    {
        $this->instance->setSustainability($value);
        return $this;
    }

    /**
     * Initializes a new Timeframe Timeframe object.
     */
    public function build(): TimeframeTimeframe
    {
        return CoreHelper::clone($this->instance);
    }
}
