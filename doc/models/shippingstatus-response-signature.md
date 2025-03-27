
# Shippingstatus Response Signature

## Structure

`ShippingstatusResponseSignature`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `signature` | [`?Signature`](../../doc/models/signature.md) | Optional | - | getSignature(): ?Signature | setSignature(?Signature signature): void |
| `warnings` | [`?Warnings`](../../doc/models/warnings.md) | Optional | - | getWarnings(): ?Warnings | setWarnings(?Warnings warnings): void |

## Example (as JSON)

```json
{
  "Signature": {
    "Barcode": "Barcode2",
    "SignatureDate": "SignatureDate0",
    "SignatureImage": "SignatureImage6"
  },
  "Warnings": {
    "Warning": {
      "Message": "Message0",
      "Code": "Code4"
    }
  }
}
```

