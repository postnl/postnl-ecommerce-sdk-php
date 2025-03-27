<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Friday;

/**
 * Builder for model Friday
 *
 * @see Friday
 */
class FridayBuilder
{
    /**
     * @var Friday
     */
    private $instance;

    private function __construct(Friday $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Friday Builder object.
     */
    public static function init(): self
    {
        return new self(new Friday());
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
     * Initializes a new Friday object.
     */
    public function build(): Friday
    {
        return CoreHelper::clone($this->instance);
    }
}
