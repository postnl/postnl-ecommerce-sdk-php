<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CurrentStatusShipment;
use PostnlEcommerceLib\Models\ShippingstatusAddress;
use PostnlEcommerceLib\Models\ShippingstatusCustomer;
use PostnlEcommerceLib\Models\ShippingstatusDimension;
use PostnlEcommerceLib\Models\ShippingstatusProductOptions;
use PostnlEcommerceLib\Models\Status;

/**
 * Builder for model CurrentStatusShipment
 *
 * @see CurrentStatusShipment
 */
class CurrentStatusShipmentBuilder
{
    /**
     * @var CurrentStatusShipment
     */
    private $instance;

    private function __construct(CurrentStatusShipment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Current Status Shipment Builder object.
     */
    public static function init(): self
    {
        return new self(new CurrentStatusShipment());
    }

    /**
     * Sets Main Barcode field.
     *
     * @param string|null $value
     */
    public function mainBarcode(?string $value): self
    {
        $this->instance->setMainBarcode($value);
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
     * Sets Shipment Amount field.
     *
     * @param string|null $value
     */
    public function shipmentAmount(?string $value): self
    {
        $this->instance->setShipmentAmount($value);
        return $this;
    }

    /**
     * Sets Shipment Counter field.
     *
     * @param string|null $value
     */
    public function shipmentCounter(?string $value): self
    {
        $this->instance->setShipmentCounter($value);
        return $this;
    }

    /**
     * Sets Customer field.
     *
     * @param ShippingstatusCustomer|null $value
     */
    public function customer(?ShippingstatusCustomer $value): self
    {
        $this->instance->setCustomer($value);
        return $this;
    }

    /**
     * Sets Product Code field.
     *
     * @param string|null $value
     */
    public function productCode(?string $value): self
    {
        $this->instance->setProductCode($value);
        return $this;
    }

    /**
     * Sets Product Description field.
     *
     * @param string|null $value
     */
    public function productDescription(?string $value): self
    {
        $this->instance->setProductDescription($value);
        return $this;
    }

    /**
     * Sets Reference field.
     *
     * @param string|null $value
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
        return $this;
    }

    /**
     * Sets Delivery Date field.
     *
     * @param string|null $value
     */
    public function deliveryDate(?string $value): self
    {
        $this->instance->setDeliveryDate($value);
        return $this;
    }

    /**
     * Sets Dimension field.
     *
     * @param ShippingstatusDimension|null $value
     */
    public function dimension(?ShippingstatusDimension $value): self
    {
        $this->instance->setDimension($value);
        return $this;
    }

    /**
     * Sets Address field.
     *
     * @param ShippingstatusAddress[]|null $value
     */
    public function address(?array $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets Product Options field.
     *
     * @param ShippingstatusProductOptions[]|null $value
     */
    public function productOptions(?array $value): self
    {
        $this->instance->setProductOptions($value);
        return $this;
    }

    /**
     * Sets Status field.
     *
     * @param Status|null $value
     */
    public function status(?Status $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Initializes a new Current Status Shipment object.
     */
    public function build(): CurrentStatusShipment
    {
        return CoreHelper::clone($this->instance);
    }
}
