
# Group

## Structure

`Group`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `groupType` | `string` | Required | Group sort that determines the type of group that is indicated. This is a code. For possible values, please see [here](https://developer.postnl.nl/docs/#/http/reference-data/reference-codes/group-types)<br>**Constraints**: *Pattern*: `^\d{2}$` | getGroupType(): string | setGroupType(string groupType): void |
| `groupSequence` | `?int` | Optional | Sequence number of the collo within the complete shipment (e.g. collo 2 of 4) Mandatory for multicollo shipments | getGroupSequence(): ?int | setGroupSequence(?int groupSequence): void |
| `groupCount` | `?int` | Optional | Total number of colli in the shipment (in case of multicolli shipments) Mandatory for multicollo shipments | getGroupCount(): ?int | setGroupCount(?int groupCount): void |
| `mainBarcode` | `string` | Required | Main barcode for the shipment (in case of multicolli shipments) Mandatory for multicollo shipments<br>**Constraints**: *Minimum Length*: `11`, *Maximum Length*: `15` | getMainBarcode(): string | setMainBarcode(string mainBarcode): void |

## Example (as JSON)

```json
{
  "GroupType": "03",
  "GroupSequence": 1,
  "GroupCount": 2,
  "MainBarcode": "3SDEVC7239264"
}
```

