
# Hazardous Material

## Structure

`HazardousMaterial`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `toxicSubstanceCode` | `string` | Required | Toxic substance code as stated in the ADR agreement | getToxicSubstanceCode(): string | setToxicSubstanceCode(string toxicSubstanceCode): void |
| `additionalToxicSubstanceCode` | `?(string[])` | Optional | Array of additional toxic substance codes as stated in the ADR agreement | getAdditionalToxicSubstanceCode(): ?array | setAdditionalToxicSubstanceCode(?array additionalToxicSubstanceCode): void |
| `aDRPoints` | `?string` | Optional | The amount of ADR points | getADRPoints(): ?string | setADRPoints(?string aDRPoints): void |
| `tunnelCode` | `?string` | Optional | The code indicating for which category of tunnels passage is prohibited with these goods. | getTunnelCode(): ?string | setTunnelCode(?string tunnelCode): void |
| `packagingGroupCode` | `?string` | Optional | Code identifying the category of the packaging material. | getPackagingGroupCode(): ?string | setPackagingGroupCode(?string packagingGroupCode): void |
| `packagingGroupDescription` | `?string` | Optional | Description of the packaging material | getPackagingGroupDescription(): ?string | setPackagingGroupDescription(?string packagingGroupDescription): void |
| `grossWeight` | `?string` | Optional | Gross weight of the goods in grams. | getGrossWeight(): ?string | setGrossWeight(?string grossWeight): void |
| `uNDGNumber` | `?string` | Optional | The UNDG number | getUNDGNumber(): ?string | setUNDGNumber(?string uNDGNumber): void |
| `transportCategoryCode` | `?string` | Optional | The transport category code | getTransportCategoryCode(): ?string | setTransportCategoryCode(?string transportCategoryCode): void |
| `chemicalTechnicalDescription` | `?string` | Optional | The chemical technical description of the goods. | getChemicalTechnicalDescription(): ?string | setChemicalTechnicalDescription(?string chemicalTechnicalDescription): void |

## Example (as JSON)

```json
{
  "ToxicSubstanceCode": "8",
  "AdditionalToxicSubstanceCode": [
    "1-11",
    "28-4"
  ],
  "ADRPoints": "30",
  "TunnelCode": "(E)",
  "PackagingGroupCode": "III",
  "PackagingGroupDescription": "Jerrycan plastic",
  "GrossWeight": "30000",
  "UNDGNumber": "UN 1760",
  "TransportCategoryCode": "3",
  "ChemicalTechnicalDescription": "FOSFORZUUR"
}
```

