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

class CompleteStatusShipment implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $mainBarcode;

    /**
     * @var string|null
     */
    private $barcode;

    /**
     * @var string|null
     */
    private $shipmentAmount;

    /**
     * @var string|null
     */
    private $shipmentCounter;

    /**
     * @var ShippingstatusCustomer|null
     */
    private $customer;

    /**
     * @var string|null
     */
    private $productCode;

    /**
     * @var string|null
     */
    private $productDescription;

    /**
     * @var string|null
     */
    private $reference;

    /**
     * @var string|null
     */
    private $deliveryDate;

    /**
     * @var ShippingstatusDimension|null
     */
    private $dimension;

    /**
     * @var ShippingstatusAmount|null
     */
    private $amount;

    /**
     * @var ShippingstatusAddress[]|null
     */
    private $address;

    /**
     * @var Event[]|null
     */
    private $event;

    /**
     * @var Expectation|null
     */
    private $expectation;

    /**
     * @var ShippingstatusProductOptions[]|null
     */
    private $productOptions;

    /**
     * @var Status|null
     */
    private $status;

    /**
     * @var OldStatus[]|null
     */
    private $oldStatus;

    /**
     * Returns Main Barcode.
     * The main barcode of the shipment
     */
    public function getMainBarcode(): ?string
    {
        return $this->mainBarcode;
    }

    /**
     * Sets Main Barcode.
     * The main barcode of the shipment
     *
     * @maps MainBarcode
     */
    public function setMainBarcode(?string $mainBarcode): void
    {
        $this->mainBarcode = $mainBarcode;
    }

    /**
     * Returns Barcode.
     * The barcode of the shipment
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * Sets Barcode.
     * The barcode of the shipment
     *
     * @maps Barcode
     */
    public function setBarcode(?string $barcode): void
    {
        $this->barcode = $barcode;
    }

    /**
     * Returns Shipment Amount.
     * The amount of parcels in the multi-collo shipment
     */
    public function getShipmentAmount(): ?string
    {
        return $this->shipmentAmount;
    }

    /**
     * Sets Shipment Amount.
     * The amount of parcels in the multi-collo shipment
     *
     * @maps ShipmentAmount
     */
    public function setShipmentAmount(?string $shipmentAmount): void
    {
        $this->shipmentAmount = $shipmentAmount;
    }

    /**
     * Returns Shipment Counter.
     * The sequence of this parcel in the multi-collo shipment
     */
    public function getShipmentCounter(): ?string
    {
        return $this->shipmentCounter;
    }

    /**
     * Sets Shipment Counter.
     * The sequence of this parcel in the multi-collo shipment
     *
     * @maps ShipmentCounter
     */
    public function setShipmentCounter(?string $shipmentCounter): void
    {
        $this->shipmentCounter = $shipmentCounter;
    }

    /**
     * Returns Customer.
     */
    public function getCustomer(): ?ShippingstatusCustomer
    {
        return $this->customer;
    }

    /**
     * Sets Customer.
     *
     * @maps Customer
     */
    public function setCustomer(?ShippingstatusCustomer $customer): void
    {
        $this->customer = $customer;
    }

    /**
     * Returns Product Code.
     * The product code of the shipment
     */
    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    /**
     * Sets Product Code.
     * The product code of the shipment
     *
     * @maps ProductCode
     */
    public function setProductCode(?string $productCode): void
    {
        $this->productCode = $productCode;
    }

    /**
     * Returns Product Description.
     * The description of the product code
     */
    public function getProductDescription(): ?string
    {
        return $this->productDescription;
    }

    /**
     * Sets Product Description.
     * The description of the product code
     *
     * @maps ProductDescription
     */
    public function setProductDescription(?string $productDescription): void
    {
        $this->productDescription = $productDescription;
    }

    /**
     * Returns Reference.
     * The customer reference belonging to the shipment
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Sets Reference.
     * The customer reference belonging to the shipment
     *
     * @maps Reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * Returns Delivery Date.
     * The expected delivery date of the shipment
     */
    public function getDeliveryDate(): ?string
    {
        return $this->deliveryDate;
    }

    /**
     * Sets Delivery Date.
     * The expected delivery date of the shipment
     *
     * @maps DeliveryDate
     */
    public function setDeliveryDate(?string $deliveryDate): void
    {
        $this->deliveryDate = $deliveryDate;
    }

    /**
     * Returns Dimension.
     */
    public function getDimension(): ?ShippingstatusDimension
    {
        return $this->dimension;
    }

    /**
     * Sets Dimension.
     *
     * @maps Dimension
     */
    public function setDimension(?ShippingstatusDimension $dimension): void
    {
        $this->dimension = $dimension;
    }

    /**
     * Returns Amount.
     * The amounts belonging to the shipment
     */
    public function getAmount(): ?ShippingstatusAmount
    {
        return $this->amount;
    }

    /**
     * Sets Amount.
     * The amounts belonging to the shipment
     *
     * @maps Amount
     */
    public function setAmount(?ShippingstatusAmount $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * Returns Address.
     * A list of addresses belonging to the shipment
     *
     * @return ShippingstatusAddress[]|null
     */
    public function getAddress(): ?array
    {
        return $this->address;
    }

    /**
     * Sets Address.
     * A list of addresses belonging to the shipment
     *
     * @maps Address
     *
     * @param ShippingstatusAddress[]|null $address
     */
    public function setAddress(?array $address): void
    {
        $this->address = $address;
    }

    /**
     * Returns Event.
     * The events of the shipment. (see the [Event Codes](https://developer.postnl.nl/docs/#/http/reference-
     * data/t-t-status-codes/event-codes) for possible values.
     *
     * @return Event[]|null
     */
    public function getEvent(): ?array
    {
        return $this->event;
    }

    /**
     * Sets Event.
     * The events of the shipment. (see the [Event Codes](https://developer.postnl.nl/docs/#/http/reference-
     * data/t-t-status-codes/event-codes) for possible values.
     *
     * @maps Event
     *
     * @param Event[]|null $event
     */
    public function setEvent(?array $event): void
    {
        $this->event = $event;
    }

    /**
     * Returns Expectation.
     * The expected delivery timeframe
     */
    public function getExpectation(): ?Expectation
    {
        return $this->expectation;
    }

    /**
     * Sets Expectation.
     * The expected delivery timeframe
     *
     * @maps Expectation
     */
    public function setExpectation(?Expectation $expectation): void
    {
        $this->expectation = $expectation;
    }

    /**
     * Returns Product Options.
     * A list of product options.
     *
     * @return ShippingstatusProductOptions[]|null
     */
    public function getProductOptions(): ?array
    {
        return $this->productOptions;
    }

    /**
     * Sets Product Options.
     * A list of product options.
     *
     * @maps ProductOptions
     *
     * @param ShippingstatusProductOptions[]|null $productOptions
     */
    public function setProductOptions(?array $productOptions): void
    {
        $this->productOptions = $productOptions;
    }

    /**
     * Returns Status.
     * The current status of the shipment (see the [Status codes](https://developer.postnl.
     * nl/docs/#/http/reference-data/t-t-status-codes/event-codes) for possible values.
     */
    public function getStatus(): ?Status
    {
        return $this->status;
    }

    /**
     * Sets Status.
     * The current status of the shipment (see the [Status codes](https://developer.postnl.
     * nl/docs/#/http/reference-data/t-t-status-codes/event-codes) for possible values.
     *
     * @maps Status
     */
    public function setStatus(?Status $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Old Status.
     * A list of previous status codes (see the [Status codes](https://developer.postnl.
     * nl/docs/#/http/reference-data/t-t-status-codes/event-codes) for possible values.
     *
     * @return OldStatus[]|null
     */
    public function getOldStatus(): ?array
    {
        return $this->oldStatus;
    }

    /**
     * Sets Old Status.
     * A list of previous status codes (see the [Status codes](https://developer.postnl.
     * nl/docs/#/http/reference-data/t-t-status-codes/event-codes) for possible values.
     *
     * @maps OldStatus
     *
     * @param OldStatus[]|null $oldStatus
     */
    public function setOldStatus(?array $oldStatus): void
    {
        $this->oldStatus = $oldStatus;
    }

    /**
     * Converts the CompleteStatusShipment object to a human-readable string representation.
     *
     * @return string The string representation of the CompleteStatusShipment object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CompleteStatusShipment',
            [
                'mainBarcode' => $this->mainBarcode,
                'barcode' => $this->barcode,
                'shipmentAmount' => $this->shipmentAmount,
                'shipmentCounter' => $this->shipmentCounter,
                'customer' => $this->customer,
                'productCode' => $this->productCode,
                'productDescription' => $this->productDescription,
                'reference' => $this->reference,
                'deliveryDate' => $this->deliveryDate,
                'dimension' => $this->dimension,
                'amount' => $this->amount,
                'address' => $this->address,
                'event' => $this->event,
                'expectation' => $this->expectation,
                'productOptions' => $this->productOptions,
                'status' => $this->status,
                'oldStatus' => $this->oldStatus
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
        if (isset($this->mainBarcode)) {
            $json['MainBarcode']        = $this->mainBarcode;
        }
        if (isset($this->barcode)) {
            $json['Barcode']            = $this->barcode;
        }
        if (isset($this->shipmentAmount)) {
            $json['ShipmentAmount']     = $this->shipmentAmount;
        }
        if (isset($this->shipmentCounter)) {
            $json['ShipmentCounter']    = $this->shipmentCounter;
        }
        if (isset($this->customer)) {
            $json['Customer']           = $this->customer;
        }
        if (isset($this->productCode)) {
            $json['ProductCode']        = $this->productCode;
        }
        if (isset($this->productDescription)) {
            $json['ProductDescription'] = $this->productDescription;
        }
        if (isset($this->reference)) {
            $json['Reference']          = $this->reference;
        }
        if (isset($this->deliveryDate)) {
            $json['DeliveryDate']       = $this->deliveryDate;
        }
        if (isset($this->dimension)) {
            $json['Dimension']          = $this->dimension;
        }
        if (isset($this->amount)) {
            $json['Amount']             = $this->amount;
        }
        if (isset($this->address)) {
            $json['Address']            = $this->address;
        }
        if (isset($this->event)) {
            $json['Event']              = $this->event;
        }
        if (isset($this->expectation)) {
            $json['Expectation']        = $this->expectation;
        }
        if (isset($this->productOptions)) {
            $json['ProductOptions']     = $this->productOptions;
        }
        if (isset($this->status)) {
            $json['Status']             = $this->status;
        }
        if (isset($this->oldStatus)) {
            $json['OldStatus']          = $this->oldStatus;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
