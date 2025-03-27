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

class Signature implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $barcode;

    /**
     * @var string|null
     */
    private $signatureDate;

    /**
     * @var string|null
     */
    private $signatureImage;

    /**
     * Returns Barcode.
     * The barcode of the shipment for which the signature is returned
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * Sets Barcode.
     * The barcode of the shipment for which the signature is returned
     *
     * @maps Barcode
     */
    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * Returns Signature Date.
     * The date of the signature
     */
    public function getSignatureDate(): ?string
    {
        return $this->signatureDate;
    }

    /**
     * Sets Signature Date.
     * The date of the signature
     *
     * @maps SignatureDate
     */
    public function setSignatureDate(?string $signatureDate): void
    {
        $this->signatureDate = $signatureDate;
    }

    /**
     * Returns Signature Image.
     * The signature content; base64 encoded GIF format.
     */
    public function getSignatureImage(): ?string
    {
        return $this->signatureImage;
    }

    /**
     * Sets Signature Image.
     * The signature content; base64 encoded GIF format.
     *
     * @maps SignatureImage
     */
    public function setSignatureImage(?string $signatureImage): void
    {
        $this->signatureImage = $signatureImage;
    }

    /**
     * Converts the Signature object to a human-readable string representation.
     *
     * @return string The string representation of the Signature object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Signature',
            [
                'barcode' => $this->barcode,
                'signatureDate' => $this->signatureDate,
                'signatureImage' => $this->signatureImage
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
        if (isset($this->barcode)) {
            $json['Barcode']        = $this->barcode;
        }
        if (isset($this->signatureDate)) {
            $json['SignatureDate']  = $this->signatureDate;
        }
        if (isset($this->signatureImage)) {
            $json['SignatureImage'] = $this->signatureImage;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
