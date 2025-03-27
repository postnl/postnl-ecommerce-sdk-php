
# Locations Response Multiple

## Structure

`LocationsResponseMultiple`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `getLocationsResult` | [`?GetLocationsResultMultiple`](../../doc/models/get-locations-result-multiple.md) | Optional | - | getGetLocationsResult(): ?GetLocationsResultMultiple | setGetLocationsResult(?GetLocationsResultMultiple getLocationsResult): void |

## Example (as JSON)

```json
{
  "GetLocationsResult": {
    "ResponseLocation": [
      {
        "Address": {
          "City": "City6",
          "Countrycode": "Countrycode2",
          "HouseNr": 136,
          "HouseNrExt": "HouseNrExt4",
          "Remark": "Remark8"
        },
        "DeliveryOptions": {
          "string": [
            "string6",
            "string7"
          ]
        },
        "Distance": 244,
        "Latitude": 103.5,
        "LocationCode": 102
      }
    ]
  }
}
```

