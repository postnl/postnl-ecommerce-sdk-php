<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Address;
use PostnlEcommerceLib\Models\Amount;
use PostnlEcommerceLib\Models\ConfirmingCustom;
use PostnlEcommerceLib\Models\ConfirmingShipment;
use PostnlEcommerceLib\Models\Contact;
use PostnlEcommerceLib\Models\Dimension;
use PostnlEcommerceLib\Models\Group;
use PostnlEcommerceLib\Models\HazardousMaterial;
use PostnlEcommerceLib\Models\ProductOption;

/**
 * Builder for model ConfirmingShipment
 *
 * @see ConfirmingShipment
 */
class ConfirmingShipmentBuilder
{
    /**
     * @var ConfirmingShipment
     */
    private $instance;

    private function __construct(ConfirmingShipment $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Confirming Shipment Builder object.
     *
     * @param Address[] $addresses
     * @param string $barcode
     * @param Dimension $dimension
     * @param string $productCodeDelivery
     */
    public static function init(
        array $addresses,
        string $barcode,
        Dimension $dimension,
        string $productCodeDelivery
    ): self {
        return new self(new ConfirmingShipment($addresses, $barcode, $dimension, $productCodeDelivery));
    }

    /**
     * Sets Amounts field.
     *
     * @param Amount[]|null $value
     */
    public function amounts(?array $value): self
    {
        $this->instance->setAmounts($value);
        return $this;
    }

    /**
     * Sets Coding Text field.
     *
     * @param string|null $value
     */
    public function codingText(?string $value): self
    {
        $this->instance->setCodingText($value);
        return $this;
    }

    /**
     * Sets Collection Time Stamp Start field.
     *
     * @param string|null $value
     */
    public function collectionTimeStampStart(?string $value): self
    {
        $this->instance->setCollectionTimeStampStart($value);
        return $this;
    }

    /**
     * Sets Collection Time Stamp End field.
     *
     * @param string|null $value
     */
    public function collectionTimeStampEnd(?string $value): self
    {
        $this->instance->setCollectionTimeStampEnd($value);
        return $this;
    }

    /**
     * Sets Contacts field.
     *
     * @param Contact[]|null $value
     */
    public function contacts(?array $value): self
    {
        $this->instance->setContacts($value);
        return $this;
    }

    /**
     * Sets Content field.
     *
     * @param string|null $value
     */
    public function content(?string $value): self
    {
        $this->instance->setContent($value);
        return $this;
    }

    /**
     * Sets Cost Center field.
     *
     * @param string|null $value
     */
    public function costCenter(?string $value): self
    {
        $this->instance->setCostCenter($value);
        return $this;
    }

    /**
     * Sets Customer Order Number field.
     *
     * @param string|null $value
     */
    public function customerOrderNumber(?string $value): self
    {
        $this->instance->setCustomerOrderNumber($value);
        return $this;
    }

    /**
     * Sets Customs field.
     *
     * @param ConfirmingCustom[]|null $value
     */
    public function customs(?array $value): self
    {
        $this->instance->setCustoms($value);
        return $this;
    }

    /**
     * Sets Delivery Address field.
     *
     * @param string|null $value
     */
    public function deliveryAddress(?string $value): self
    {
        $this->instance->setDeliveryAddress($value);
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
     * Sets Down Partner Barcode field.
     *
     * @param string|null $value
     */
    public function downPartnerBarcode(?string $value): self
    {
        $this->instance->setDownPartnerBarcode($value);
        return $this;
    }

    /**
     * Sets Down Partner ID field.
     *
     * @param string|null $value
     */
    public function downPartnerID(?string $value): self
    {
        $this->instance->setDownPartnerID($value);
        return $this;
    }

    /**
     * Sets Down Partner Location field.
     *
     * @param string|null $value
     */
    public function downPartnerLocation(?string $value): self
    {
        $this->instance->setDownPartnerLocation($value);
        return $this;
    }

    /**
     * Sets Groups field.
     *
     * @param Group[]|null $value
     */
    public function groups(?array $value): self
    {
        $this->instance->setGroups($value);
        return $this;
    }

    /**
     * Sets Hazardous Material field.
     *
     * @param HazardousMaterial[]|null $value
     */
    public function hazardousMaterial(?array $value): self
    {
        $this->instance->setHazardousMaterial($value);
        return $this;
    }

    /**
     * Sets Product Code Collect field.
     *
     * @param string|null $value
     */
    public function productCodeCollect(?string $value): self
    {
        $this->instance->setProductCodeCollect($value);
        return $this;
    }

    /**
     * Sets Product Options field.
     *
     * @param ProductOption[]|null $value
     */
    public function productOptions(?array $value): self
    {
        $this->instance->setProductOptions($value);
        return $this;
    }

    /**
     * Sets Receiver Date Of Birth field.
     *
     * @param string|null $value
     */
    public function receiverDateOfBirth(?string $value): self
    {
        $this->instance->setReceiverDateOfBirth($value);
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
     * Sets Reference Collect field.
     *
     * @param string|null $value
     */
    public function referenceCollect(?string $value): self
    {
        $this->instance->setReferenceCollect($value);
        return $this;
    }

    /**
     * Sets Remark field.
     *
     * @param string|null $value
     */
    public function remark(?string $value): self
    {
        $this->instance->setRemark($value);
        return $this;
    }

    /**
     * Sets Return Barcode field.
     *
     * @param string|null $value
     */
    public function returnBarcode(?string $value): self
    {
        $this->instance->setReturnBarcode($value);
        return $this;
    }

    /**
     * Sets Return Reference field.
     *
     * @param string|null $value
     */
    public function returnReference(?string $value): self
    {
        $this->instance->setReturnReference($value);
        return $this;
    }

    /**
     * Sets Timeslot ID field.
     *
     * @param string|null $value
     */
    public function timeslotID(?string $value): self
    {
        $this->instance->setTimeslotID($value);
        return $this;
    }

    /**
     * Initializes a new Confirming Shipment object.
     */
    public function build(): ConfirmingShipment
    {
        return CoreHelper::clone($this->instance);
    }
}
