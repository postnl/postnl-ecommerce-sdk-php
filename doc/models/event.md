
# Event

## Structure

`Event`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | The event code | getCode(): ?string | setCode(?string code): void |
| `description` | `?string` | Optional | The event description | getDescription(): ?string | setDescription(?string description): void |
| `destinationLocationCode` | `?string` | Optional | Location code of the destination | getDestinationLocationCode(): ?string | setDestinationLocationCode(?string destinationLocationCode): void |
| `locationCode` | `?string` | Optional | The current location code | getLocationCode(): ?string | setLocationCode(?string locationCode): void |
| `routeCode` | `?string` | Optional | The route code | getRouteCode(): ?string | setRouteCode(?string routeCode): void |
| `routeNumber` | `?string` | Optional | The route number | getRouteNumber(): ?string | setRouteNumber(?string routeNumber): void |
| `timeStamp` | `?string` | Optional | Timestamp of the event | getTimeStamp(): ?string | setTimeStamp(?string timeStamp): void |

## Example (as JSON)

```json
{
  "Code": "A01",
  "Description": "Pakket is nog niet door PostNL ontvangen of verwerkt",
  "DestinationLocationCode": "888888",
  "LocationCode": "156789",
  "RouteCode": "310",
  "RouteNumber": "310 Sittard Vrangendael",
  "TimeStamp": "07-11-2022 19:10:28"
}
```

