<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\BarcodeError;

/**
 * Builder for model BarcodeError
 *
 * @see BarcodeError
 */
class BarcodeErrorBuilder
{
    /**
     * @var BarcodeError
     */
    private $instance;

    private function __construct(BarcodeError $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Barcode Error Builder object.
     */
    public static function init(): self
    {
        return new self(new BarcodeError());
    }

    /**
     * Sets Error Msg field.
     *
     * @param string|null $value
     */
    public function errorMsg(?string $value): self
    {
        $this->instance->setErrorMsg($value);
        return $this;
    }

    /**
     * Sets Error Number field.
     *
     * @param string|null $value
     */
    public function errorNumber(?string $value): self
    {
        $this->instance->setErrorNumber($value);
        return $this;
    }

    /**
     * Initializes a new Barcode Error object.
     */
    public function build(): BarcodeError
    {
        return CoreHelper::clone($this->instance);
    }
}
