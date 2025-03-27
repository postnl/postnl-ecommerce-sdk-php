# Deliverydate

```php
$deliverydateController = $client->getDeliverydateController();
```

## Class Name

`DeliverydateController`

## Methods

* [Calculate Delivery Date](../../doc/controllers/deliverydate.md#calculate-delivery-date)
* [Calculate Shipping Date](../../doc/controllers/deliverydate.md#calculate-shipping-date)


# Calculate Delivery Date

Request example:

```
curl -X GET "https://api-sandbox.postnl.nl/shipment/v2_2/calculate/date/delivery?ShippingDate=29-05-2022+14%3A00%3A00&amp;ShippingDuration=1&amp;CutOffTime=17%3A00%3A00&amp;PostalCode=2132WT&amp;CountryCode=NL&amp;City=Hoofddorp&amp;Street=Siriusdreef&amp;HouseNumber=42&amp;HouseNrExt=A" \
 -H "Accept: application/json" \
 -H "apikey: APIKEY-HERE" 
```

```php
function calculateDeliveryDate(
    string $shippingDate,
    int $shippingDuration,
    string $cutOffTime,
    string $postalCode,
    string $countryCode,
    array $options,
    ?string $originCountryCode = OriginCountryCodeEnum::NL,
    ?string $city = null,
    ?string $street = null,
    ?int $houseNumber = null,
    ?string $houseNrExt = null,
    ?string $cutOffTimeMonday = null,
    ?bool $availableMonday = null,
    ?string $cutOffTimeTuesday = null,
    ?bool $availableTuesday = null,
    ?string $cutOffTimeWednesday = null,
    ?bool $availableWednesday = null,
    ?string $cutOffTimeThursday = null,
    ?bool $availableThursday = null,
    ?string $cutOffTimeFriday = null,
    ?bool $availableFriday = null,
    ?string $cutOffTimeSaturday = null,
    ?bool $availableSaturday = null,
    ?string $cutOffTimeSunday = null,
    ?bool $availableSunday = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `shippingDate` | `string` | Query, Required | Date/time of preparing the shipment for sending. Format: dd-MM-yyyy hh:mm:ss<br>**Constraints**: *Pattern*: `^[0-3]\d-[0-1]\d-[1-2]\d{3}\s[0-2]\d:[0-5]\d:[0-5]\d$` |
| `shippingDuration` | `int` | Query, Required | The duration it takes for the shipment to be delivered to PostNL in days. A value of 1 means that the parcel will be delivered to PostNL on the same day as the date specified in ShippingDate. A value of 2 means the parcel will arrive at PostNL a day later etc. |
| `cutOffTime` | `string` | Query, Required | Default cutoff time<br>**Constraints**: *Pattern*: `^[0-2]\d:[0-5]\d:[0-5]\d$` |
| `postalCode` | `string` | Query, Required | Zipcode of the destination address<br>**Constraints**: *Pattern*: `^[0-9]{4}([A-Z]{2})?$` |
| `countryCode` | [`string(CountrycodeEnum)`](../../doc/models/countrycode-enum.md) | Query, Required | The ISO2 destination country code |
| `options` | [`string(DeliverydateOptionEnum)[]`](../../doc/models/deliverydate-option-enum.md) | Query, Required | The delivery options that you want to take into account when calculating the expected delivery date |
| `originCountryCode` | [`?string(OriginCountryCodeEnum)`](../../doc/models/origin-country-code-enum.md) | Query, Optional | The ISO2 origin country code<br>**Default**: `OriginCountryCodeEnum::NL` |
| `city` | `?string` | Query, Optional | City of the destination address |
| `street` | `?string` | Query, Optional | The street name of the destination address. |
| `houseNumber` | `?int` | Query, Optional | The house number of the destination address |
| `houseNrExt` | `?string` | Query, Optional | House number extension of the delivery address |
| `cutOffTimeMonday` | `?string` | Query, Optional | Overrides default cutoff time specified in the CutOffTime parameter for mondays specifically<br>**Constraints**: *Pattern*: `^[0-2]\d:[0-5]\d:[0-5]\d$` |
| `availableMonday` | `?bool` | Query, Optional | Specifies if you are available to ship to PostNL on mondays |
| `cutOffTimeTuesday` | `?string` | Query, Optional | Overrides default cutoff time specified in the CutOffTime parameter for tuesdays specifically<br>**Constraints**: *Pattern*: `^[0-2]\d:[0-5]\d:[0-5]\d$` |
| `availableTuesday` | `?bool` | Query, Optional | Specifies if you are available to ship to PostNL on tuesdays |
| `cutOffTimeWednesday` | `?string` | Query, Optional | Overrides default cutoff time specified in the CutOffTime parameter for wednesdays specifically<br>**Constraints**: *Pattern*: `^[0-2]\d:[0-5]\d:[0-5]\d$` |
| `availableWednesday` | `?bool` | Query, Optional | Specifies if you are available to ship to PostNL on wednesdays |
| `cutOffTimeThursday` | `?string` | Query, Optional | Overrides default cutoff time specified in the CutOffTime parameter for thursdays specifically<br>**Constraints**: *Pattern*: `^[0-2]\d:[0-5]\d:[0-5]\d$` |
| `availableThursday` | `?bool` | Query, Optional | Specifies if you are available to ship to PostNL on thursdays |
| `cutOffTimeFriday` | `?string` | Query, Optional | Overrides default cutoff time specified in the CutOffTime parameter for fridays specifically<br>**Constraints**: *Pattern*: `^[0-2]\d:[0-5]\d:[0-5]\d$` |
| `availableFriday` | `?bool` | Query, Optional | Specifies if you are available to ship to PostNL on fridays |
| `cutOffTimeSaturday` | `?string` | Query, Optional | Overrides default cutoff time specified in the CutOffTime parameter for saturdays specifically<br>**Constraints**: *Pattern*: `^[0-2]\d:[0-5]\d:[0-5]\d$` |
| `availableSaturday` | `?bool` | Query, Optional | Specifies if you are available to ship to PostNL on saturdays |
| `cutOffTimeSunday` | `?string` | Query, Optional | Overrides default cutoff time specified in the CutOffTime parameter for sundays specifically<br>**Constraints**: *Pattern*: `^[0-2]\d:[0-5]\d:[0-5]\d$` |
| `availableSunday` | `?bool` | Query, Optional | Specifies if you are available to ship to PostNL on sundays |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DeliverydateDeliveryResponse`](../../doc/models/deliverydate-delivery-response.md).

## Example Usage

```php
$shippingDate = '29-05-2022 14:00:00';

$shippingDuration = 1;

$cutOffTime = '17:00:00';

$postalCode = '2132WT';

$countryCode = CountrycodeEnum::NL;

$options = [
    DeliverydateOptionEnum::SUNDAY,
    DeliverydateOptionEnum::TODAY,
    DeliverydateOptionEnum::AFTERNOON
];

$originCountryCode = OriginCountryCodeEnum::NL;

$city = 'Hoofddorp';

$street = 'Siriusdreef';

$houseNumber = 42;

$houseNrExt = 'A';

$apiResponse = $deliverydateController->calculateDeliveryDate(
    $shippingDate,
    $shippingDuration,
    $cutOffTime,
    $postalCode,
    $countryCode,
    $options,
    $originCountryCode,
    $city,
    $street,
    $houseNumber,
    $houseNrExt
);
```

## Example Response *(as JSON)*

```json
{
  "DeliveryDate": "30-05-2022",
  "Options": {
    "string": "Daytime"
  },
  "Sustainability": {
    "Code": "02",
    "Description": "Sustainable option"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`InvalidRequestException`](../../doc/models/invalid-request-exception.md) |
| 401 | Invalid apikey | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 405 | Method not allowed | [`MethodNotAllowedOnlyGetPostException`](../../doc/models/method-not-allowed-only-get-post-exception.md) |
| 429 | Too many requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal server error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |


# Calculate Shipping Date

Request example:

```
curl -X GET "https://api-sandbox.postnl.nl/shipment/v2_2/calculate/date/shipping?DeliveryDate=30-05-2022&amp;ShippingDuration=1&amp;PostalCode=2132WT&amp;CountryCode=NL&amp;City=Hoofddorp&amp;Street=Siriusdreef&amp;HouseNumber=42&amp;HouseNrExt=A" \
 -H "Accept: application/json" \
 -H "apikey: APIKEY-HERE" \

```

```php
function calculateShippingDate(
    string $deliveryDate,
    int $shippingDuration,
    string $postalCode,
    string $countryCode,
    ?string $originCountryCode = OriginCountryCodeEnum::NL,
    ?string $city = null,
    ?string $street = null,
    ?int $houseNumber = null,
    ?string $houseNrExt = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `deliveryDate` | `string` | Query, Required | Date of the expected delivery (to the final destination) of the shipment.<br>**Constraints**: *Pattern*: `^[0-3]\d-[0-1]\d-[1-2]\d{3}$` |
| `shippingDuration` | `int` | Query, Required | The duration it takes for the shipment to be delivered to PostNL in days. A value of 1 means that the parcel will be delivered to PostNL on the same day as the date specified in ShippingDate. A value of 2 means the parcel will arrive at PostNL a day later etc. |
| `postalCode` | `string` | Query, Required | Zipcode of the address<br>**Constraints**: *Pattern*: `^[0-9]{4}([A-Z]{2})?$` |
| `countryCode` | [`string(CountrycodeEnum)`](../../doc/models/countrycode-enum.md) | Query, Required | The ISO2 destination country code |
| `originCountryCode` | [`?string(OriginCountryCodeEnum)`](../../doc/models/origin-country-code-enum.md) | Query, Optional | The ISO2 country code of the origin country<br>**Default**: `OriginCountryCodeEnum::NL` |
| `city` | `?string` | Query, Optional | City of the destination address |
| `street` | `?string` | Query, Optional | The street name of the destination address |
| `houseNumber` | `?int` | Query, Optional | The house number of the destination address |
| `houseNrExt` | `?string` | Query, Optional | House number extension of the destination address |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`DeliverydateShippingResponse`](../../doc/models/deliverydate-shipping-response.md).

## Example Usage

```php
$deliveryDate = '30-05-2022';

$shippingDuration = 1;

$postalCode = '2132WT';

$countryCode = CountrycodeEnum::NL;

$originCountryCode = OriginCountryCodeEnum::NL;

$city = 'Hoofddorp';

$street = 'Siriusdreef';

$houseNumber = 42;

$houseNrExt = 'A';

$apiResponse = $deliverydateController->calculateShippingDate(
    $deliveryDate,
    $shippingDuration,
    $postalCode,
    $countryCode,
    $originCountryCode,
    $city,
    $street,
    $houseNumber,
    $houseNrExt
);
```

## Example Response *(as JSON)*

```json
{
  "SentDate": "29-06-2022"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`InvalidRequestException`](../../doc/models/invalid-request-exception.md) |
| 401 | Invalid apikey | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 405 | Method not allowed | [`MethodNotAllowedOnlyGetPostException`](../../doc/models/method-not-allowed-only-get-post-exception.md) |
| 429 | Too many requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal server error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |

