<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ConfirmingCustomContent;

/**
 * Builder for model ConfirmingCustomContent
 *
 * @see ConfirmingCustomContent
 */
class ConfirmingCustomContentBuilder
{
    /**
     * @var ConfirmingCustomContent
     */
    private $instance;

    private function __construct(ConfirmingCustomContent $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Confirming Custom Content Builder object.
     *
     * @param string $description
     * @param int $quantity
     * @param int $weight
     * @param float $value
     */
    public static function init(string $description, int $quantity, int $weight, float $value): self
    {
        return new self(new ConfirmingCustomContent($description, $quantity, $weight, $value));
    }

    /**
     * Sets HS Tariff Nr field.
     *
     * @param string|null $value
     */
    public function hSTariffNr(?string $value): self
    {
        $this->instance->setHSTariffNr($value);
        return $this;
    }

    /**
     * Sets Country Of Origin field.
     *
     * @param string|null $value
     */
    public function countryOfOrigin(?string $value): self
    {
        $this->instance->setCountryOfOrigin($value);
        return $this;
    }

    /**
     * Initializes a new Confirming Custom Content object.
     */
    public function build(): ConfirmingCustomContent
    {
        return CoreHelper::clone($this->instance);
    }
}
