<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Signature;

/**
 * Builder for model Signature
 *
 * @see Signature
 */
class SignatureBuilder
{
    /**
     * @var Signature
     */
    private $instance;

    private function __construct(Signature $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Signature Builder object.
     */
    public static function init(): self
    {
        return new self(new Signature());
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
     * Sets Signature Date field.
     *
     * @param string|null $value
     */
    public function signatureDate(?string $value): self
    {
        $this->instance->setSignatureDate($value);
        return $this;
    }

    /**
     * Sets Signature Image field.
     *
     * @param string|null $value
     */
    public function signatureImage(?string $value): self
    {
        $this->instance->setSignatureImage($value);
        return $this;
    }

    /**
     * Initializes a new Signature object.
     */
    public function build(): Signature
    {
        return CoreHelper::clone($this->instance);
    }
}
