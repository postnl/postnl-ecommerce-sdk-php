<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ReasonNoTimeframe;
use PostnlEcommerceLib\Models\ReasonNoTimeframes;

/**
 * Builder for model ReasonNoTimeframes
 *
 * @see ReasonNoTimeframes
 */
class ReasonNoTimeframesBuilder
{
    /**
     * @var ReasonNoTimeframes
     */
    private $instance;

    private function __construct(ReasonNoTimeframes $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Reason No Timeframes Builder object.
     */
    public static function init(): self
    {
        return new self(new ReasonNoTimeframes());
    }

    /**
     * Sets Reason No Timeframe field.
     *
     * @param ReasonNoTimeframe[]|null $value
     */
    public function reasonNoTimeframe(?array $value): self
    {
        $this->instance->setReasonNoTimeframe($value);
        return $this;
    }

    /**
     * Initializes a new Reason No Timeframes object.
     */
    public function build(): ReasonNoTimeframes
    {
        return CoreHelper::clone($this->instance);
    }
}
