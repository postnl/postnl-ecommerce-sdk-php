
# Checkout Pickup Address

The pickup location address

## Structure

`CheckoutPickupAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `street` | `?string` | Optional | The pickup location street | getStreet(): ?string | setStreet(?string street): void |
| `zipcode` | `?string` | Optional | The pickup location zipcode | getZipcode(): ?string | setZipcode(?string zipcode): void |
| `houseNr` | `?int` | Optional | The pickup location housenumber | getHouseNr(): ?int | setHouseNr(?int houseNr): void |
| `houseNrExt` | `?string` | Optional | The pickup location housenumber extension | getHouseNrExt(): ?string | setHouseNrExt(?string houseNrExt): void |
| `countrycode` | `?string` | Optional | The pickup location country | getCountrycode(): ?string | setCountrycode(?string countrycode): void |
| `companyName` | `?string` | Optional | The pickup location company name | getCompanyName(): ?string | setCompanyName(?string companyName): void |

## Example (as JSON)

```json
{
  "Street": "Siriusdreef",
  "Zipcode": "2132WT",
  "HouseNr": 42,
  "HouseNrExt": "-60",
  "Countrycode": "NL",
  "CompanyName": "Pickup company BV"
}
```

