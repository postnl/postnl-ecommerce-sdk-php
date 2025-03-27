<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Options;

/**
 * Builder for model Options
 *
 * @see Options
 */
class OptionsBuilder
{
    /**
     * @var Options
     */
    private $instance;

    private function __construct(Options $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Options Builder object.
     */
    public static function init(): self
    {
        return new self(new Options());
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
     * Initializes a new Options object.
     */
    public function build(): Options
    {
        return CoreHelper::clone($this->instance);
    }
}
