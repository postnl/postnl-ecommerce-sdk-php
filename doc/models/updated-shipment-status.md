
# Updated Shipment Status

The status update. See [Status codes](https://developer.postnl.nl/docs/#/http/reference-data/error-codes) for possible values.

## Structure

`UpdatedShipmentStatus`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `timestamp` | `?string` | Optional | The timestamp of the update | getTimestamp(): ?string | setTimestamp(?string timestamp): void |
| `statusCode` | `?string` | Optional | The status code | getStatusCode(): ?string | setStatusCode(?string statusCode): void |
| `statusDescription` | `?string` | Optional | The status description | getStatusDescription(): ?string | setStatusDescription(?string statusDescription): void |
| `phaseCode` | `?string` | Optional | The phase code | getPhaseCode(): ?string | setPhaseCode(?string phaseCode): void |
| `phaseDescription` | `?string` | Optional | The phase description | getPhaseDescription(): ?string | setPhaseDescription(?string phaseDescription): void |

## Example (as JSON)

```json
{
  "Timestamp": "11/07/2022 12:36:41",
  "StatusCode": "1",
  "StatusDescription": "Zending voorgemeld",
  "PhaseCode": "1",
  "PhaseDescription": "Collectie"
}
```

