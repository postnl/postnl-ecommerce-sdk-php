
# Labelling Request

## Structure

`LabellingRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customer` | [`LabellingCustomer`](../../doc/models/labelling-customer.md) | Required | - | getCustomer(): LabellingCustomer | setCustomer(LabellingCustomer customer): void |
| `labelSignature` | `?string` | Optional | GIF image of the signature (as a base64 encoded string) max size: 280x60 mm (1058x226 pixels). This can be used to automatically sign the customs forms. The value of this element can have a maximum size of 65536 characters. Note that the total request can have a maximum size of 200KB. Larger requests will not be accepted by the server for performance reasons. Requests that exceed this limit will not return a validation error,but a HTTP 404 error. | getLabelSignature(): ?string | setLabelSignature(?string labelSignature): void |
| `message` | [`LabellingCustomerMessage`](../../doc/models/labelling-customer-message.md) | Required | - | getMessage(): LabellingCustomerMessage | setMessage(LabellingCustomerMessage message): void |
| `shipments` | [`LabellingCustomerShipment[]`](../../doc/models/labelling-customer-shipment.md) | Required | List of 1 or more Shipments. At least 1 shipment is required. | getShipments(): array | setShipments(array shipments): void |

## Example (as JSON)

```json
{
  "Customer": {
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
  },
  "Message": {
    "MessageID": "1",
    "MessageTimeStamp": "29-06-2016 12:00:00",
    "Printertype": "GraphicFile|PDF"
  },
  "Shipments": [
    {
      "Addresses": [
        {
          "AddressType": "01",
          "Area": "Tuindorp-Oost",
          "Buildingname": "Gebouw 1",
          "City": "Utrecht",
          "CompanyName": "Janssen B.V.",
          "Countrycode": "NL",
          "Department": "Finance",
          "Doorcode": "3345",
          "FirstName": "Henk",
          "Floor": "2nd floor",
          "HouseNr": "74",
          "HouseNrExt": "A",
          "Name": "de Graaff",
          "Region": "Utrecht",
          "Street": "Molengraaffplantsoen",
          "Zipcode": "3571ZZ"
        }
      ],
      "Barcode": "3SDEVC201611214",
      "CodingText": "#2426A3A#03#0306#",
      "CollectionTimeStampStart": "04-12-2022 17:00:00",
      "CollectionTimeStampEnd": "04-12-2022 19:00:00",
      "Content": "Media player",
      "CostCenter": "SX-GT-66",
      "CustomerOrderNumber": "8689242390",
      "DeliveryAddress": "01",
      "DeliveryDate": "30-06-2016 12:00:00",
      "Dimension": {
        "Height": 300,
        "Length": 700,
        "Volume": 30000,
        "Weight": 4300,
        "Width": 500
      },
      "DownPartnerBarcode": "CD123456785NL",
      "DownPartnerLocation": "PNPNL-01",
      "ProductCodeCollect": "3153",
      "ProductCodeDelivery": "3085",
      "ReceiverDateOfBirth": "10-12-1980",
      "Reference": "REF-2016014567",
      "ReferenceCollect": "REF-6659150",
      "Remark": "Fragile",
      "ReturnBarcode": "3SDEVR7762162",
      "ReturnReference": "REF-639265677788",
      "Amounts": [
        {
          "AmountType": "AmountType4",
          "AccountName": "AccountName0",
          "BIC": "BIC6",
          "Currency": "Currency8",
          "IBAN": "IBAN4",
          "Reference": "Reference2",
          "Value": 22.62
        },
        {
          "AmountType": "AmountType4",
          "AccountName": "AccountName0",
          "BIC": "BIC6",
          "Currency": "Currency8",
          "IBAN": "IBAN4",
          "Reference": "Reference2",
          "Value": 22.62
        },
        {
          "AmountType": "AmountType4",
          "AccountName": "AccountName0",
          "BIC": "BIC6",
          "Currency": "Currency8",
          "IBAN": "IBAN4",
          "Reference": "Reference2",
          "Value": 22.62
        }
      ],
      "Contacts": [
        {
          "ContactType": "ContactType6",
          "Email": "Email2",
          "SMSNr": "SMSNr8",
          "TelNr": "TelNr6"
        }
      ]
    }
  ],
  "LabelSignature": "LabelSignature8"
}
```

