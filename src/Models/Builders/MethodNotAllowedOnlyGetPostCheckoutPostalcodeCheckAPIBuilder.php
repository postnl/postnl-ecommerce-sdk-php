<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\MethodNotAllowedOnlyGetPostCheckoutPostalcodeCheckAPI;

/**
 * Builder for model MethodNotAllowedOnlyGetPostCheckoutPostalcodeCheckAPI
 *
 * @see MethodNotAllowedOnlyGetPostCheckoutPostalcodeCheckAPI
 */
class MethodNotAllowedOnlyGetPostCheckoutPostalcodeCheckAPIBuilder
{
    /**
     * @var MethodNotAllowedOnlyGetPostCheckoutPostalcodeCheckAPI
     */
    private $instance;

    private function __construct(MethodNotAllowedOnlyGetPostCheckoutPostalcodeCheckAPI $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Method Not Allowed Only Get Post Checkout Postalcode Check API Builder object.
     */
    public static function init(): self
    {
        return new self(new MethodNotAllowedOnlyGetPostCheckoutPostalcodeCheckAPI());
    }

    /**
     * Sets message field.
     *
     * @param string|null $value
     */
    public function message(?string $value): self
    {
        $this->instance->setMessage($value);
        return $this;
    }

    /**
     * Sets http status code field.
     *
     * @param float|null $value
     */
    public function httpStatusCode(?float $value): self
    {
        $this->instance->setHttpStatusCode($value);
        return $this;
    }

    /**
     * Initializes a new Method Not Allowed Only Get Post Checkout Postalcode Check API object.
     */
    public function build(): MethodNotAllowedOnlyGetPostCheckoutPostalcodeCheckAPI
    {
        return CoreHelper::clone($this->instance);
    }
}
