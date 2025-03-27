
# Status

The current status of the shipment (see the [Status codes](https://developer.postnl.nl/docs/#/http/reference-data/t-t-status-codes/event-codes) for possible values.

## Structure

`Status`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `timeStamp` | `?string` | Optional | The status timestamp | getTimeStamp(): ?string | setTimeStamp(?string timeStamp): void |
| `statusCode` | `?string` | Optional | The status code | getStatusCode(): ?string | setStatusCode(?string statusCode): void |
| `statusDescription` | `?string` | Optional | The status description | getStatusDescription(): ?string | setStatusDescription(?string statusDescription): void |
| `phaseCode` | `?string` | Optional | The phase code | getPhaseCode(): ?string | setPhaseCode(?string phaseCode): void |
| `phaseDescription` | `?string` | Optional | The phase description | getPhaseDescription(): ?string | setPhaseDescription(?string phaseDescription): void |

## Example (as JSON)

```json
{
  "TimeStamp": "07-11-2022 19:10:28",
  "StatusCode": "1",
  "StatusDescription": "Zending voorgemeld",
  "PhaseCode": "1",
  "PhaseDescription": "Collectie"
}
```

