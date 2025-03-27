
# Shippingstatus Response Updated Shipment

## Structure

`ShippingstatusResponseUpdatedShipment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `barcode` | `?string` | Optional | The barcode belonging to the status update | getBarcode(): ?string | setBarcode(?string barcode): void |
| `creationDate` | `?string` | Optional | The date of the update | getCreationDate(): ?string | setCreationDate(?string creationDate): void |
| `customerNumber` | `?string` | Optional | The customer number | getCustomerNumber(): ?string | setCustomerNumber(?string customerNumber): void |
| `customerCode` | `?string` | Optional | The customer code | getCustomerCode(): ?string | setCustomerCode(?string customerCode): void |
| `status` | [`?UpdatedShipmentStatus`](../../doc/models/updated-shipment-status.md) | Optional | The status update. See [Status codes](https://developer.postnl.nl/docs/#/http/reference-data/error-codes) for possible values. | getStatus(): ?UpdatedShipmentStatus | setStatus(?UpdatedShipmentStatus status): void |

## Example (as JSON)

```json
{
  "Barcode": "3SDEVC5672025",
  "CreationDate": "11/07/2022 00:00:00",
  "CustomerNumber": "11223344",
  "CustomerCode": "DEVC",
  "Status": {
    "Timestamp": "Timestamp8",
    "StatusCode": "StatusCode8",
    "StatusDescription": "StatusDescription0",
    "PhaseCode": "PhaseCode2",
    "PhaseDescription": "PhaseDescription8"
  }
}
```

