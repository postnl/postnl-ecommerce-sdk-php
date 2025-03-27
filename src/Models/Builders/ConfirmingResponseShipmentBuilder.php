<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ConfirmingError;
use PostnlEcommerceLib\Models\ConfirmingResponseShipment;
use PostnlEcommerceLib\Models\Warning;

/**
 * Builder for model ConfirmingResponseShipment
 *
 * @see ConfirmingResponseShipment
 */
class ConfirmingResponseShipmentBuilder
{
    /**
     * @var ConfirmingResponseShipment
     */
    private $instance;

    private function __construct(ConfirmingResponseShipment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Confirming Response Shipment Builder object.
     */
    public static function init(): self
    {
        return new self(new ConfirmingResponseShipment());
    }

    /**
     * Sets Errors field.
     *
     * @param ConfirmingError[]|null $value
     */
    public function errors(?array $value): self
    {
        $this->instance->setErrors($value);
        return $this;
    }

    /**
     * Sets Warnings field.
     *
     * @param Warning[]|null $value
     */
    public function warnings(?array $value): self
    {
        $this->instance->setWarnings($value);
        return $this;
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
     * Initializes a new Confirming Response Shipment object.
     */
    public function build(): ConfirmingResponseShipment
    {
        return CoreHelper::clone($this->instance);
    }
}
