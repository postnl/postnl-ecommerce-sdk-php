<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Monday;

/**
 * Builder for model Monday
 *
 * @see Monday
 */
class MondayBuilder
{
    /**
     * @var Monday
     */
    private $instance;

    private function __construct(Monday $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Monday Builder object.
     */
    public static function init(): self
    {
        return new self(new Monday());
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
     * Initializes a new Monday object.
     */
    public function build(): Monday
    {
        return CoreHelper::clone($this->instance);
    }
}
