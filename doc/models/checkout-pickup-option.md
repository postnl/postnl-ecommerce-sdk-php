
# Checkout Pickup Option

## Structure

`CheckoutPickupOption`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `pickupDate` | `?string` | Optional | Date from which the parcel can be picked up at the PostNL location | getPickupDate(): ?string | setPickupDate(?string pickupDate): void |
| `shippingDate` | `?string` | Optional | The date when you need to deliver the shipment to PostNL to ensure the expected delivery date is achieved. Will be returned as 'null' if not calculated | getShippingDate(): ?string | setShippingDate(?string shippingDate): void |
| `option` | `?string` | Optional | The pickup option | getOption(): ?string | setOption(?string option): void |
| `locations` | [`?(CheckoutLocation[])`](../../doc/models/checkout-location.md) | Optional | Array of pickup locations | getLocations(): ?array | setLocations(?array locations): void |

## Example (as JSON)

```json
{
  "PickupDate": "09-07-2019",
  "ShippingDate": "08-07-2019",
  "Option": "Pickup",
  "Locations": [
    {
      "Address": {
        "Street": "Street6",
        "Zipcode": "Zipcode8",
        "HouseNr": 136,
        "HouseNrExt": "HouseNrExt4",
        "Countrycode": "Countrycode2"
      },
      "PickupTime": "PickupTime0",
      "OpeningHours": {
        "Monday": {
          "From": "From0",
          "To": "To0"
        },
        "Tuesday": {
          "From": "From2",
          "To": "To2"
        },
        "Wednesday": {
          "From": "From4",
          "To": "To4"
        },
        "Thursday": {
          "From": "From0",
          "To": "To0"
        },
        "Friday": {
          "From": "From6",
          "To": "To4"
        }
      },
      "Distance": 200,
      "LocationCode": "LocationCode8"
    },
    {
      "Address": {
        "Street": "Street6",
        "Zipcode": "Zipcode8",
        "HouseNr": 136,
        "HouseNrExt": "HouseNrExt4",
        "Countrycode": "Countrycode2"
      },
      "PickupTime": "PickupTime0",
      "OpeningHours": {
        "Monday": {
          "From": "From0",
          "To": "To0"
        },
        "Tuesday": {
          "From": "From2",
          "To": "To2"
        },
        "Wednesday": {
          "From": "From4",
          "To": "To4"
        },
        "Thursday": {
          "From": "From0",
          "To": "To0"
        },
        "Friday": {
          "From": "From6",
          "To": "To4"
        }
      },
      "Distance": 200,
      "LocationCode": "LocationCode8"
    },
    {
      "Address": {
        "Street": "Street6",
        "Zipcode": "Zipcode8",
        "HouseNr": 136,
        "HouseNrExt": "HouseNrExt4",
        "Countrycode": "Countrycode2"
      },
      "PickupTime": "PickupTime0",
      "OpeningHours": {
        "Monday": {
          "From": "From0",
          "To": "To0"
        },
        "Tuesday": {
          "From": "From2",
          "To": "To2"
        },
        "Wednesday": {
          "From": "From4",
          "To": "To4"
        },
        "Thursday": {
          "From": "From0",
          "To": "To0"
        },
        "Friday": {
          "From": "From6",
          "To": "To4"
        }
      },
      "Distance": 200,
      "LocationCode": "LocationCode8"
    }
  ]
}
```

