
# Confirming Response

## Structure

`ConfirmingResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `responseShipments` | [`?(ConfirmingResponseShipment[])`](../../doc/models/confirming-response-shipment.md) | Optional | - | getResponseShipments(): ?array | setResponseShipments(?array responseShipments): void |

## Example (as JSON)

```json
{
  "ResponseShipments": [
    {
      "Errors": [
        {
          "Code": "Code4",
          "Description": "Description2"
        },
        {
          "Code": "Code4",
          "Description": "Description2"
        }
      ],
      "Warnings": [
        {
          "Code": "Code4",
          "Description": "Description8"
        }
      ],
      "Barcode": "Barcode0"
    }
  ]
}
```

