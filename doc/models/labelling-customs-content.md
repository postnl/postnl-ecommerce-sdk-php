
# Labelling Customs Content

## Structure

`LabellingCustomsContent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `description` | `string` | Required | Description of goods<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `35` | getDescription(): string | setDescription(string description): void |
| `quantity` | `int` | Required | Fill in the total of the item(s)<br>**Constraints**: `>= 1` | getQuantity(): int | setQuantity(int quantity): void |
| `weight` | `int` | Required | Net weight of goods in gram(gr) | getWeight(): int | setWeight(int weight): void |
| `value` | `float` | Required | Commercial (customs) value of goods. Fill in the value of the item(s). | getValue(): float | setValue(float value): void |
| `hSTariffNr` | `?string` | Optional | Specify every item with the standard HS commodity code (HS-code), [more information](https://tarief.douane.nl/ite-tariff-public/#/home)<br>**Constraints**: *Minimum Length*: `6`, *Maximum Length*: `6` | getHSTariffNr(): ?string | setHSTariffNr(?string hSTariffNr): void |
| `countryOfOrigin` | `?string` | Optional | Fill in the code of the country where the item was produced (ISO-code), [more information](https://www.iso.org/home.html)<br>**Constraints**: *Pattern*: `^[A-Z]{2}$` | getCountryOfOrigin(): ?string | setCountryOfOrigin(?string countryOfOrigin): void |

## Example (as JSON)

```json
{
  "Description": "Powdered milk",
  "Quantity": 2,
  "Weight": 2600,
  "Value": 119.99,
  "HSTariffNr": "100878",
  "CountryOfOrigin": "NL"
}
```

