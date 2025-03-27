
# Postalcode Check Address

## Structure

`PostalcodeCheckAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `city` | `?string` | Optional | City of requested address | getCity(): ?string | setCity(?string city): void |
| `postalCode` | `?string` | Optional | Postalcode of requested address | getPostalCode(): ?string | setPostalCode(?string postalCode): void |
| `streetName` | `?string` | Optional | Street of requested address | getStreetName(): ?string | setStreetName(?string streetName): void |
| `houseNumber` | `?int` | Optional | Housenumber of requested address | getHouseNumber(): ?int | setHouseNumber(?int houseNumber): void |
| `houseNumberAddition` | `?string` | Optional | Housenumber addition | getHouseNumberAddition(): ?string | setHouseNumberAddition(?string houseNumberAddition): void |
| `formattedAddress` | `?(string[])` | Optional | Full formatted address according to PostNL standard (returns each line as a separate string) | getFormattedAddress(): ?array | setFormattedAddress(?array formattedAddress): void |

## Example (as JSON)

```json
{
  "city": "UTRECHT",
  "postalCode": "3571ZZ",
  "streetName": "Molengraaffplantsoen",
  "houseNumber": 74,
  "houseNumberAddition": "bis",
  "formattedAddress": [
    "Molengraaffplantsoen 74",
    "3571ZZ UTRECHT"
  ]
}
```

