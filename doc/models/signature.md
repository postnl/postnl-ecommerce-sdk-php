
# Signature

## Structure

`Signature`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `barcode` | `?string` | Optional | The barcode of the shipment for which the signature is returned | getBarcode(): ?string | setBarcode(?string barcode): void |
| `signatureDate` | `?string` | Optional | The date of the signature | getSignatureDate(): ?string | setSignatureDate(?string signatureDate): void |
| `signatureImage` | `?string` | Optional | The signature content; base64 encoded GIF format. | getSignatureImage(): ?string | setSignatureImage(?string signatureImage): void |

## Example (as JSON)

```json
{
  "Barcode": "3SDEVC317858754",
  "SignatureDate": "11/07/2022 19:28:16",
  "SignatureImage": "iVBORw0KGgoAAAANSUhEUgAAAogAAAGTCAYAAACrs[TRUNCATED]"
}
```

