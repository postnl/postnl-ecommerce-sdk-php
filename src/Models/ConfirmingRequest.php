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

class ConfirmingRequest implements \JsonSerializable
{
    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var ConfirmingMessage
     */
    private $message;

    /**
     * @var ConfirmingShipment[]
     */
    private $shipments;

    /**
     * @param Customer $customer
     * @param ConfirmingMessage $message
     * @param ConfirmingShipment[] $shipments
     */
    public function __construct(Customer $customer, ConfirmingMessage $message, array $shipments)
    {
        $this->customer = $customer;
        $this->message = $message;
        $this->shipments = $shipments;
    }

    /**
     * Returns Customer.
     */
    public function getCustomer(): Customer
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     *
     * @required
     * @maps Customer
     */
    public function setCustomer(Customer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): ConfirmingMessage
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @required
     * @maps Message
     */
    public function setMessage(ConfirmingMessage $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Shipments.
     * List of 1 or more Shipments. At least 1 shipment is required.
     *
     * @return ConfirmingShipment[]
     */
    public function getShipments(): array
    {
        return $this->shipments;
    }

    /**
     * Sets Shipments.
     * List of 1 or more Shipments. At least 1 shipment is required.
     *
     * @required
     * @maps Shipments
     *
     * @param ConfirmingShipment[] $shipments
     */
    public function setShipments(array $shipments): void
    {
        $this->shipments = $shipments;
    }

    /**
     * Converts the ConfirmingRequest object to a human-readable string representation.
     *
     * @return string The string representation of the ConfirmingRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ConfirmingRequest',
            ['customer' => $this->customer, 'message' => $this->message, 'shipments' => $this->shipments]
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
        $json['Customer']  = $this->customer;
        $json['Message']   = $this->message;
        $json['Shipments'] = $this->shipments;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
