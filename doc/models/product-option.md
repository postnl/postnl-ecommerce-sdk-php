
# Product Option

## Structure

`ProductOption`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `characteristic` | `string` | Required | The characteristic of the ProductOption. Mandatory for some products, please see the [Products page](https://developer.postnl.nl/docs/#/http/reference-data/product-codes-dutch-domestic)<br>**Default**: `'118'`<br>**Constraints**: *Pattern*: `^\d{3}$` | getCharacteristic(): string | setCharacteristic(string characteristic): void |
| `option` | `string` | Required | The product option code for this ProductOption. Mandatory for some products, please see the [Products page](https://developer.postnl.nl/docs/#/http/reference-data/product-codes-dutch-domestic)<br>**Default**: `'006'`<br>**Constraints**: *Pattern*: `^\d{3}$` | getOption(): string | setOption(string option): void |

## Example (as JSON)

```json
{
  "Characteristic": "118",
  "Option": "006"
}
```

