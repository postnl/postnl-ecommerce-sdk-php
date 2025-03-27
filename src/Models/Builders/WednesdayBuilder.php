<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Wednesday;

/**
 * Builder for model Wednesday
 *
 * @see Wednesday
 */
class WednesdayBuilder
{
    /**
     * @var Wednesday
     */
    private $instance;

    private function __construct(Wednesday $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wednesday Builder object.
     */
    public static function init(): self
    {
        return new self(new Wednesday());
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
     * Initializes a new Wednesday object.
     */
    public function build(): Wednesday
    {
        return CoreHelper::clone($this->instance);
    }
}
