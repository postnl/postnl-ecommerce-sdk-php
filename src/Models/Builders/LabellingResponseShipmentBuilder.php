<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\LabellingLabel;
use PostnlEcommerceLib\Models\LabellingResponseShipment;
use PostnlEcommerceLib\Models\Warning;

/**
 * Builder for model LabellingResponseShipment
 *
 * @see LabellingResponseShipment
 */
class LabellingResponseShipmentBuilder
{
    /**
     * @var LabellingResponseShipment
     */
    private $instance;

    private function __construct(LabellingResponseShipment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Labelling Response Shipment Builder object.
     */
    public static function init(): self
    {
        return new self(new LabellingResponseShipment());
    }

    /**
     * Sets Product Code Delivery field.
     *
     * @param string|null $value
     */
    public function productCodeDelivery(?string $value): self
    {
        $this->instance->setProductCodeDelivery($value);
        return $this;
    }

    /**
     * Sets Labels field.
     *
     * @param LabellingLabel[]|null $value
     */
    public function labels(?array $value): self
    {
        $this->instance->setLabels($value);
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
     * Sets Errors field.
     *
     * @param array[]|null $value
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
     * Initializes a new Labelling Response Shipment object.
     */
    public function build(): LabellingResponseShipment
    {
        return CoreHelper::clone($this->instance);
    }
}
