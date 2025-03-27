
# Fault

## Structure

`Fault`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `faultstring` | `?string` | Optional | - | getFaultstring(): ?string | setFaultstring(?string faultstring): void |
| `detail` | [`?Detail`](../../doc/models/detail.md) | Optional | - | getDetail(): ?Detail | setDetail(?Detail detail): void |

## Example (as JSON)

```json
{
  "faultstring": "Unexpected token in object literal",
  "detail": {
    "errorcode": "errorcode6"
  }
}
```

