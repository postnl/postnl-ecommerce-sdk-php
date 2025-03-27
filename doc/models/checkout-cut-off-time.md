
# Checkout Cut Off Time

## Structure

`CheckoutCutOffTime`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `day` | [`string(CheckoutCutOffDayEnum)`](../../doc/models/checkout-cut-off-day-enum.md) | Required | The day for which the cutoff time applies. 00 is your default cutoff that applies to all otherwise not specified days, 01 to 07 is Monday to Sunday. | getDay(): string | setDay(string day): void |
| `available` | `?bool` | Optional | Specifies whether you are available to process shipments during the selected day | getAvailable(): ?bool | setAvailable(?bool available): void |
| `type` | [`?string(CheckoutCutOffTypeEnum)`](../../doc/models/checkout-cut-off-type-enum.md) | Optional | Specifies the type belonging to the cutoff time. | getType(): ?string | setType(?string type): void |
| `time` | `?string` | Optional | Specifies the cutoff time (mandatory when Available is true)<br>**Constraints**: *Pattern*: `^[0-2]\d:[0-5]\d:[0-5]\d$` | getTime(): ?string | setTime(?string time): void |

## Example (as JSON)

```json
{
  "Day": "00",
  "Available": true,
  "Type": "Regular",
  "Time": "23:00:00"
}
```

