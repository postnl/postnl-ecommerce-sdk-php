
# Checkout Warning

## Structure

`CheckoutWarning`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `deliveryDate` | `?string` | Optional | Deliverydate that triggered the warning | getDeliveryDate(): ?string | setDeliveryDate(?string deliveryDate): void |
| `code` | `?string` | Optional | Warning code (for a possible list of warnings, see the generic error codes page) | getCode(): ?string | setCode(?string code): void |
| `description` | `?string` | Optional | Warning description (for a possible list of warnings, see the generic error codes page) | getDescription(): ?string | setDescription(?string description): void |
| `options` | [`?string(CheckoutWarningOptionEnum)`](../../doc/models/checkout-warning-option-enum.md) | Optional | - | getOptions(): ?string | setOptions(?string options): void |

## Example (as JSON)

```json
{
  "DeliveryDate": "07-07-2019",
  "Code": "5034",
  "Description": "No delivery option found on date",
  "Options": "Daytime"
}
```

