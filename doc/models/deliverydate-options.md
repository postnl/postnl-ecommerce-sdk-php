
# Deliverydate Options

The delivery options for which a delivery date is returned. Only one delivery option is specified. See [Delivery Options](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/delivery-options) for possible values.

## Structure

`DeliverydateOptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `string` | [`?string(DeliverydateOptionEnum)`](../../doc/models/deliverydate-option-enum.md) | Optional | - | getString(): ?string | setString(?string string): void |

## Example (as JSON)

```json
{
  "string": "Afternoon"
}
```

