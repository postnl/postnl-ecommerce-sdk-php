<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\LabellingError;

/**
 * Builder for model LabellingError
 *
 * @see LabellingError
 */
class LabellingErrorBuilder
{
    /**
     * @var LabellingError
     */
    private $instance;

    private function __construct(LabellingError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Labelling Error Builder object.
     */
    public static function init(): self
    {
        return new self(new LabellingError());
    }

    /**
     * Sets Error field.
     *
     * @param string|null $value
     */
    public function error(?string $value): self
    {
        $this->instance->setError($value);
        return $this;
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
     * Initializes a new Labelling Error object.
     */
    public function build(): LabellingError
    {
        return CoreHelper::clone($this->instance);
    }
}
