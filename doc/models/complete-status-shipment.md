
# Complete Status Shipment

## Structure

`CompleteStatusShipment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mainBarcode` | `?string` | Optional | The main barcode of the shipment | getMainBarcode(): ?string | setMainBarcode(?string mainBarcode): void |
| `barcode` | `?string` | Optional | The barcode of the shipment | getBarcode(): ?string | setBarcode(?string barcode): void |
| `shipmentAmount` | `?string` | Optional | The amount of parcels in the multi-collo shipment | getShipmentAmount(): ?string | setShipmentAmount(?string shipmentAmount): void |
| `shipmentCounter` | `?string` | Optional | The sequence of this parcel in the multi-collo shipment | getShipmentCounter(): ?string | setShipmentCounter(?string shipmentCounter): void |
| `customer` | [`?ShippingstatusCustomer`](../../doc/models/shippingstatus-customer.md) | Optional | - | getCustomer(): ?ShippingstatusCustomer | setCustomer(?ShippingstatusCustomer customer): void |
| `productCode` | `?string` | Optional | The product code of the shipment | getProductCode(): ?string | setProductCode(?string productCode): void |
| `productDescription` | `?string` | Optional | The description of the product code | getProductDescription(): ?string | setProductDescription(?string productDescription): void |
| `reference` | `?string` | Optional | The customer reference belonging to the shipment | getReference(): ?string | setReference(?string reference): void |
| `deliveryDate` | `?string` | Optional | The expected delivery date of the shipment | getDeliveryDate(): ?string | setDeliveryDate(?string deliveryDate): void |
| `dimension` | [`?ShippingstatusDimension`](../../doc/models/shippingstatus-dimension.md) | Optional | - | getDimension(): ?ShippingstatusDimension | setDimension(?ShippingstatusDimension dimension): void |
| `amount` | [`?ShippingstatusAmount`](../../doc/models/shippingstatus-amount.md) | Optional | The amounts belonging to the shipment | getAmount(): ?ShippingstatusAmount | setAmount(?ShippingstatusAmount amount): void |
| `address` | [`?(ShippingstatusAddress[])`](../../doc/models/shippingstatus-address.md) | Optional | A list of addresses belonging to the shipment | getAddress(): ?array | setAddress(?array address): void |
| `event` | [`?(Event[])`](../../doc/models/event.md) | Optional | The events of the shipment. (see the [Event Codes](https://developer.postnl.nl/docs/#/http/reference-data/t-t-status-codes/event-codes) for possible values. | getEvent(): ?array | setEvent(?array event): void |
| `expectation` | [`?Expectation`](../../doc/models/expectation.md) | Optional | The expected delivery timeframe | getExpectation(): ?Expectation | setExpectation(?Expectation expectation): void |
| `productOptions` | [`?(ShippingstatusProductOptions[])`](../../doc/models/shippingstatus-product-options.md) | Optional | A list of product options. | getProductOptions(): ?array | setProductOptions(?array productOptions): void |
| `status` | [`?Status`](../../doc/models/status.md) | Optional | The current status of the shipment (see the [Status codes](https://developer.postnl.nl/docs/#/http/reference-data/t-t-status-codes/event-codes) for possible values. | getStatus(): ?Status | setStatus(?Status status): void |
| `oldStatus` | [`?(OldStatus[])`](../../doc/models/old-status.md) | Optional | A list of previous status codes (see the [Status codes](https://developer.postnl.nl/docs/#/http/reference-data/t-t-status-codes/event-codes) for possible values. | getOldStatus(): ?array | setOldStatus(?array oldStatus): void |

## Example (as JSON)

```json
{
  "MainBarcode": "3SDEVC6659149",
  "Barcode": "3SDEVC6659149",
  "ShipmentAmount": "2",
  "ShipmentCounter": "1",
  "ProductCode": "003085",
  "ProductDescription": "Standaard Zending",
  "Reference": "REF-1234567",
  "DeliveryDate": "2016-04-20",
  "Customer": {
    "CustomerCode": "CustomerCode8",
    "CustomerNumber": "CustomerNumber0",
    "Name": "Name8"
  }
}
```

