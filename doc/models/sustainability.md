
# Sustainability

Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/sustainability-codes) for possible values.

## Structure

`Sustainability`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | [`?string(CodeEnum)`](../../doc/models/code-enum.md) | Optional | Sustainability score code | getCode(): ?string | setCode(?string code): void |
| `description` | `?string` | Optional | Sustainability score code description | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "Code": "02",
  "Description": "Sustainable option"
}
```

