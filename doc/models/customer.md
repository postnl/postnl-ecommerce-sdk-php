
# Customer

## Structure

`Customer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `address` | [`?CustomerAddress`](../../doc/models/customer-address.md) | Optional | - | getAddress(): ?CustomerAddress | setAddress(?CustomerAddress address): void |
| `collectionLocation` | `?string` | Optional | Code of delivery location at PostNL Pakketten<br>**Constraints**: *Minimum Length*: `6`, *Maximum Length*: `6` | getCollectionLocation(): ?string | setCollectionLocation(?string collectionLocation): void |
| `contactPerson` | `?string` | Optional | Name of customer contact person | getContactPerson(): ?string | setContactPerson(?string contactPerson): void |
| `customerCode` | `string` | Required | Customer code as known at PostNL Pakketten<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `6` | getCustomerCode(): string | setCustomerCode(string customerCode): void |
| `customerNumber` | `string` | Required | Name of customer contact person<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `8` | getCustomerNumber(): string | setCustomerNumber(string customerNumber): void |
| `email` | `?string` | Optional | E-mail address of the customer. Mandatory for Non EU destinations.<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `50` | getEmail(): ?string | setEmail(?string email): void |
| `name` | `?string` | Optional | Customer name<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getName(): ?string | setName(?string name): void |

## Example (as JSON)

```json
{
  "CollectionLocation": "123456",
  "ContactPerson": "Janssen",
  "CustomerCode": "DEVC",
  "CustomerNumber": "11223344",
  "Email": "email@company.com",
  "Name": "Janssen",
  "Address": {
    "AddressType": "AddressType6",
    "Area": "Area2",
    "Buildingname": "Buildingname6",
    "City": "City6",
    "CompanyName": "CompanyName8",
    "Countrycode": "Countrycode2",
    "Department": "Department2",
    "Doorcode": "Doorcode8"
  }
}
```

