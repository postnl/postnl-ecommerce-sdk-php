# Locations

```php
$locationsController = $client->getLocationsController();
```

## Class Name

`LocationsController`

## Methods

* [Get Pickup Locations by Address](../../doc/controllers/locations.md#get-pickup-locations-by-address)
* [Get Pickup Locations by Coordinates](../../doc/controllers/locations.md#get-pickup-locations-by-coordinates)
* [Get Pickup Locations Within Area](../../doc/controllers/locations.md#get-pickup-locations-within-area)
* [Get Pickup Location](../../doc/controllers/locations.md#get-pickup-location)


# Get Pickup Locations by Address

Request example:

```
curl -X GET "https://api-sandbox.postnl.nl/shipment/v2_1/locations/nearest?CountryCode=NL&PostalCode=2132WT&City=Hoofddorp&Street=Siriusdreef&HouseNumber=42&HouseNumberExtension=-60&DeliveryDate=24-12-2022&OpeningTime=09%3A00%3A00" \
 -H "Accept: application/json" \
 -H "apikey: APIKEY-HERE" \
```

```php
function getPickupLocationsByAddress(
    string $countryCode,
    string $postalCode,
    ?string $city = null,
    ?string $street = null,
    ?int $houseNumber = null,
    ?string $houseNumberExtension = null,
    ?string $deliveryDate = null,
    ?string $openingTime = null,
    ?array $deliveryOptions = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `countryCode` | [`string(CountrycodeEnum)`](../../doc/models/countrycode-enum.md) | Query, Required | The country of the recipient's address |
| `postalCode` | `string` | Query, Required | The zipcode of the recipient's address<br>**Constraints**: *Pattern*: `^[0-9]{4}([A-Z]{2})?$` |
| `city` | `?string` | Query, Optional | The city of the recipient's address |
| `street` | `?string` | Query, Optional | The street name of the recipient's address |
| `houseNumber` | `?int` | Query, Optional | The house number of the recipient's address |
| `houseNumberExtension` | `?string` | Query, Optional | The house number extension of the recipient's address |
| `deliveryDate` | `?string` | Query, Optional | The date of the earliest delivery date at the pickup location. Format:  dd-MM-yyyy. Note: this date cannot be in the past, otherwise an error is returned. If not provided, the present day is used as a default<br>**Constraints**: *Pattern*: `^[0-3]\d-[0-1]\d-[1-2]\d{3}$` |
| `openingTime` | `?string` | Query, Optional | Opening time filter. Format: hh:mm:ss. This field will be used to filter out locations that are closed at the time provided. If no opening time is provided all locations will be returned regardless of their opening times.<br>**Constraints**: *Pattern*: `^[0-2]\d:[0-5]\d:[0-5]\d$` |
| `deliveryOptions` | [`?(string(LocationsDeliveryOptionEnum)[])`](../../doc/models/locations-delivery-option-enum.md) | Query, Optional | The pickup location types for which locations should be filtered. By default all location types are returned (PG = Retail points and parcel lockers). This can be used to filter on only parcel lockers (PA) or specifically exclude parcel lockers from the response (PG_EX). |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`LocationsResponseMultiple`](../../doc/models/locations-response-multiple.md).

## Example Usage

```php
$countryCode = CountrycodeEnum::NL;

$postalCode = '2132WT';

$city = 'Hoofddorp';

$street = 'Siriusdreef';

$houseNumber = 42;

$houseNumberExtension = '-60';

$deliveryDate = '24-12-2022';

$openingTime = '09:00:00';

$apiResponse = $locationsController->getPickupLocationsByAddress(
    $countryCode,
    $postalCode,
    $city,
    $street,
    $houseNumber,
    $houseNumberExtension,
    $deliveryDate,
    $openingTime
);
```

## Example Response *(as JSON)*

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

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Invalid request | [`InvalidRequestException`](../../doc/models/invalid-request-exception.md) |
| 401 | Invalid apikey | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 405 | Method not allowed | [`MethodNotAllowedOnlyGetPostException`](../../doc/models/method-not-allowed-only-get-post-exception.md) |
| 429 | Too many requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal server error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |


# Get Pickup Locations by Coordinates

Request example:

```
curl -X GET "https://api-sandbox.postnl.nl/shipment/v2_1/locations/nearest/geocode?Latitude=52.2864669620795&Longitude=4.68239055845954&CountryCode=NL&DeliveryDate=24-12-2022&OpeningTime=09%3A00%3A00" \
 -H "Accept: application/json" \
 -H "apikey: APIKEY-HERE" \
```

```php
function getPickupLocationsByCoordinates(
    float $latitude,
    float $longitude,
    string $countryCode,
    ?string $deliveryDate = null,
    ?string $openingTime = null,
    ?array $deliveryOptions = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `latitude` | `float` | Query, Required | The latitude of the location |
| `longitude` | `float` | Query, Required | The longitude of the location |
| `countryCode` | [`string(CountrycodeEnum)`](../../doc/models/countrycode-enum.md) | Query, Required | The coutry for which the coordinates are provided |
| `deliveryDate` | `?string` | Query, Optional | The date of the earliest delivery date. Format:  dd-MM-yyyy. Note: this date cannot be in the past, otherwise an error is returned.<br>**Constraints**: *Pattern*: `^[0-3]\d-[0-1]\d-[1-2]\d{3}$` |
| `openingTime` | `?string` | Query, Optional | Opening time filter. Format: hh:mm:ss. This field will be used to filter out locations that are closed at the time provided.<br>**Constraints**: *Pattern*: `^[0-2]\d:[0-5]\d:[0-5]\d$` |
| `deliveryOptions` | [`?(string(LocationsDeliveryOptionEnum)[])`](../../doc/models/locations-delivery-option-enum.md) | Query, Optional | The pickup location types for which locations should be filtered. By default all location types are returned (PG = Retail points and parcel lockers). This can be used to filter on only parcel lockers (PA) or specifically exclude parcel lockers from the response (PG_EX). |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`LocationsResponseMultiple`](../../doc/models/locations-response-multiple.md).

## Example Usage

```php
$latitude = 52.2864669620795;

$longitude = 4.68239055845954;

$countryCode = CountrycodeEnum::NL;

$deliveryDate = '24-12-2022';

$openingTime = '09:00:00';

$apiResponse = $locationsController->getPickupLocationsByCoordinates(
    $latitude,
    $longitude,
    $countryCode,
    $deliveryDate,
    $openingTime
);
```

## Example Response *(as JSON)*

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

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Invalid request | [`InvalidRequestException`](../../doc/models/invalid-request-exception.md) |
| 401 | Invalid apikey | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 405 | Method not allowed | [`MethodNotAllowedOnlyGetPostException`](../../doc/models/method-not-allowed-only-get-post-exception.md) |
| 429 | Too many requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal server error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |


# Get Pickup Locations Within Area

Request example:

```
curl -X GET "https://api-sandbox.postnl.nl/shipment/v2_1/locations/area?LatitudeNorth=52.156439&LongitudeWest=5.015643&LatitudeSouth=52.017473&LongitudeEast=5.065254&CountryCode=NL&DeliveryDate=24-12-2023&OpeningTime=09%3A00%3A00" \
 -H "Accept: application/json" \
 -H "apikey: APIKEY-HERE" \
```

```php
function getPickupLocationsWithinArea(
    float $latitudeNorth,
    float $longitudeWest,
    float $latitudeSouth,
    float $longitudeEast,
    string $countryCode,
    ?string $deliveryDate = null,
    ?string $openingTime = null,
    ?array $deliveryOptions = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `latitudeNorth` | `float` | Query, Required | The northmost coordinates of the area |
| `longitudeWest` | `float` | Query, Required | The westmost coordinates of the area |
| `latitudeSouth` | `float` | Query, Required | The southmost coordinates of the area |
| `longitudeEast` | `float` | Query, Required | The eastmost coordinates of the area |
| `countryCode` | [`string(CountrycodeEnum)`](../../doc/models/countrycode-enum.md) | Query, Required | - |
| `deliveryDate` | `?string` | Query, Optional | The date of the earliest delivery date. Format:  dd-MM-yyyy. Note: this date cannot be in the past, otherwise an error is returned.<br>**Constraints**: *Pattern*: `^[0-3]\d-[0-1]\d-[1-2]\d{3}$` |
| `openingTime` | `?string` | Query, Optional | Opening time filter. Format: hh:mm:ss. This field will be used to filter out locations that are closed at the time provided.<br>**Constraints**: *Pattern*: `^[0-2]\d:[0-5]\d:[0-5]\d$` |
| `deliveryOptions` | [`?(string(LocationsDeliveryOptionEnum)[])`](../../doc/models/locations-delivery-option-enum.md) | Query, Optional | The pickup location types for which locations should be filtered. By default all location types are returned (PG = Retail points and parcel lockers). This can be used to filter on only parcel lockers (PA) or specifically exclude parcel lockers from the response (PG_EX). |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`LocationsResponseMultiple`](../../doc/models/locations-response-multiple.md).

## Example Usage

```php
$latitudeNorth = 52.156439;

$longitudeWest = 5.015643;

$latitudeSouth = 52.017473;

$longitudeEast = 5.065254;

$countryCode = CountrycodeEnum::NL;

$deliveryDate = '24-12-2023';

$openingTime = '09:00:00';

$apiResponse = $locationsController->getPickupLocationsWithinArea(
    $latitudeNorth,
    $longitudeWest,
    $latitudeSouth,
    $longitudeEast,
    $countryCode,
    $deliveryDate,
    $openingTime
);
```

## Example Response *(as JSON)*

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

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Invalid request | [`InvalidRequestException`](../../doc/models/invalid-request-exception.md) |
| 401 | Invalid apikey | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 405 | Method not allowed | [`MethodNotAllowedOnlyGetPostException`](../../doc/models/method-not-allowed-only-get-post-exception.md) |
| 429 | Too many requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal server error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |


# Get Pickup Location

Request example:

```
curl -X GET "https://api-sandbox.postnl.nl/shipment/v2_1/locations/lookup?LocationCode=216877" \
 -H "Accept: application/json" \
 -H "apikey: APIKEY-HERE" 
```

```php
function getPickupLocation(string $locationCode): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `locationCode` | `string` | Query, Required | LocationCode information |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`LocationResponseSingle`](../../doc/models/location-response-single.md).

## Example Usage

```php
$locationCode = '216877';

$apiResponse = $locationsController->getPickupLocation($locationCode);
```

## Example Response *(as JSON)*

```json
{
  "GetLocationsResult": {
    "ResponseLocation": {
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
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Invalid request | [`InvalidRequestException`](../../doc/models/invalid-request-exception.md) |
| 401 | Invalid apikey | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 405 | Method not allowed | [`MethodNotAllowedOnlyGetPostException`](../../doc/models/method-not-allowed-only-get-post-exception.md) |
| 429 | Too many requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal server error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |

