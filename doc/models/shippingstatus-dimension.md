
# Shippingstatus Dimension

## Structure

`ShippingstatusDimension`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `weight` | `?string` | Optional | The weight of the shipment | getWeight(): ?string | setWeight(?string weight): void |
| `height` | `?string` | Optional | The height of the shipment | getHeight(): ?string | setHeight(?string height): void |
| `length` | `?string` | Optional | The length of the shipment | getLength(): ?string | setLength(?string length): void |
| `width` | `?string` | Optional | The width of the shipment | getWidth(): ?string | setWidth(?string width): void |
| `volume` | `?string` | Optional | The volume of the shipment | getVolume(): ?string | setVolume(?string volume): void |

## Example (as JSON)

```json
{
  "Weight": "100",
  "Height": "200",
  "Length": "300",
  "Width": "400",
  "Volume": "5000"
}
```

