
# Timeframe

## Structure

`Timeframe`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `date` | `?string` | Optional | The expected date of delivery | getDate(): ?string | setDate(?string date): void |
| `timeframes` | [`?TimeframesResponseObject`](../../doc/models/timeframes-response-object.md) | Optional | - | getTimeframes(): ?TimeframesResponseObject | setTimeframes(?TimeframesResponseObject timeframes): void |

## Example (as JSON)

```json
{
  "Date": "02-07-2022",
  "Timeframes": {
    "TimeframeTimeframe": [
      {
        "From": "From8",
        "Options": {
          "string": "Morning"
        },
        "To": "To2",
        "Sustainability": {
          "Code": "02",
          "Description": "Description4"
        }
      },
      {
        "From": "From8",
        "Options": {
          "string": "Morning"
        },
        "To": "To2",
        "Sustainability": {
          "Code": "02",
          "Description": "Description4"
        }
      }
    ]
  }
}
```

