
# Labelling Label

## Structure

`LabellingLabel`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `content` | `?string` | Optional | Base64 encoded label content | getContent(): ?string | setContent(?string content): void |
| `labeltype` | `?string` | Optional | Type of the label. See possible [Label types](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/label-types) | getLabeltype(): ?string | setLabeltype(?string labeltype): void |
| `outputType` | `?string` | Optional | Content type of the label, e.g. zebra of pdf. | getOutputType(): ?string | setOutputType(?string outputType): void |

## Example (as JSON)

```json
{
  "Content": "JVBERi0xLjMKJeLjz9MKNSAwIG9iago8PAovQ29udGVudHMg[TRUNCATED]",
  "Labeltype": "Label",
  "OutputType": "PDF"
}
```

