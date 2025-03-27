<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Saturday;

/**
 * Builder for model Saturday
 *
 * @see Saturday
 */
class SaturdayBuilder
{
    /**
     * @var Saturday
     */
    private $instance;

    private function __construct(Saturday $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Saturday Builder object.
     */
    public static function init(): self
    {
        return new self(new Saturday());
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
     * Initializes a new Saturday object.
     */
    public function build(): Saturday
    {
        return CoreHelper::clone($this->instance);
    }
}
