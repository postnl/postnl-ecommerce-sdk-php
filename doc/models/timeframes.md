
# Timeframes

## Structure

`Timeframes`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `timeframe` | [`?(Timeframe[])`](../../doc/models/timeframe.md) | Optional | A calculated delivery timeframe | getTimeframe(): ?array | setTimeframe(?array timeframe): void |

## Example (as JSON)

```json
{
  "Timeframe": [
    {
      "Date": "Date2",
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
  ]
}
```

