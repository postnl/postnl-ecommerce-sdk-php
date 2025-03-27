
# Reason No Timeframe

## Structure

`ReasonNoTimeframe`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | The reason code | getCode(): ?string | setCode(?string code): void |
| `date` | `?string` | Optional | The date associated with the reason no timeframe was calculated | getDate(): ?string | setDate(?string date): void |
| `description` | `?string` | Optional | The description associated with the reason no timeframe was calculated | getDescription(): ?string | setDescription(?string description): void |
| `options` | [`?NoTimeframesOptions`](../../doc/models/no-timeframes-options.md) | Optional | The option for which no timeframe was calculated for a specific date | getOptions(): ?NoTimeframesOptions | setOptions(?NoTimeframesOptions options): void |
| `sustainability` | [`?Sustainability`](../../doc/models/sustainability.md) | Optional | Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/sustainability-codes) for possible values. | getSustainability(): ?Sustainability | setSustainability(?Sustainability sustainability): void |

## Example (as JSON)

```json
{
  "Code": "1",
  "Date": "02-07-2022",
  "Description": "Delivery date not allowed",
  "Options": {
    "string": "Morning"
  },
  "Sustainability": {
    "Code": "02",
    "Description": "Description4"
  }
}
```

