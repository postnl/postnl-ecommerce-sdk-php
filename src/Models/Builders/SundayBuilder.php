<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Sunday;

/**
 * Builder for model Sunday
 *
 * @see Sunday
 */
class SundayBuilder
{
    /**
     * @var Sunday
     */
    private $instance;

    private function __construct(Sunday $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Sunday Builder object.
     */
    public static function init(): self
    {
        return new self(new Sunday());
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
     * Initializes a new Sunday object.
     */
    public function build(): Sunday
    {
        return CoreHelper::clone($this->instance);
    }
}
