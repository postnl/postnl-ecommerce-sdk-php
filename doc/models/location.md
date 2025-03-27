
# Location

## Structure

`Location`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `address` | [`?LocationsAddress`](../../doc/models/locations-address.md) | Optional | - | getAddress(): ?LocationsAddress | setAddress(?LocationsAddress address): void |
| `deliveryOptions` | [`?DeliveryOptions`](../../doc/models/delivery-options.md) | Optional | The options belonging to the pickup location. The delivery options RETA, UL, PU, DO, BW, RT and BWUL can be shown in the response. Please ignore these codes. These codes are internal PostNL codes. | getDeliveryOptions(): ?DeliveryOptions | setDeliveryOptions(?DeliveryOptions deliveryOptions): void |
| `distance` | `?int` | Optional | The distance from the address/coordinates provided in the request to the pickup location returned. Distance in meters. | getDistance(): ?int | setDistance(?int distance): void |
| `latitude` | `?float` | Optional | The latitude of the pickup location | getLatitude(): ?float | setLatitude(?float latitude): void |
| `locationCode` | `?int` | Optional | The pickup location identifier | getLocationCode(): ?int | setLocationCode(?int locationCode): void |
| `longitude` | `?float` | Optional | The longitude of the pickup location | getLongitude(): ?float | setLongitude(?float longitude): void |
| `name` | `?string` | Optional | The name of the pickup location | getName(): ?string | setName(?string name): void |
| `openingHours` | [`?LocationsOpeningHours`](../../doc/models/locations-opening-hours.md) | Optional | The standard opening times of the pickup location | getOpeningHours(): ?LocationsOpeningHours | setOpeningHours(?LocationsOpeningHours openingHours): void |
| `sustainability` | [`?Sustainability`](../../doc/models/sustainability.md) | Optional | Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/sustainability-codes) for possible values. | getSustainability(): ?Sustainability | setSustainability(?Sustainability sustainability): void |
| `partnerName` | `?string` | Optional | The partner name belonging to the pickup location. Can be ignored, no longer used. | getPartnerName(): ?string | setPartnerName(?string partnerName): void |
| `retailNetworkID` | `?string` | Optional | The retail network belonging to the pickup location. Can be ignored, no longer used | getRetailNetworkID(): ?string | setRetailNetworkID(?string retailNetworkID): void |

## Example (as JSON)

```json
{
  "Distance": 102,
  "Latitude": 52.10223388,
  "LocationCode": 163043,
  "Longitude": 5.13634192,
  "Name": "Tonys Tabakszaak",
  "PartnerName": "PostNL",
  "RetailNetworkID": "PNPNL-01",
  "Address": {
    "City": "City6",
    "Countrycode": "Countrycode2",
    "HouseNr": 136,
    "HouseNrExt": "HouseNrExt4",
    "Remark": "Remark8"
  },
  "DeliveryOptions": {
    "string": [
      "string6",
      "string7"
    ]
  }
}
```

