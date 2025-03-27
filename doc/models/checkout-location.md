
# Checkout Location

## Structure

`CheckoutLocation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `address` | [`?CheckoutPickupAddress`](../../doc/models/checkout-pickup-address.md) | Optional | The pickup location address | getAddress(): ?CheckoutPickupAddress | setAddress(?CheckoutPickupAddress address): void |
| `pickupTime` | `?string` | Optional | Time from when the parcel can be retrieved at the pickup location | getPickupTime(): ?string | setPickupTime(?string pickupTime): void |
| `openingHours` | [`?OpeningHours`](../../doc/models/opening-hours.md) | Optional | The standard opening hours of the pickup location | getOpeningHours(): ?OpeningHours | setOpeningHours(?OpeningHours openingHours): void |
| `distance` | `?int` | Optional | The calculated distance (in meters) between the location specified and the address provided in the request | getDistance(): ?int | setDistance(?int distance): void |
| `locationCode` | `?string` | Optional | The location identifier | getLocationCode(): ?string | setLocationCode(?string locationCode): void |
| `partnerID` | `?string` | Optional | The partner identifier; not used anymore | getPartnerID(): ?string | setPartnerID(?string partnerID): void |
| `sustainability` | [`?Sustainability`](../../doc/models/sustainability.md) | Optional | Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/sustainability-codes) for possible values. | getSustainability(): ?Sustainability | setSustainability(?Sustainability sustainability): void |

## Example (as JSON)

```json
{
  "PickupTime": "15:00",
  "Distance": 234,
  "LocationCode": "8101163043",
  "PartnerID": "PNPNL-01",
  "Address": {
    "Street": "Street6",
    "Zipcode": "Zipcode8",
    "HouseNr": 136,
    "HouseNrExt": "HouseNrExt4",
    "Countrycode": "Countrycode2"
  },
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
  }
}
```

