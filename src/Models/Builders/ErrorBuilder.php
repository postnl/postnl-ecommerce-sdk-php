<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Error;

/**
 * Builder for model Error
 *
 * @see Error
 */
class ErrorBuilder
{
    /**
     * @var Error
     */
    private $instance;

    private function __construct(Error $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Error Builder object.
     */
    public static function init(): self
    {
        return new self(new Error());
    }

    /**
     * Sets Error Code field.
     *
     * @param string|null $value
     */
    public function errorCode(?string $value): self
    {
        $this->instance->setErrorCode($value);
        return $this;
    }

    /**
     * Sets Error Description field.
     *
     * @param string|null $value
     */
    public function errorDescription(?string $value): self
    {
        $this->instance->setErrorDescription($value);
        return $this;
    }

    /**
     * Initializes a new Error object.
     */
    public function build(): Error
    {
        return CoreHelper::clone($this->instance);
    }
}
