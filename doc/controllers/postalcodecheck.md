# Postalcodecheck

```php
$postalcodecheckController = $client->getPostalcodecheckController();
```

## Class Name

`PostalcodecheckController`


# Checkout Postalcode Check

Please note that this API is not available on the sandbox environment.

Request example:

```
curl -X GET "https://api.postnl.nl/shipment/checkout/v1/postalcodecheck?postalcode=3571ZZ&amp;housenumber=74&amp;housenumberaddition=bis" \
 -H "Accept: application/json" \
 -H "apikey: APIKEY-HERE" 
```

```php
function checkoutPostalcodeCheck(
    string $postalcode,
    string $housenumber,
    ?string $housenumberaddition = null
): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `postalcode` | `string` | Query, Required | **Constraints**: *Minimum Length*: `6`, *Maximum Length*: `6` |
| `housenumber` | `string` | Query, Required | **Constraints**: *Minimum Length*: `1`, *Maximum Length*: `5` |
| `housenumberaddition` | `?string` | Query, Optional | **Constraints**: *Maximum Length*: `6` |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`PostalcodeCheckAddress[]`](../../doc/models/postalcode-check-address.md).

## Example Usage

```php
$postalcode = '3571ZZ';

$housenumber = '74';

$housenumberaddition = 'bis';

$apiResponse = $postalcodeCheckController->checkoutPostalcodeCheck(
    $postalcode,
    $housenumber,
    $housenumberaddition
);
```

## Example Response *(as JSON)*

```json
[
  {
    "city": "UTRECHT",
    "postalCode": "3571ZZ",
    "streetName": "Molengraaffplantsoen",
    "houseNumber": 74,
    "houseNumberAddition": "bis",
    "formattedAddress": [
      "Molengraaffplantsoen 74 bis",
      "3571ZZ UTRECHT"
    ]
  }
]
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad request | [`PostalcodeCheckResponseInvalidException`](../../doc/models/postalcode-check-response-invalid-exception.md) |
| 401 | Invalid apikey | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 405 | Method not allowed | [`MethodNotAllowedOnlyGetPostErrorCheckoutPostalcodeCheckAPIException`](../../doc/models/method-not-allowed-only-get-post-error-checkout-postalcode-check-api-exception.md) |
| 429 | Too many requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal server error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |

