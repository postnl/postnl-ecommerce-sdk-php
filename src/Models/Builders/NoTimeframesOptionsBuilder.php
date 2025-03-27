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

/**
 * Builder for model NoTimeframesOptions
 *
 * @see NoTimeframesOptions
 */
class NoTimeframesOptionsBuilder
{
    /**
     * @var NoTimeframesOptions
     */
    private $instance;

    private function __construct(NoTimeframesOptions $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new No Timeframes Options Builder object.
     */
    public static function init(): self
    {
        return new self(new NoTimeframesOptions());
    }

    /**
     * Sets string field.
     *
     * @param string|null $value
     */
    public function string(?string $value): self
    {
        $this->instance->setString($value);
        return $this;
    }

    /**
     * Initializes a new No Timeframes Options object.
     */
    public function build(): NoTimeframesOptions
    {
        return CoreHelper::clone($this->instance);
    }
}
