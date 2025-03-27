
# Labelling Merged Label

## Structure

`LabellingMergedLabel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `barcodes` | `?(string[])` | Optional | - | getBarcodes(): ?array | setBarcodes(?array barcodes): void |
| `labels` | [`?(LabellingLabel[])`](../../doc/models/labelling-label.md) | Optional | - | getLabels(): ?array | setLabels(?array labels): void |

## Example (as JSON)

```json
{
  "Barcodes": [
    "Barcodes9",
    "Barcodes0",
    "Barcodes1"
  ],
  "Labels": [
    {
      "Content": "Content4",
      "Labeltype": "Labeltype2",
      "OutputType": "OutputType4"
    },
    {
      "Content": "Content4",
      "Labeltype": "Labeltype2",
      "OutputType": "OutputType4"
    },
    {
      "Content": "Content4",
      "Labeltype": "Labeltype2",
      "OutputType": "OutputType4"
    }
  ]
}
```

