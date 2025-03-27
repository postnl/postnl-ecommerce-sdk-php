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

class LabellingCustomer implements \JsonSerializable
{
    /**
     * @var CustomerAddress|null
     */
    private $address;

    /**
     * @var string|null
     */
    private $collectionLocation;

    /**
     * @var string|null
     */
    private $contactPerson;

    /**
     * @var string
     */
    private $customerCode;

    /**
     * @var string
     */
    private $customerNumber;

    /**
     * @var string|null
     */
    private $email;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @param string $customerCode
     * @param string $customerNumber
     */
    public function __construct(string $customerCode, string $customerNumber)
    {
        $this->customerCode = $customerCode;
        $this->customerNumber = $customerNumber;
    }

    /**
     * Returns Address.
     */
    public function getAddress(): ?CustomerAddress
    {
        return $this->address;
    }

    /**
     * Sets Address.
     *
     * @maps Address
     */
    public function setAddress(?CustomerAddress $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Collection Location.
     * Code of delivery location at PostNL Pakketten
     */
    public function getCollectionLocation(): ?string
    {
        return $this->collectionLocation;
    }

    /**
     * Sets Collection Location.
     * Code of delivery location at PostNL Pakketten
     *
     * @maps CollectionLocation
     */
    public function setCollectionLocation(?string $collectionLocation): void
    {
        $this->collectionLocation = $collectionLocation;
    }

    /**
     * Returns Contact Person.
     * Name of customer contact person
     */
    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }

    /**
     * Sets Contact Person.
     * Name of customer contact person
     *
     * @maps ContactPerson
     */
    public function setContactPerson(?string $contactPerson): void
    {
        $this->contactPerson = $contactPerson;
    }

    /**
     * Returns Customer Code.
     * Customer code as known at PostNL Pakketten
     */
    public function getCustomerCode(): string
    {
        return $this->customerCode;
    }

    /**
     * Sets Customer Code.
     * Customer code as known at PostNL Pakketten
     *
     * @required
     * @maps CustomerCode
     */
    public function setCustomerCode(string $customerCode): void
    {
        $this->customerCode = $customerCode;
    }

    /**
     * Returns Customer Number.
     * Name of customer contact person
     */
    public function getCustomerNumber(): string
    {
        return $this->customerNumber;
    }

    /**
     * Sets Customer Number.
     * Name of customer contact person
     *
     * @required
     * @maps CustomerNumber
     */
    public function setCustomerNumber(string $customerNumber): void
    {
        $this->customerNumber = $customerNumber;
    }

    /**
     * Returns Email.
     * E-mail address of the customer
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Sets Email.
     * E-mail address of the customer
     *
     * @maps Email
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
    }

    /**
     * Returns Name.
     * Customer name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * Customer name
     *
     * @maps Name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Converts the LabellingCustomer object to a human-readable string representation.
     *
     * @return string The string representation of the LabellingCustomer object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LabellingCustomer',
            [
                'address' => $this->address,
                'collectionLocation' => $this->collectionLocation,
                'contactPerson' => $this->contactPerson,
                'customerCode' => $this->customerCode,
                'customerNumber' => $this->customerNumber,
                'email' => $this->email,
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
        if (isset($this->address)) {
            $json['Address']            = $this->address;
        }
        if (isset($this->collectionLocation)) {
            $json['CollectionLocation'] = $this->collectionLocation;
        }
        if (isset($this->contactPerson)) {
            $json['ContactPerson']      = $this->contactPerson;
        }
        $json['CustomerCode']           = $this->customerCode;
        $json['CustomerNumber']         = $this->customerNumber;
        if (isset($this->email)) {
            $json['Email']              = $this->email;
        }
        if (isset($this->name)) {
            $json['Name']               = $this->name;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
