
# Timeframe Timeframe

## Structure

`TimeframeTimeframe`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `from` | `?string` | Optional | The start time of the expected delivery window | getFrom(): ?string | setFrom(?string from): void |
| `options` | [`?Options`](../../doc/models/options.md) | Optional | The delivery option for which the timeframe is calculated. See [Delivery Options](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/delivery-options) for possible values. | getOptions(): ?Options | setOptions(?Options options): void |
| `to` | `?string` | Optional | The end time of the expected delivery window | getTo(): ?string | setTo(?string to): void |
| `sustainability` | [`?Sustainability`](../../doc/models/sustainability.md) | Optional | Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/sustainability-codes) for possible values. | getSustainability(): ?Sustainability | setSustainability(?Sustainability sustainability): void |

## Example (as JSON)

```json
{
  "From": "12:30:00",
  "To": "14:30:00",
  "Options": {
    "string": "Morning"
  },
  "Sustainability": {
    "Code": "02",
    "Description": "Description4"
  }
}
```

