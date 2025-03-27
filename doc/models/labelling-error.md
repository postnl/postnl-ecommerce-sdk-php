
# Labelling Error

## Structure

`LabellingError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `error` | `?string` | Optional | The error reason | getError(): ?string | setError(?string error): void |
| `code` | `?string` | Optional | The error code | getCode(): ?string | setCode(?string code): void |
| `description` | `?string` | Optional | The description of the error | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "Error": "Validation failed for shipment: 3SDEVC949511897",
  "Code": "1280202",
  "Description": "Incorrect address specified in address type Sender"
}
```

