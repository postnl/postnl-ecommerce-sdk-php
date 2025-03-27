
# Barcode Error

## Structure

`BarcodeError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errorMsg` | `?string` | Optional | The error message | getErrorMsg(): ?string | setErrorMsg(?string errorMsg): void |
| `errorNumber` | `?string` | Optional | The error code | getErrorNumber(): ?string | setErrorNumber(?string errorNumber): void |

## Example (as JSON)

```json
{
  "ErrorMsg": "Too many numbers in series",
  "ErrorNumber": "8"
}
```

