
# Delivery Options

The options belonging to the pickup location. The delivery options RETA, UL, PU, DO, BW, RT and BWUL can be shown in the response. Please ignore these codes. These codes are internal PostNL codes.

## Structure

`DeliveryOptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `string` | `?(string[])` | Optional | - | getString(): ?array | setString(?array string): void |

## Example (as JSON)

```json
{
  "string": [
    "RETA",
    "DO",
    "PG",
    "RT"
  ]
}
```

