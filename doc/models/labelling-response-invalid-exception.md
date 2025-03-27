
# Labelling Response Invalid Exception

## Structure

`LabellingResponseInvalidException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(LabellingError[])`](../../doc/models/labelling-error.md) | Optional | A list of errors returned from the webservice. See the [Error codes](https://developer.postnl.nl/docs/#/http/reference-data/error-codes) for possible values. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "Errors": [
    {
      "Error": "Error8",
      "Code": "Code4",
      "Description": "Description2"
    }
  ]
}
```

