<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Thursday;

/**
 * Builder for model Thursday
 *
 * @see Thursday
 */
class ThursdayBuilder
{
    /**
     * @var Thursday
     */
    private $instance;

    private function __construct(Thursday $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Thursday Builder object.
     */
    public static function init(): self
    {
        return new self(new Thursday());
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
     * Initializes a new Thursday object.
     */
    public function build(): Thursday
    {
        return CoreHelper::clone($this->instance);
    }
}
