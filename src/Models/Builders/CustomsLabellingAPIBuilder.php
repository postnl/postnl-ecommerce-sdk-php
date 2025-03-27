<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CustomsLabellingAPI;
use PostnlEcommerceLib\Models\LabellingCustomsContent;

/**
 * Builder for model CustomsLabellingAPI
 *
 * @see CustomsLabellingAPI
 */
class CustomsLabellingAPIBuilder
{
    /**
     * @var CustomsLabellingAPI
     */
    private $instance;

    private function __construct(CustomsLabellingAPI $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Customs Labelling API Builder object.
     *
     * @param string $currency
     * @param string $shipmentType
     * @param LabellingCustomsContent[] $content
     */
    public static function init(string $currency, string $shipmentType, array $content): self
    {
        return new self(new CustomsLabellingAPI($currency, $shipmentType, $content));
    }

    /**
     * Sets Certificate field.
     *
     * @param bool|null $value
     */
    public function certificate(?bool $value): self
    {
        $this->instance->setCertificate($value);
        return $this;
    }

    /**
     * Sets Certificate Nr field.
     *
     * @param string|null $value
     */
    public function certificateNr(?string $value): self
    {
        $this->instance->setCertificateNr($value);
        return $this;
    }

    /**
     * Sets License field.
     *
     * @param bool|null $value
     */
    public function license(?bool $value): self
    {
        $this->instance->setLicense($value);
        return $this;
    }

    /**
     * Sets License Nr field.
     *
     * @param string|null $value
     */
    public function licenseNr(?string $value): self
    {
        $this->instance->setLicenseNr($value);
        return $this;
    }

    /**
     * Sets Invoice field.
     *
     * @param bool|null $value
     */
    public function invoice(?bool $value): self
    {
        $this->instance->setInvoice($value);
        return $this;
    }

    /**
     * Sets Invoice Nr field.
     *
     * @param string|null $value
     */
    public function invoiceNr(?string $value): self
    {
        $this->instance->setInvoiceNr($value);
        return $this;
    }

    /**
     * Sets Handle As Non Deliverable field.
     *
     * @param bool|null $value
     */
    public function handleAsNonDeliverable(?bool $value): self
    {
        $this->instance->setHandleAsNonDeliverable($value);
        return $this;
    }

    /**
     * Sets Trusted Shipper ID field.
     *
     * @param string|null $value
     */
    public function trustedShipperID(?string $value): self
    {
        $this->instance->setTrustedShipperID($value);
        return $this;
    }

    /**
     * Sets Importer Reference Code field.
     *
     * @param string|null $value
     */
    public function importerReferenceCode(?string $value): self
    {
        $this->instance->setImporterReferenceCode($value);
        return $this;
    }

    /**
     * Sets Transaction Code field.
     *
     * @param string|null $value
     */
    public function transactionCode(?string $value): self
    {
        $this->instance->setTransactionCode($value);
        return $this;
    }

    /**
     * Sets Transaction Description field.
     *
     * @param string|null $value
     */
    public function transactionDescription(?string $value): self
    {
        $this->instance->setTransactionDescription($value);
        return $this;
    }

    /**
     * Initializes a new Customs Labelling API object.
     */
    public function build(): CustomsLabellingAPI
    {
        return CoreHelper::clone($this->instance);
    }
}
