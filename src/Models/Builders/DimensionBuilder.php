<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Dimension;

/**
 * Builder for model Dimension
 *
 * @see Dimension
 */
class DimensionBuilder
{
    /**
     * @var Dimension
     */
    private $instance;

    private function __construct(Dimension $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Dimension Builder object.
     *
     * @param int $weight
     */
    public static function init(int $weight): self
    {
        return new self(new Dimension($weight));
    }

    /**
     * Sets Height field.
     *
     * @param int|null $value
     */
    public function height(?int $value): self
    {
        $this->instance->setHeight($value);
        return $this;
    }

    /**
     * Sets Length field.
     *
     * @param int|null $value
     */
    public function length(?int $value): self
    {
        $this->instance->setLength($value);
        return $this;
    }

    /**
     * Sets Volume field.
     *
     * @param int|null $value
     */
    public function volume(?int $value): self
    {
        $this->instance->setVolume($value);
        return $this;
    }

    /**
     * Sets Width field.
     *
     * @param int|null $value
     */
    public function width(?int $value): self
    {
        $this->instance->setWidth($value);
        return $this;
    }

    /**
     * Initializes a new Dimension object.
     */
    public function build(): Dimension
    {
        return CoreHelper::clone($this->instance);
    }
}
