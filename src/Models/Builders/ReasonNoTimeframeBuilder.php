<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\NoTimeframesOptions;
use PostnlEcommerceLib\Models\ReasonNoTimeframe;
use PostnlEcommerceLib\Models\Sustainability;

/**
 * Builder for model ReasonNoTimeframe
 *
 * @see ReasonNoTimeframe
 */
class ReasonNoTimeframeBuilder
{
    /**
     * @var ReasonNoTimeframe
     */
    private $instance;

    private function __construct(ReasonNoTimeframe $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Reason No Timeframe Builder object.
     */
    public static function init(): self
    {
        return new self(new ReasonNoTimeframe());
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
     * Sets Options field.
     *
     * @param NoTimeframesOptions|null $value
     */
    public function options(?NoTimeframesOptions $value): self
    {
        $this->instance->setOptions($value);
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
     * Initializes a new Reason No Timeframe object.
     */
    public function build(): ReasonNoTimeframe
    {
        return CoreHelper::clone($this->instance);
    }
}
