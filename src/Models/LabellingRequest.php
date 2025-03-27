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

class LabellingRequest implements \JsonSerializable
{
    /**
     * @var LabellingCustomer
     */
    private $customer;

    /**
     * @var string|null
     */
    private $labelSignature;

    /**
     * @var LabellingCustomerMessage
     */
    private $message;

    /**
     * @var LabellingCustomerShipment[]
     */
    private $shipments;

    /**
     * @param LabellingCustomer $customer
     * @param LabellingCustomerMessage $message
     * @param LabellingCustomerShipment[] $shipments
     */
    public function __construct(LabellingCustomer $customer, LabellingCustomerMessage $message, array $shipments)
    {
        $this->customer = $customer;
        $this->message = $message;
        $this->shipments = $shipments;
    }

    /**
     * Returns Customer.
     */
    public function getCustomer(): LabellingCustomer
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     *
     * @required
     * @maps Customer
     */
    public function setCustomer(LabellingCustomer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * Returns Label Signature.
     * GIF image of the signature (as a base64 encoded string) max size: 280x60 mm (1058x226 pixels). This
     * can be used to automatically sign the customs forms. The value of this element can have a maximum
     * size of 65536 characters. Note that the total request can have a maximum size of 200KB. Larger
     * requests will not be accepted by the server for performance reasons. Requests that exceed this limit
     * will not return a validation error,but a HTTP 404 error.
     */
    public function getLabelSignature(): ?string
    {
        return $this->labelSignature;
    }

    /**
     * Sets Label Signature.
     * GIF image of the signature (as a base64 encoded string) max size: 280x60 mm (1058x226 pixels). This
     * can be used to automatically sign the customs forms. The value of this element can have a maximum
     * size of 65536 characters. Note that the total request can have a maximum size of 200KB. Larger
     * requests will not be accepted by the server for performance reasons. Requests that exceed this limit
     * will not return a validation error,but a HTTP 404 error.
     *
     * @maps LabelSignature
     */
    public function setLabelSignature(?string $labelSignature): void
    {
        $this->labelSignature = $labelSignature;
    }

    /**
     * Returns Message.
     */
    public function getMessage(): LabellingCustomerMessage
    {
        return $this->message;
    }

    /**
     * Sets Message.
     *
     * @required
     * @maps Message
     */
    public function setMessage(LabellingCustomerMessage $message): void
    {
        $this->message = $message;
    }

    /**
     * Returns Shipments.
     * List of 1 or more Shipments. At least 1 shipment is required.
     *
     * @return LabellingCustomerShipment[]
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
     * @param LabellingCustomerShipment[] $shipments
     */
    public function setShipments(array $shipments): void
    {
        $this->shipments = $shipments;
    }

    /**
     * Converts the LabellingRequest object to a human-readable string representation.
     *
     * @return string The string representation of the LabellingRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LabellingRequest',
            [
                'customer' => $this->customer,
                'labelSignature' => $this->labelSignature,
                'message' => $this->message,
                'shipments' => $this->shipments
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
        $json['Customer']           = $this->customer;
        if (isset($this->labelSignature)) {
            $json['LabelSignature'] = $this->labelSignature;
        }
        $json['Message']            = $this->message;
        $json['Shipments']          = $this->shipments;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
