
# Confirming Custom

## Structure

`ConfirmingCustom`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `certificate` | `?bool` | Optional | Fill in if applicable, for specific items a export certificate is obliged, as proof that the item complies to the sanity regulations, [more information](https://ondernemersplein.kvk.nl/fytosanitair-of-veterinair-exportcertificaat-aanvragen/). Mandatory for Parcel shipments in the category type Commercial Goods, Commercial Sample and Returned Goods (Certificate, Invoice or License; at least 1 out of 3 must be selected) | getCertificate(): ?bool | setCertificate(?bool certificate): void |
| `certificateNr` | `?string` | Optional | Mandatory when Certificate is true.<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `35` | getCertificateNr(): ?string | setCertificateNr(?string certificateNr): void |
| `license` | `?bool` | Optional | Fill in if applicable. Mandatory for Parcel shipments in the category type Commercial Goods, Commercial Sample and Returned Goods (Certificate, Invoice or License; at least 1 out of 3 must be selected). | getLicense(): ?bool | setLicense(?bool license): void |
| `licenseNr` | `?string` | Optional | Mandatory when License is true. | getLicenseNr(): ?string | setLicenseNr(?string licenseNr): void |
| `invoice` | `?bool` | Optional | Fill in the invoice number of the shipment. For a faster customs clearing process apply the invoice on the outside of the shipment. Mandatory for Parcel shipments in the category type Commercial Goods, Commercial Sample and Returned Goods (Certificate, Invoice or License; at least 1 out of 3 must be selected). | getInvoice(): ?bool | setInvoice(?bool invoice): void |
| `invoiceNr` | `?string` | Optional | Mandatory when Invoice is true | getInvoiceNr(): ?string | setInvoiceNr(?string invoiceNr): void |
| `handleAsNonDeliverable` | `?bool` | Optional | Determines what to do when the shipment cannot be delivered the first time (if this is set to true,the shipment will be returned after the first failed attempt) | getHandleAsNonDeliverable(): ?bool | setHandleAsNonDeliverable(?bool handleAsNonDeliverable): void |
| `currency` | [`string(CurrencyEnum)`](../../doc/models/currency-enum.md) | Required | Currency code. only EUR, GBP, USD and CNY are allowed. | getCurrency(): string | setCurrency(string currency): void |
| `shipmentType` | [`string(ShipmentTypeEnum)`](../../doc/models/shipment-type-enum.md) | Required | Type of shipment, possible values: Gift, Documents, Commercial Goods, Commercial Sample, Returned Goods. Is used to fill in the checkbox on the customs form on the shipment label. | getShipmentType(): string | setShipmentType(string shipmentType): void |
| `trustedShipperID` | `?string` | Optional | Use only when available. This is the reference of the sender. Depending on the destination with this ID, EORI, IOSS, TAX, VAT, VOEC*, the customs process can be faster. Only fill in this customs reference number if the sender is registrated as Trusted Shipper in the country of destination.  *VOEC is a Norwegian VAT number.<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `50` | getTrustedShipperID(): ?string | setTrustedShipperID(?string trustedShipperID): void |
| `importerReferenceCode` | `?string` | Optional | This is the reference of the recipient. Fill in a Tax Code or VAT number or Importer code. Depending on the destination with this reference the customs process can be faster. For example Brazil uses an TAXID number for natural persons, known as CPF.<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `50` | getImporterReferenceCode(): ?string | setImporterReferenceCode(?string importerReferenceCode): void |
| `transactionCode` | `?string` | Optional | See the [Reference data](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/transaction-codes) for possible values.<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `50` | getTransactionCode(): ?string | setTransactionCode(?string transactionCode): void |
| `transactionDescription` | `?string` | Optional | Transaction description; see [here](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/transaction-codes) for common examples.<br>**Constraints**: *Minimum Length*: `0`, *Maximum Length*: `50` | getTransactionDescription(): ?string | setTransactionDescription(?string transactionDescription): void |
| `content` | [`ConfirmingCustomContent[]`](../../doc/models/confirming-custom-content.md) | Required | The contents of the shipment. This section is mandatory (minimum once, maximum 5). Fill per unique item. | getContent(): array | setContent(array content): void |

## Example (as JSON)

```json
{
  "Certificate": true,
  "CertificateNr": "CERT-1235986739",
  "License": true,
  "LicenseNr": "LIC-9847397",
  "Invoice": true,
  "InvoiceNr": "INV_0120330",
  "HandleAsNonDeliverable": false,
  "Currency": "EUR",
  "ShipmentType": "Commercial Goods",
  "TrustedShipperID": "NL862386524",
  "ImporterReferenceCode": "GB339713089011",
  "TransactionCode": "11",
  "TransactionDescription": "Sale of goods",
  "Content": [
    {
      "Description": "Powdered milk",
      "Quantity": 2,
      "Weight": 2600,
      "Value": 119.99,
      "HSTariffNr": "100878",
      "CountryOfOrigin": "NL"
    }
  ]
}
```

