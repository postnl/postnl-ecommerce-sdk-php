
# Postalcode Check Error

## Structure

`PostalcodeCheckError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `title` | `?string` | Optional | - | getTitle(): ?string | setTitle(?string title): void |
| `detail` | `?string` | Optional | - | getDetail(): ?string | setDetail(?string detail): void |

## Example (as JSON)

```json
{
  "status": "400",
  "title": "Bad request",
  "detail": "Input field 'housenumber' must be a number"
}
```

