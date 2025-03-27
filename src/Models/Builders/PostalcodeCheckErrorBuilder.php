<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\PostalcodeCheckError;

/**
 * Builder for model PostalcodeCheckError
 *
 * @see PostalcodeCheckError
 */
class PostalcodeCheckErrorBuilder
{
    /**
     * @var PostalcodeCheckError
     */
    private $instance;

    private function __construct(PostalcodeCheckError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Postalcode Check Error Builder object.
     */
    public static function init(): self
    {
        return new self(new PostalcodeCheckError());
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Sets title field.
     *
     * @param string|null $value
     */
    public function title(?string $value): self
    {
        $this->instance->setTitle($value);
        return $this;
    }

    /**
     * Sets detail field.
     *
     * @param string|null $value
     */
    public function detail(?string $value): self
    {
        $this->instance->setDetail($value);
        return $this;
    }

    /**
     * Initializes a new Postalcode Check Error object.
     */
    public function build(): PostalcodeCheckError
    {
        return CoreHelper::clone($this->instance);
    }
}
