
# Checkout Delivery Option

## Structure

`CheckoutDeliveryOption`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deliveryDate` | `?string` | Optional | The possible delivery date | getDeliveryDate(): ?string | setDeliveryDate(?string deliveryDate): void |
| `timeframe` | [`?(CheckoutTimeFrame[])`](../../doc/models/checkout-time-frame.md) | Optional | Array of timeframes | getTimeframe(): ?array | setTimeframe(?array timeframe): void |

## Example (as JSON)

```json
{
  "DeliveryDate": "09-07-2019",
  "Timeframe": [
    {
      "From": "From0",
      "To": "To0",
      "Options": [
        "Today",
        "08:00-10:00",
        "08:00-12:00"
      ],
      "ShippingDate": "ShippingDate4",
      "Sustainability": {
        "Code": "02",
        "Description": "Description4"
      }
    },
    {
      "From": "From0",
      "To": "To0",
      "Options": [
        "Today",
        "08:00-10:00",
        "08:00-12:00"
      ],
      "ShippingDate": "ShippingDate4",
      "Sustainability": {
        "Code": "02",
        "Description": "Description4"
      }
    },
    {
      "From": "From0",
      "To": "To0",
      "Options": [
        "Today",
        "08:00-10:00",
        "08:00-12:00"
      ],
      "ShippingDate": "ShippingDate4",
      "Sustainability": {
        "Code": "02",
        "Description": "Description4"
      }
    }
  ]
}
```

