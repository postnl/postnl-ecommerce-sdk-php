<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ShippingstatusResponseUpdatedShipment;
use PostnlEcommerceLib\Models\UpdatedShipmentStatus;

/**
 * Builder for model ShippingstatusResponseUpdatedShipment
 *
 * @see ShippingstatusResponseUpdatedShipment
 */
class ShippingstatusResponseUpdatedShipmentBuilder
{
    /**
     * @var ShippingstatusResponseUpdatedShipment
     */
    private $instance;

    private function __construct(ShippingstatusResponseUpdatedShipment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Shippingstatus Response Updated Shipment Builder object.
     */
    public static function init(): self
    {
        return new self(new ShippingstatusResponseUpdatedShipment());
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
     * Sets Creation Date field.
     *
     * @param string|null $value
     */
    public function creationDate(?string $value): self
    {
        $this->instance->setCreationDate($value);
        return $this;
    }

    /**
     * Sets Customer Number field.
     *
     * @param string|null $value
     */
    public function customerNumber(?string $value): self
    {
        $this->instance->setCustomerNumber($value);
        return $this;
    }

    /**
     * Sets Customer Code field.
     *
     * @param string|null $value
     */
    public function customerCode(?string $value): self
    {
        $this->instance->setCustomerCode($value);
        return $this;
    }

    /**
     * Sets Status field.
     *
     * @param UpdatedShipmentStatus|null $value
     */
    public function status(?UpdatedShipmentStatus $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Initializes a new Shippingstatus Response Updated Shipment object.
     */
    public function build(): ShippingstatusResponseUpdatedShipment
    {
        return CoreHelper::clone($this->instance);
    }
}
