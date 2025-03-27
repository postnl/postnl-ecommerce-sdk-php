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

class ShippingstatusResponseUpdatedShipment implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $barcode;

    /**
     * @var string|null
     */
    private $creationDate;

    /**
     * @var string|null
     */
    private $customerNumber;

    /**
     * @var string|null
     */
    private $customerCode;

    /**
     * @var UpdatedShipmentStatus|null
     */
    private $status;

    /**
     * Returns Barcode.
     * The barcode belonging to the status update
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * Sets Barcode.
     * The barcode belonging to the status update
     *
     * @maps Barcode
     */
    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * Returns Creation Date.
     * The date of the update
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }

    /**
     * Sets Creation Date.
     * The date of the update
     *
     * @maps CreationDate
     */
    public function setCreationDate(?string $creationDate): void
    {
        $this->creationDate = $creationDate;
    }

    /**
     * Returns Customer Number.
     * The customer number
     */
    public function getCustomerNumber(): ?string
    {
        return $this->customerNumber;
    }

    /**
     * Sets Customer Number.
     * The customer number
     *
     * @maps CustomerNumber
     */
    public function setCustomerNumber(?string $customerNumber): void
    {
        $this->customerNumber = $customerNumber;
    }

    /**
     * Returns Customer Code.
     * The customer code
     */
    public function getCustomerCode(): ?string
    {
        return $this->customerCode;
    }

    /**
     * Sets Customer Code.
     * The customer code
     *
     * @maps CustomerCode
     */
    public function setCustomerCode(?string $customerCode): void
    {
        $this->customerCode = $customerCode;
    }

    /**
     * Returns Status.
     * The status update. See [Status codes](https://developer.postnl.nl/docs/#/http/reference-data/error-
     * codes) for possible values.
     */
    public function getStatus(): ?UpdatedShipmentStatus
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The status update. See [Status codes](https://developer.postnl.nl/docs/#/http/reference-data/error-
     * codes) for possible values.
     *
     * @maps Status
     */
    public function setStatus(?UpdatedShipmentStatus $status): void
    {
        $this->status = $status;
    }

    /**
     * Converts the ShippingstatusResponseUpdatedShipment object to a human-readable string representation.
     *
     * @return string The string representation of the ShippingstatusResponseUpdatedShipment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ShippingstatusResponseUpdatedShipment',
            [
                'barcode' => $this->barcode,
                'creationDate' => $this->creationDate,
                'customerNumber' => $this->customerNumber,
                'customerCode' => $this->customerCode,
                'status' => $this->status
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
        if (isset($this->creationDate)) {
            $json['CreationDate']   = $this->creationDate;
        }
        if (isset($this->customerNumber)) {
            $json['CustomerNumber'] = $this->customerNumber;
        }
        if (isset($this->customerCode)) {
            $json['CustomerCode']   = $this->customerCode;
        }
        if (isset($this->status)) {
            $json['Status']         = $this->status;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
