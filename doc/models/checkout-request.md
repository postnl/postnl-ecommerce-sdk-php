
# Checkout Request

## Structure

`CheckoutRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `orderDate` | `string` | Required | The order date of the shipment. Format dd-MM-YYYY HH:mm:ss<br>**Constraints**: *Pattern*: `^[0-3]\d-[0-1]\d-20\d{2}\s[0-2]\d:[0-5]\d:[0-5]\d$` | getOrderDate(): string | setOrderDate(string orderDate): void |
| `shippingDuration` | `?int` | Optional | The amount of days it takes for a parcel to be received by PostN. If you delivery the parcel the same day as the order is placed on the webshop, please use the value of 1. A value of 2 means the parcel will arrive at PostNL a day later etc. | getShippingDuration(): ?int | setShippingDuration(?int shippingDuration): void |
| `cutOffTimes` | [`CheckoutCutOffTime[]`](../../doc/models/checkout-cut-off-time.md) | Required | Array of CutOffTimes | getCutOffTimes(): array | setCutOffTimes(array cutOffTimes): void |
| `holidaySorting` | `?bool` | Optional | Specifies whether you are available to ship parcels to PostNL during holidays | getHolidaySorting(): ?bool | setHolidaySorting(?bool holidaySorting): void |
| `options` | [`string(CheckoutOptionEnum)[]`](../../doc/models/checkout-option-enum.md) | Required | Specifies the delivery and pickup options. | getOptions(): array | setOptions(array options): void |
| `locations` | `int` | Required | Specifies the number of locations you want returned. This can be a value of 1-3<br>**Constraints**: `>= 1`, `<= 3` | getLocations(): int | setLocations(int locations): void |
| `days` | `int` | Required | Specifies the number of days for which the timeframes are returned. This can be a value of 1-9<br>**Constraints**: `>= 1`, `<= 9` | getDays(): int | setDays(int days): void |
| `addresses` | [`CheckoutAddress[]`](../../doc/models/checkout-address.md) | Required | Array of addresses | getAddresses(): array | setAddresses(array addresses): void |

## Example (as JSON)

```json
{
  "OrderDate": "11-07-2019 12:34:54",
  "ShippingDuration": 1,
  "CutOffTimes": [
    {
      "Day": "00",
      "Available": true,
      "Type": "Regular",
      "Time": "23:00:00"
    }
  ],
  "HolidaySorting": true,
  "Options": [
    "Daytime",
    "Evening",
    "Pickup"
  ],
  "Locations": 2,
  "Days": 3,
  "Addresses": [
    {
      "AddressType": "01",
      "Street": "Molengraaffplantsoen",
      "HouseNr": 74,
      "HouseNrExt": "bis",
      "Zipcode": "3571ZZ",
      "City": "Utrecht",
      "Countrycode": "NL"
    }
  ]
}
```

