
# Shippingstatus Amount

The amounts belonging to the shipment

## Structure

`ShippingstatusAmount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `remboursBedrag` | `?string` | Optional | The cash-on-delivery (COD) amount | getRemboursBedrag(): ?string | setRemboursBedrag(?string remboursBedrag): void |
| `verzekerdBedrag` | `?string` | Optional | The insurance amount of the shipment | getVerzekerdBedrag(): ?string | setVerzekerdBedrag(?string verzekerdBedrag): void |

## Example (as JSON)

```json
{
  "RemboursBedrag": "EUR1079.00",
  "VerzekerdBedrag": "EUR500.00"
}
```

