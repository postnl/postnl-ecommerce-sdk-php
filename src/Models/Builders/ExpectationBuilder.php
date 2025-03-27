<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Expectation;

/**
 * Builder for model Expectation
 *
 * @see Expectation
 */
class ExpectationBuilder
{
    /**
     * @var Expectation
     */
    private $instance;

    private function __construct(Expectation $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Expectation Builder object.
     */
    public static function init(): self
    {
        return new self(new Expectation());
    }

    /**
     * Sets ETA From field.
     *
     * @param string|null $value
     */
    public function eTAFrom(?string $value): self
    {
        $this->instance->setETAFrom($value);
        return $this;
    }

    /**
     * Sets ETA To field.
     *
     * @param string|null $value
     */
    public function eTATo(?string $value): self
    {
        $this->instance->setETATo($value);
        return $this;
    }

    /**
     * Initializes a new Expectation object.
     */
    public function build(): Expectation
    {
        return CoreHelper::clone($this->instance);
    }
}
