
# Customer Address

## Structure

`CustomerAddress`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `addressType` | `string` | Required | Address 02 is mandatory. It can either be placed in the Customer segment or in the Shipment segment. Note that if you put it in the Shipment segment, it should go into all Shipment segments.<br>**Constraints**: *Pattern*: `^02$` | getAddressType(): string | setAddressType(string addressType): void |
| `area` | `?string` | Optional | Area of the address<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getArea(): ?string | setArea(?string area): void |
| `buildingname` | `?string` | Optional | Building name of the address<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getBuildingname(): ?string | setBuildingname(?string buildingname): void |
| `city` | `string` | Required | City of the address<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getCity(): string | setCity(string city): void |
| `companyName` | `?string` | Optional | This field has a dependency with the field Name. One of both fields must be filled mandatory; using both fields is also allowed. Mandatory when AddressType is 09.<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getCompanyName(): ?string | setCompanyName(?string companyName): void |
| `countrycode` | `string` | Required | The ISO2 country codes<br>**Constraints**: *Pattern*: `^[A-Z]{2}$` | getCountrycode(): string | setCountrycode(string countrycode): void |
| `department` | `?string` | Optional | Send to specific department of a company<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getDepartment(): ?string | setDepartment(?string department): void |
| `doorcode` | `?string` | Optional | Door code of address. Mandatory for some international shipments.<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getDoorcode(): ?string | setDoorcode(?string doorcode): void |
| `firstName` | `?string` | Optional | Remark: please add FirstName and Name (lastname) of the receiver to improve the parcel tracking experience of your customer.<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getFirstName(): ?string | setFirstName(?string firstName): void |
| `floor` | `?string` | Optional | Send to specific floor of a company<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getFloor(): ?string | setFloor(?string floor): void |
| `houseNr` | `?string` | Optional | Mandatory for shipments to Benelux. Max. length is 5 characters (only for Benelux addresses). For Benelux addresses,this field should always be numeric.<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getHouseNr(): ?string | setHouseNr(?string houseNr): void |
| `houseNrExt` | `?string` | Optional | House number extension<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getHouseNrExt(): ?string | setHouseNrExt(?string houseNrExt): void |
| `name` | `?string` | Optional | Last name of person. This field has a dependency with the field CompanyName. One of both fields must be filled mandatory; using both fields is also allowed. Remark: please add FirstName and Name (lastname) of the receiver to improve the parcel tracking experience of your customer.<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getName(): ?string | setName(?string name): void |
| `region` | `?string` | Optional | Region of the address<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getRegion(): ?string | setRegion(?string region): void |
| `street` | `?string` | Optional | This field has a dependency with the field StreetHouseNrExt. One of both fields must be filled mandatory; using both fields simultaneously is discouraged.<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `95` | getStreet(): ?string | setStreet(?string street): void |
| `streetHouseNrExt` | `?string` | Optional | Combination of Street, HouseNr and HouseNrExt. Please see [Guidelines](https://developer.postnl.nl/docs/#/http/api-endpoints/send-track/confirming/guidelines) for the explanation. | getStreetHouseNrExt(): ?string | setStreetHouseNrExt(?string streetHouseNrExt): void |
| `zipcode` | `?string` | Optional | Zipcode of the address. Mandatory for shipments to Benelux. Max length (NL) 6 characters,(BE;LU) 4 numeric characters<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `17` | getZipcode(): ?string | setZipcode(?string zipcode): void |

## Example (as JSON)

```json
{
  "AddressType": "02",
  "Area": "Beukenhorst",
  "Buildingname": "AA",
  "City": "Hoofddorp",
  "CompanyName": "PostNL",
  "Countrycode": "NL",
  "Department": "IT",
  "Doorcode": "123",
  "FirstName": "Peter",
  "Floor": "4th floor",
  "HouseNr": "42",
  "HouseNrExt": "bis",
  "Name": "de Ruiter",
  "Region": "Noord-Holland",
  "Street": "Siriusdreef",
  "Zipcode": "2132WT"
}
```

