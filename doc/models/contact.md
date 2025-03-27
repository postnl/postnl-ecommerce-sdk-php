
# Contact

## Structure

`Contact`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `contactType` | `string` | Required | Type of the contact. This is a code. Please refer to the available [Contact types](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/contact-types) for the possible values.<br>**Constraints**: *Pattern*: `^\d{2}$` | getContactType(): string | setContactType(string contactType): void |
| `email` | `?string` | Optional | Email address of the contact. Mandatory in some cases. Either the Email or Telnr needs to be filled in for Non EU destinations. Please see [Guidelines](https://developer.postnl.nl/docs/#/http/api-endpoints/send-track/confirming/guidelines).<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `50` | getEmail(): ?string | setEmail(?string email): void |
| `sMSNr` | `?string` | Optional | Mobile phone number of the contact. Mandatory in some cases. Please see [Guidelines](https://developer.postnl.nl/docs/#/http/api-endpoints/send-track/confirming/guidelines).<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `17` | getSMSNr(): ?string | setSMSNr(?string sMSNr): void |
| `telNr` | `?string` | Optional | Phone number of the contact. Either the Email or Telnr needs to be filled in for Non EU destinations. Preferably prefixed with “+” and the international dialling code.<br>**Constraints**: *Minimum Length*: `10`, *Maximum Length*: `17` | getTelNr(): ?string | setTelNr(?string telNr): void |

## Example (as JSON)

```json
{
  "ContactType": "01",
  "Email": "receiver@email.com",
  "SMSNr": "+31612345678",
  "TelNr": "+31301234567"
}
```

