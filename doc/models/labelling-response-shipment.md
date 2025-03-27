
# Labelling Response Shipment

## Structure

`LabellingResponseShipment`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productCodeDelivery` | `?string` | Optional | The product code of the shipment | getProductCodeDelivery(): ?string | setProductCodeDelivery(?string productCodeDelivery): void |
| `labels` | [`?(LabellingLabel[])`](../../doc/models/labelling-label.md) | Optional | All labels belonging to the selected product | getLabels(): ?array | setLabels(?array labels): void |
| `barcode` | `?string` | Optional | The barcode used on the label | getBarcode(): ?string | setBarcode(?string barcode): void |
| `errors` | `?(array[])` | Optional | - | getErrors(): ?array | setErrors(?array errors): void |
| `warnings` | [`?(Warning[])`](../../doc/models/warning.md) | Optional | Possible warnings. See the [Error Codes](https://developer.postnl.nl/docs/#/http/reference-data/error-codes) for possible values | getWarnings(): ?array | setWarnings(?array warnings): void |

## Example (as JSON)

```json
{
  "ProductCodeDelivery": "3085",
  "Barcode": "3SDEVC281677095",
  "Labels": [
    {
      "Content": "Content4",
      "Labeltype": "Labeltype2",
      "OutputType": "OutputType4"
    }
  ],
  "Errors": [
    {
      "key1": "val1",
      "key2": "val2"
    },
    {
      "key1": "val1",
      "key2": "val2"
    },
    {
      "key1": "val1",
      "key2": "val2"
    }
  ],
  "Warnings": [
    {
      "Code": "Code4",
      "Description": "Description8"
    }
  ]
}
```

