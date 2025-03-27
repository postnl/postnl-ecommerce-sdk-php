
# Labelling Response

## Structure

`LabellingResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `mergedLabels` | [`?(LabellingMergedLabel[])`](../../doc/models/labelling-merged-label.md) | Optional | The merged label output; only returned if the printer type selected in your request merges the pdf labels into a single file (e.g. using GraphicFile\|Merge). | getMergedLabels(): ?array | setMergedLabels(?array mergedLabels): void |
| `responseShipments` | [`?(LabellingResponseShipment[])`](../../doc/models/labelling-response-shipment.md) | Optional | - | getResponseShipments(): ?array | setResponseShipments(?array responseShipments): void |

## Example (as JSON)

```json
{
  "MergedLabels": [
    {
      "Barcodes": [
        "Barcodes9"
      ],
      "Labels": [
        {
          "Content": "Content4",
          "Labeltype": "Labeltype2",
          "OutputType": "OutputType4"
        }
      ]
    },
    {
      "Barcodes": [
        "Barcodes9"
      ],
      "Labels": [
        {
          "Content": "Content4",
          "Labeltype": "Labeltype2",
          "OutputType": "OutputType4"
        }
      ]
    }
  ],
  "ResponseShipments": [
    {
      "ProductCodeDelivery": "ProductCodeDelivery2",
      "Labels": [
        {
          "Content": "Content4",
          "Labeltype": "Labeltype2",
          "OutputType": "OutputType4"
        }
      ],
      "Barcode": "Barcode0",
      "Errors": [
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
    },
    {
      "ProductCodeDelivery": "ProductCodeDelivery2",
      "Labels": [
        {
          "Content": "Content4",
          "Labeltype": "Labeltype2",
          "OutputType": "OutputType4"
        }
      ],
      "Barcode": "Barcode0",
      "Errors": [
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
  ]
}
```

