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

class ShippingstatusCustomer implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $customerCode;

    /**
     * @var string|null
     */
    private $customerNumber;

    /**
     * @var string|null
     */
    private $name;

    /**
     * Returns Customer Code.
     * The customer code of the shipment
     */
    public function getCustomerCode(): ?string
    {
        return $this->customerCode;
    }

    /**
     * Sets Customer Code.
     * The customer code of the shipment
     *
     * @maps CustomerCode
     */
    public function setCustomerCode(?string $customerCode): void
    {
        $this->customerCode = $customerCode;
    }

    /**
     * Returns Customer Number.
     * The customer number of the shipment
     */
    public function getCustomerNumber(): ?string
    {
        return $this->customerNumber;
    }

    /**
     * Sets Customer Number.
     * The customer number of the shipment
     *
     * @maps CustomerNumber
     */
    public function setCustomerNumber(?string $customerNumber): void
    {
        $this->customerNumber = $customerNumber;
    }

    /**
     * Returns Name.
     * The customer name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The customer name
     *
     * @maps Name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Converts the ShippingstatusCustomer object to a human-readable string representation.
     *
     * @return string The string representation of the ShippingstatusCustomer object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ShippingstatusCustomer',
            [
                'customerCode' => $this->customerCode,
                'customerNumber' => $this->customerNumber,
                'name' => $this->name
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
        if (isset($this->customerCode)) {
            $json['CustomerCode']   = $this->customerCode;
        }
        if (isset($this->customerNumber)) {
            $json['CustomerNumber'] = $this->customerNumber;
        }
        if (isset($this->name)) {
            $json['Name']           = $this->name;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
