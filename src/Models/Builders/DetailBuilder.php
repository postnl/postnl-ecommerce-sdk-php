<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Detail;

/**
 * Builder for model Detail
 *
 * @see Detail
 */
class DetailBuilder
{
    /**
     * @var Detail
     */
    private $instance;

    private function __construct(Detail $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Detail Builder object.
     */
    public static function init(): self
    {
        return new self(new Detail());
    }

    /**
     * Sets errorcode field.
     *
     * @param string|null $value
     */
    public function errorcode(?string $value): self
    {
        $this->instance->setErrorcode($value);
        return $this;
    }

    /**
     * Initializes a new Detail object.
     */
    public function build(): Detail
    {
        return CoreHelper::clone($this->instance);
    }
}
