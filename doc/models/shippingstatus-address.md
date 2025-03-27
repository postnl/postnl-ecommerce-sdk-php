
# Shippingstatus Address

## Structure

`ShippingstatusAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `firstName` | `?string` | Optional | The first name | getFirstName(): ?string | setFirstName(?string firstName): void |
| `lastName` | `?string` | Optional | The last name | getLastName(): ?string | setLastName(?string lastName): void |
| `companyName` | `?string` | Optional | The company name | getCompanyName(): ?string | setCompanyName(?string companyName): void |
| `departmentName` | `?string` | Optional | The department name | getDepartmentName(): ?string | setDepartmentName(?string departmentName): void |
| `countryCode` | `?string` | Optional | The ISO2 country code | getCountryCode(): ?string | setCountryCode(?string countryCode): void |
| `zipcode` | `?string` | Optional | The zipcode | getZipcode(): ?string | setZipcode(?string zipcode): void |
| `region` | `?string` | Optional | The region name | getRegion(): ?string | setRegion(?string region): void |
| `district` | `?string` | Optional | The district name | getDistrict(): ?string | setDistrict(?string district): void |
| `city` | `?string` | Optional | The city name | getCity(): ?string | setCity(?string city): void |
| `street` | `?string` | Optional | The street name | getStreet(): ?string | setStreet(?string street): void |
| `houseNumber` | `?string` | Optional | The house number | getHouseNumber(): ?string | setHouseNumber(?string houseNumber): void |
| `houseNumberSuffix` | `?string` | Optional | The house number suffix | getHouseNumberSuffix(): ?string | setHouseNumberSuffix(?string houseNumberSuffix): void |
| `building` | `?string` | Optional | The building name | getBuilding(): ?string | setBuilding(?string building): void |
| `floor` | `?string` | Optional | The floor of the building | getFloor(): ?string | setFloor(?string floor): void |
| `remark` | `?string` | Optional | An additional remark | getRemark(): ?string | setRemark(?string remark): void |

## Example (as JSON)

```json
{
  "FirstName": "Peter",
  "LastName": "de Ruiter",
  "CompanyName": "PostNL",
  "DepartmentName": "IT",
  "CountryCode": "NL",
  "Zipcode": "2132WT",
  "Region": "Noord-Holland",
  "District": "Beukenhorst",
  "City": "Hoofddorp",
  "Street": "Siriusdreef",
  "HouseNumber": "42",
  "HouseNumberSuffix": "-60",
  "Building": "AA",
  "Floor": "4",
  "Remark": "No doorbell"
}
```

