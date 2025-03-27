<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ProductOption;

/**
 * Builder for model ProductOption
 *
 * @see ProductOption
 */
class ProductOptionBuilder
{
    /**
     * @var ProductOption
     */
    private $instance;

    private function __construct(ProductOption $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Product Option Builder object.
     *
     * @param string $characteristic
     * @param string $option
     */
    public static function init(string $characteristic, string $option): self
    {
        return new self(new ProductOption($characteristic, $option));
    }

    /**
     * Initializes a new Product Option object.
     */
    public function build(): ProductOption
    {
        return CoreHelper::clone($this->instance);
    }
}
