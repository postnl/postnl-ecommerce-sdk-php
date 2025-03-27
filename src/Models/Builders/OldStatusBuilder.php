<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\OldStatus;

/**
 * Builder for model OldStatus
 *
 * @see OldStatus
 */
class OldStatusBuilder
{
    /**
     * @var OldStatus
     */
    private $instance;

    private function __construct(OldStatus $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Old Status Builder object.
     */
    public static function init(): self
    {
        return new self(new OldStatus());
    }

    /**
     * Sets Time Stamp field.
     *
     * @param string|null $value
     */
    public function timeStamp(?string $value): self
    {
        $this->instance->setTimeStamp($value);
        return $this;
    }

    /**
     * Sets Status Code field.
     *
     * @param string|null $value
     */
    public function statusCode(?string $value): self
    {
        $this->instance->setStatusCode($value);
        return $this;
    }

    /**
     * Sets Status Description field.
     *
     * @param string|null $value
     */
    public function statusDescription(?string $value): self
    {
        $this->instance->setStatusDescription($value);
        return $this;
    }

    /**
     * Sets Phase Code field.
     *
     * @param string|null $value
     */
    public function phaseCode(?string $value): self
    {
        $this->instance->setPhaseCode($value);
        return $this;
    }

    /**
     * Sets Phase Description field.
     *
     * @param string|null $value
     */
    public function phaseDescription(?string $value): self
    {
        $this->instance->setPhaseDescription($value);
        return $this;
    }

    /**
     * Initializes a new Old Status object.
     */
    public function build(): OldStatus
    {
        return CoreHelper::clone($this->instance);
    }
}
