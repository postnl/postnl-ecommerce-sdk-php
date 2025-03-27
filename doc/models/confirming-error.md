
# Confirming Error

## Structure

`ConfirmingError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | The error code | getCode(): ?string | setCode(?string code): void |
| `description` | `?string` | Optional | The error description | getDescription(): ?string | setDescription(?string description): void |

## Example (as JSON)

```json
{
  "Code": "10302",
  "Description": "Length of 3S type barcode must be between 13 and 15"
}
```

