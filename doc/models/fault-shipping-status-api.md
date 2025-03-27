
# Fault Shipping Status API

## Structure

`FaultShippingStatusAPI`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `faultstring` | `?string` | Optional | - | getFaultstring(): ?string | setFaultstring(?string faultstring): void |
| `detail` | [`?Detail`](../../doc/models/detail.md) | Optional | - | getDetail(): ?Detail | setDetail(?Detail detail): void |

## Example (as JSON)

```json
{
  "faultstring": "no barcode supplied in path",
  "detail": {
    "errorcode": "errorcode6"
  }
}
```

