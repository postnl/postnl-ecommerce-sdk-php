
# Checkout Address

## Structure

`CheckoutAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressType` | [`string(AddressTypeEnum)`](../../doc/models/address-type-enum.md) | Required | Address type. 01 is for the receiver address, 02 is for the sender address. | getAddressType(): string | setAddressType(string addressType): void |
| `street` | `?string` | Optional | Street name; for Belgian addresses, it is strongly recommended to fill in the  street value<br>**Constraints**: *Maximum Length*: `35` | getStreet(): ?string | setStreet(?string street): void |
| `houseNr` | `int` | Required | The house number of the delivery address | getHouseNr(): int | setHouseNr(int houseNr): void |
| `houseNrExt` | `?string` | Optional | House number extension<br>**Constraints**: *Maximum Length*: `7` | getHouseNrExt(): ?string | setHouseNrExt(?string houseNrExt): void |
| `zipcode` | `string` | Required | Zipcode of the address<br>**Constraints**: *Minimum Length*: `4`, *Maximum Length*: `6` | getZipcode(): string | setZipcode(string zipcode): void |
| `city` | `?string` | Optional | City of the address<br>**Constraints**: *Maximum Length*: `35` | getCity(): ?string | setCity(?string city): void |
| `countrycode` | [`string(CountrycodeEnum)`](../../doc/models/countrycode-enum.md) | Required | ISO2 country code. Limited to NL and BE. | getCountrycode(): string | setCountrycode(string countrycode): void |

## Example (as JSON)

```json
{
  "AddressType": "01",
  "Street": "Molengraaffplantsoen",
  "HouseNr": 74,
  "HouseNrExt": "bis",
  "Zipcode": "3571ZZ",
  "City": "Utrecht",
  "Countrycode": "NL"
}
```

