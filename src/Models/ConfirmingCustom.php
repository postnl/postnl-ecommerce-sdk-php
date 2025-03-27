<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models;

use PostnlEcommerceLib\ApiHelper;
use stdClass;

class ConfirmingCustom implements \JsonSerializable
{
    /**
     * @var bool|null
     */
    private $certificate;

    /**
     * @var string|null
     */
    private $certificateNr;

    /**
     * @var bool|null
     */
    private $license;

    /**
     * @var string|null
     */
    private $licenseNr;

    /**
     * @var bool|null
     */
    private $invoice;

    /**
     * @var string|null
     */
    private $invoiceNr;

    /**
     * @var bool|null
     */
    private $handleAsNonDeliverable;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $shipmentType;

    /**
     * @var string|null
     */
    private $trustedShipperID;

    /**
     * @var string|null
     */
    private $importerReferenceCode;

    /**
     * @var string|null
     */
    private $transactionCode;

    /**
     * @var string|null
     */
    private $transactionDescription;

    /**
     * @var ConfirmingCustomContent[]
     */
    private $content;

    /**
     * @param string $currency
     * @param string $shipmentType
     * @param ConfirmingCustomContent[] $content
     */
    public function __construct(string $currency, string $shipmentType, array $content)
    {
        $this->currency = $currency;
        $this->shipmentType = $shipmentType;
        $this->content = $content;
    }

    /**
     * Returns Certificate.
     * Fill in if applicable, for specific items a export certificate is obliged, as proof that the item
     * complies to the sanity regulations, [more information](https://ondernemersplein.kvk.nl/fytosanitair-
     * of-veterinair-exportcertificaat-aanvragen/). Mandatory for Parcel shipments in the category type
     * Commercial Goods, Commercial Sample and Returned Goods (Certificate, Invoice or License; at least 1
     * out of 3 must be selected)
     */
    public function getCertificate(): ?bool
    {
        return $this->certificate;
    }

    /**
     * Sets Certificate.
     * Fill in if applicable, for specific items a export certificate is obliged, as proof that the item
     * complies to the sanity regulations, [more information](https://ondernemersplein.kvk.nl/fytosanitair-
     * of-veterinair-exportcertificaat-aanvragen/). Mandatory for Parcel shipments in the category type
     * Commercial Goods, Commercial Sample and Returned Goods (Certificate, Invoice or License; at least 1
     * out of 3 must be selected)
     *
     * @maps Certificate
     */
    public function setCertificate(?bool $certificate): void
    {
        $this->certificate = $certificate;
    }

    /**
     * Returns Certificate Nr.
     * Mandatory when Certificate is true.
     */
    public function getCertificateNr(): ?string
    {
        return $this->certificateNr;
    }

    /**
     * Sets Certificate Nr.
     * Mandatory when Certificate is true.
     *
     * @maps CertificateNr
     */
    public function setCertificateNr(?string $certificateNr): void
    {
        $this->certificateNr = $certificateNr;
    }

    /**
     * Returns License.
     * Fill in if applicable. Mandatory for Parcel shipments in the category type Commercial Goods,
     * Commercial Sample and Returned Goods (Certificate, Invoice or License; at least 1 out of 3 must be
     * selected).
     */
    public function getLicense(): ?bool
    {
        return $this->license;
    }

    /**
     * Sets License.
     * Fill in if applicable. Mandatory for Parcel shipments in the category type Commercial Goods,
     * Commercial Sample and Returned Goods (Certificate, Invoice or License; at least 1 out of 3 must be
     * selected).
     *
     * @maps License
     */
    public function setLicense(?bool $license): void
    {
        $this->license = $license;
    }

    /**
     * Returns License Nr.
     * Mandatory when License is true.
     */
    public function getLicenseNr(): ?string
    {
        return $this->licenseNr;
    }

    /**
     * Sets License Nr.
     * Mandatory when License is true.
     *
     * @maps LicenseNr
     */
    public function setLicenseNr(?string $licenseNr): void
    {
        $this->licenseNr = $licenseNr;
    }

    /**
     * Returns Invoice.
     * Fill in the invoice number of the shipment. For a faster customs clearing process apply the invoice
     * on the outside of the shipment. Mandatory for Parcel shipments in the category type Commercial Goods,
     * Commercial Sample and Returned Goods (Certificate, Invoice or License; at least 1 out of 3 must be
     * selected).
     */
    public function getInvoice(): ?bool
    {
        return $this->invoice;
    }

    /**
     * Sets Invoice.
     * Fill in the invoice number of the shipment. For a faster customs clearing process apply the invoice
     * on the outside of the shipment. Mandatory for Parcel shipments in the category type Commercial Goods,
     * Commercial Sample and Returned Goods (Certificate, Invoice or License; at least 1 out of 3 must be
     * selected).
     *
     * @maps Invoice
     */
    public function setInvoice(?bool $invoice): void
    {
        $this->invoice = $invoice;
    }

    /**
     * Returns Invoice Nr.
     * Mandatory when Invoice is true
     */
    public function getInvoiceNr(): ?string
    {
        return $this->invoiceNr;
    }

    /**
     * Sets Invoice Nr.
     * Mandatory when Invoice is true
     *
     * @maps InvoiceNr
     */
    public function setInvoiceNr(?string $invoiceNr): void
    {
        $this->invoiceNr = $invoiceNr;
    }

    /**
     * Returns Handle as Non Deliverable.
     * Determines what to do when the shipment cannot be delivered the first time (if this is set to true,
     * the shipment will be returned after the first failed attempt)
     */
    public function getHandleAsNonDeliverable(): ?bool
    {
        return $this->handleAsNonDeliverable;
    }

    /**
     * Sets Handle as Non Deliverable.
     * Determines what to do when the shipment cannot be delivered the first time (if this is set to true,
     * the shipment will be returned after the first failed attempt)
     *
     * @maps HandleAsNonDeliverable
     */
    public function setHandleAsNonDeliverable(?bool $handleAsNonDeliverable): void
    {
        $this->handleAsNonDeliverable = $handleAsNonDeliverable;
    }

    /**
     * Returns Currency.
     * Currency code. only EUR, GBP, USD and CNY are allowed.
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * Currency code. only EUR, GBP, USD and CNY are allowed.
     *
     * @required
     * @maps Currency
     * @factory \PostnlEcommerceLib\Models\CurrencyEnum::checkValue
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Shipment Type.
     * Type of shipment, possible values: Gift, Documents, Commercial Goods, Commercial Sample, Returned
     * Goods. Is used to fill in the checkbox on the customs form on the shipment label.
     */
    public function getShipmentType(): string
    {
        return $this->shipmentType;
    }

    /**
     * Sets Shipment Type.
     * Type of shipment, possible values: Gift, Documents, Commercial Goods, Commercial Sample, Returned
     * Goods. Is used to fill in the checkbox on the customs form on the shipment label.
     *
     * @required
     * @maps ShipmentType
     * @factory \PostnlEcommerceLib\Models\ShipmentTypeEnum::checkValue
     */
    public function setShipmentType(string $shipmentType): void
    {
        $this->shipmentType = $shipmentType;
    }

    /**
     * Returns Trusted Shipper ID.
     * Use only when available. This is the reference of the sender. Depending on the destination with this
     * ID, EORI, IOSS, TAX, VAT, VOEC*, the customs process can be faster. Only fill in this customs
     * reference number if the sender is registrated as Trusted Shipper in the country of destination.
     * *VOEC is a Norwegian VAT number.
     */
    public function getTrustedShipperID(): ?string
    {
        return $this->trustedShipperID;
    }

    /**
     * Sets Trusted Shipper ID.
     * Use only when available. This is the reference of the sender. Depending on the destination with this
     * ID, EORI, IOSS, TAX, VAT, VOEC*, the customs process can be faster. Only fill in this customs
     * reference number if the sender is registrated as Trusted Shipper in the country of destination.
     * *VOEC is a Norwegian VAT number.
     *
     * @maps TrustedShipperID
     */
    public function setTrustedShipperID(?string $trustedShipperID): void
    {
        $this->trustedShipperID = $trustedShipperID;
    }

    /**
     * Returns Importer Reference Code.
     * This is the reference of the recipient. Fill in a Tax Code or VAT number or Importer code. Depending
     * on the destination with this reference the customs process can be faster. For example Brazil uses an
     * TAXID number for natural persons, known as CPF.
     */
    public function getImporterReferenceCode(): ?string
    {
        return $this->importerReferenceCode;
    }

    /**
     * Sets Importer Reference Code.
     * This is the reference of the recipient. Fill in a Tax Code or VAT number or Importer code. Depending
     * on the destination with this reference the customs process can be faster. For example Brazil uses an
     * TAXID number for natural persons, known as CPF.
     *
     * @maps ImporterReferenceCode
     */
    public function setImporterReferenceCode(?string $importerReferenceCode): void
    {
        $this->importerReferenceCode = $importerReferenceCode;
    }

    /**
     * Returns Transaction Code.
     * See the [Reference data](https://developer.postnl.nl/docs/#/http/reference-data/reference-
     * codes/transaction-codes) for possible values.
     */
    public function getTransactionCode(): ?string
    {
        return $this->transactionCode;
    }

    /**
     * Sets Transaction Code.
     * See the [Reference data](https://developer.postnl.nl/docs/#/http/reference-data/reference-
     * codes/transaction-codes) for possible values.
     *
     * @maps TransactionCode
     */
    public function setTransactionCode(?string $transactionCode): void
    {
        $this->transactionCode = $transactionCode;
    }

    /**
     * Returns Transaction Description.
     * Transaction description; see [here](https://developer.postnl.nl/docs/#/http/reference-data/reference-
     * codes/transaction-codes) for common examples.
     */
    public function getTransactionDescription(): ?string
    {
        return $this->transactionDescription;
    }

    /**
     * Sets Transaction Description.
     * Transaction description; see [here](https://developer.postnl.nl/docs/#/http/reference-data/reference-
     * codes/transaction-codes) for common examples.
     *
     * @maps TransactionDescription
     */
    public function setTransactionDescription(?string $transactionDescription): void
    {
        $this->transactionDescription = $transactionDescription;
    }

    /**
     * Returns Content.
     * The contents of the shipment. This section is mandatory (minimum once, maximum 5). Fill per unique
     * item.
     *
     * @return ConfirmingCustomContent[]
     */
    public function getContent(): array
    {
        return $this->content;
    }

    /**
     * Sets Content.
     * The contents of the shipment. This section is mandatory (minimum once, maximum 5). Fill per unique
     * item.
     *
     * @required
     * @maps Content
     *
     * @param ConfirmingCustomContent[] $content
     */
    public function setContent(array $content): void
    {
        $this->content = $content;
    }

    /**
     * Converts the ConfirmingCustom object to a human-readable string representation.
     *
     * @return string The string representation of the ConfirmingCustom object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ConfirmingCustom',
            [
                'certificate' => $this->certificate,
                'certificateNr' => $this->certificateNr,
                'license' => $this->license,
                'licenseNr' => $this->licenseNr,
                'invoice' => $this->invoice,
                'invoiceNr' => $this->invoiceNr,
                'handleAsNonDeliverable' => $this->handleAsNonDeliverable,
                'currency' => $this->currency,
                'shipmentType' => $this->shipmentType,
                'trustedShipperID' => $this->trustedShipperID,
                'importerReferenceCode' => $this->importerReferenceCode,
                'transactionCode' => $this->transactionCode,
                'transactionDescription' => $this->transactionDescription,
                'content' => $this->content
            ]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->certificate)) {
            $json['Certificate']            = $this->certificate;
        }
        if (isset($this->certificateNr)) {
            $json['CertificateNr']          = $this->certificateNr;
        }
        if (isset($this->license)) {
            $json['License']                = $this->license;
        }
        if (isset($this->licenseNr)) {
            $json['LicenseNr']              = $this->licenseNr;
        }
        if (isset($this->invoice)) {
            $json['Invoice']                = $this->invoice;
        }
        if (isset($this->invoiceNr)) {
            $json['InvoiceNr']              = $this->invoiceNr;
        }
        if (isset($this->handleAsNonDeliverable)) {
            $json['HandleAsNonDeliverable'] = $this->handleAsNonDeliverable;
        }
        $json['Currency']                   = CurrencyEnum::checkValue($this->currency);
        $json['ShipmentType']               = ShipmentTypeEnum::checkValue($this->shipmentType);
        if (isset($this->trustedShipperID)) {
            $json['TrustedShipperID']       = $this->trustedShipperID;
        }
        if (isset($this->importerReferenceCode)) {
            $json['ImporterReferenceCode']  = $this->importerReferenceCode;
        }
        if (isset($this->transactionCode)) {
            $json['TransactionCode']        = $this->transactionCode;
        }
        if (isset($this->transactionDescription)) {
            $json['TransactionDescription'] = $this->transactionDescription;
        }
        $json['Content']                    = $this->content;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
