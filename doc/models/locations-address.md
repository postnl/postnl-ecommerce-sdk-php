
# Locations Address

## Structure

`LocationsAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `city` | `?string` | Optional | The city of the pickup location address | getCity(): ?string | setCity(?string city): void |
| `countrycode` | `?string` | Optional | The country of the pickup location address | getCountrycode(): ?string | setCountrycode(?string countrycode): void |
| `houseNr` | `?int` | Optional | The house number of the pickup location address | getHouseNr(): ?int | setHouseNr(?int houseNr): void |
| `houseNrExt` | `?string` | Optional | The house number extension of the pickup location address | getHouseNrExt(): ?string | setHouseNrExt(?string houseNrExt): void |
| `remark` | `?string` | Optional | Additional information about the pickup location | getRemark(): ?string | setRemark(?string remark): void |
| `street` | `?string` | Optional | The street of the pickup location address | getStreet(): ?string | setStreet(?string street): void |
| `zipcode` | `?string` | Optional | The zipcode of the pickup location address | getZipcode(): ?string | setZipcode(?string zipcode): void |

## Example (as JSON)

```json
{
  "City": "Hoofddorp",
  "Countrycode": "NL",
  "HouseNr": 42,
  "HouseNrExt": "-60",
  "Remark": "Dit is een Pakketpunt. Pakketten die je op werkdagen vóór lichtingstijd afgeeft, bezorgen we binnen Nederland de volgende dag. Op zaterdag worden alléén pakketten die je afgeeft voor 15:00 uur maandag bezorgd.",
  "Street": "Siriusdreef",
  "Zipcode": "2132WT"
}
```

