<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\BarcodeResponse;

/**
 * Builder for model BarcodeResponse
 *
 * @see BarcodeResponse
 */
class BarcodeResponseBuilder
{
    /**
     * @var BarcodeResponse
     */
    private $instance;

    private function __construct(BarcodeResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Barcode Response Builder object.
     */
    public static function init(): self
    {
        return new self(new BarcodeResponse());
    }

    /**
     * Sets Barcode field.
     *
     * @param string|null $value
     */
    public function barcode(?string $value): self
    {
        $this->instance->setBarcode($value);
        return $this;
    }

    /**
     * Initializes a new Barcode Response object.
     */
    public function build(): BarcodeResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
