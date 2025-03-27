<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Sustainability;

/**
 * Builder for model Sustainability
 *
 * @see Sustainability
 */
class SustainabilityBuilder
{
    /**
     * @var Sustainability
     */
    private $instance;

    private function __construct(Sustainability $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Sustainability Builder object.
     */
    public static function init(): self
    {
        return new self(new Sustainability());
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
     * Initializes a new Sustainability object.
     */
    public function build(): Sustainability
    {
        return CoreHelper::clone($this->instance);
    }
}
