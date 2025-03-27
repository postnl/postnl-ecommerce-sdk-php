<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Tuesday;

/**
 * Builder for model Tuesday
 *
 * @see Tuesday
 */
class TuesdayBuilder
{
    /**
     * @var Tuesday
     */
    private $instance;

    private function __construct(Tuesday $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Tuesday Builder object.
     */
    public static function init(): self
    {
        return new self(new Tuesday());
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
     * Initializes a new Tuesday object.
     */
    public function build(): Tuesday
    {
        return CoreHelper::clone($this->instance);
    }
}
