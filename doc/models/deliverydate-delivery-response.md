
# Deliverydate Delivery Response

## Structure

`DeliverydateDeliveryResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deliveryDate` | `?string` | Optional | - | getDeliveryDate(): ?string | setDeliveryDate(?string deliveryDate): void |
| `options` | [`?DeliverydateOptions`](../../doc/models/deliverydate-options.md) | Optional | The delivery options for which a delivery date is returned. Only one delivery option is specified. See [Delivery Options](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/delivery-options) for possible values. | getOptions(): ?DeliverydateOptions | setOptions(?DeliverydateOptions options): void |
| `sustainability` | [`?Sustainability`](../../doc/models/sustainability.md) | Optional | Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/sustainability-codes) for possible values. | getSustainability(): ?Sustainability | setSustainability(?Sustainability sustainability): void |

## Example (as JSON)

```json
{
  "DeliveryDate": "30-05-2022",
  "Options": {
    "string": "Today"
  },
  "Sustainability": {
    "Code": "02",
    "Description": "Description4"
  }
}
```

