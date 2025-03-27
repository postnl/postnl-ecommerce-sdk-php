<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ExtraField;

/**
 * Builder for model ExtraField
 *
 * @see ExtraField
 */
class ExtraFieldBuilder
{
    /**
     * @var ExtraField
     */
    private $instance;

    private function __construct(ExtraField $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Extra Field Builder object.
     */
    public static function init(): self
    {
        return new self(new ExtraField());
    }

    /**
     * Sets Key field.
     *
     * @param string|null $value
     */
    public function key(?string $value): self
    {
        $this->instance->setKey($value);
        return $this;
    }

    /**
     * Sets Value field.
     *
     * @param string|null $value
     */
    public function value(?string $value): self
    {
        $this->instance->setValue($value);
        return $this;
    }

    /**
     * Initializes a new Extra Field object.
     */
    public function build(): ExtraField
    {
        return CoreHelper::clone($this->instance);
    }
}
