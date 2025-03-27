
# Current Status

The current status and old statuses of the shipment

## Structure

`CurrentStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `shipment` | [`?CurrentStatusShipment`](../../doc/models/current-status-shipment.md) | Optional | - | getShipment(): ?CurrentStatusShipment | setShipment(?CurrentStatusShipment shipment): void |

## Example (as JSON)

```json
{
  "Shipment": {
    "MainBarcode": "MainBarcode4",
    "Barcode": "Barcode4",
    "ShipmentAmount": "ShipmentAmount0",
    "ShipmentCounter": "ShipmentCounter6",
    "Customer": {
      "CustomerCode": "CustomerCode8",
      "CustomerNumber": "CustomerNumber0",
      "Name": "Name8"
    }
  }
}
```

