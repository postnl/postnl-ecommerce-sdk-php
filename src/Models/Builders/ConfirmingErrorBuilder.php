<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ConfirmingError;

/**
 * Builder for model ConfirmingError
 *
 * @see ConfirmingError
 */
class ConfirmingErrorBuilder
{
    /**
     * @var ConfirmingError
     */
    private $instance;

    private function __construct(ConfirmingError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Confirming Error Builder object.
     */
    public static function init(): self
    {
        return new self(new ConfirmingError());
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
     * Initializes a new Confirming Error object.
     */
    public function build(): ConfirmingError
    {
        return CoreHelper::clone($this->instance);
    }
}
