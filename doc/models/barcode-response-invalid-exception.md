
# Barcode Response Invalid Exception

## Structure

`BarcodeResponseInvalidException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(BarcodeError[])`](../../doc/models/barcode-error.md) | Optional | A list of errors. See [Error codes](https://developer.postnl.nl/docs/#/http/reference-data/error-codes) for possible values. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "errors": [
    {
      "ErrorMsg": "ErrorMsg2",
      "ErrorNumber": "ErrorNumber0"
    }
  ]
}
```

