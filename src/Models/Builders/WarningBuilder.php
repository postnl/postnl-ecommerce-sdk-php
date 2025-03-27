<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Warning;

/**
 * Builder for model Warning
 *
 * @see Warning
 */
class WarningBuilder
{
    /**
     * @var Warning
     */
    private $instance;

    private function __construct(Warning $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Warning Builder object.
     */
    public static function init(): self
    {
        return new self(new Warning());
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
     * Initializes a new Warning object.
     */
    public function build(): Warning
    {
        return CoreHelper::clone($this->instance);
    }
}
