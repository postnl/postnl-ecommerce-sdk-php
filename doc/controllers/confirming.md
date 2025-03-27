# Confirming

```php
$confirmingController = $client->getConfirmingController();
```

## Class Name

`ConfirmingController`


# Confirm Shipment

```php
function confirmShipment(ConfirmingRequest $body): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`ConfirmingRequest`](../../doc/models/confirming-request.md) | Body, Required | - |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`ConfirmingResponse`](../../doc/models/confirming-response.md).

## Example Usage

```php
$body = ConfirmingRequestBuilder::init(
    CustomerBuilder::init(
        'DEVC',
        '11223344'
    )
        ->address(
            CustomerAddressBuilder::init(
                '02',
                'Den Haag',
                'NL'
            )
                ->companyName('PostNL')
                ->houseNr('3')
                ->street('Waldorpstraat')
                ->zipcode('2521CA')
                ->build()
        )
        ->collectionLocation('123456')
        ->contactPerson('Janssen')
        ->email('email@company.com')
        ->name('Janssen')
        ->build(),
    ConfirmingMessageBuilder::init(
        '1',
        '08-09-2022 12:00:00'
    )->build(),
    [
        ConfirmingShipmentBuilder::init(
            [
                AddressBuilder::init(
                    '01',
                    'NL'
                )
                    ->city('Utrecht')
                    ->firstName('Peter')
                    ->houseNr('9')
                    ->houseNrExt('a bis')
                    ->name('de Ruiter')
                    ->street('Bilderdijkstraat')
                    ->zipcode('3532VA')
                    ->build()
            ],
            '3SDEVC748859096',
            DimensionBuilder::init(
                2000
            )->build(),
            '3085'
        )
            ->contacts(
                [
                    ContactBuilder::init(
                        '01'
                    )
                        ->email('receiver@email.com')
                        ->sMSNr('+31612345678')
                        ->telNr('+31301234567')
                        ->build()
                ]
            )
            ->build()
    ]
)->build();

$apiResponse = $confirmingController->confirmShipment($body);
```

## Example Response *(as JSON)*

```json
{
  "ResponseShipments": [
    {
      "Errors": [],
      "Warnings": [
        {
          "Code": "1280103",
          "Description": "Address is unknown"
        }
      ],
      "Barcode": "3SDEVC281677095"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error payload | [`ConfirmingResponseErrorException`](../../doc/models/confirming-response-error-exception.md) |
| 401 | Invalid apikey | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 405 | Method not allowed | [`MethodNotAllowedOnlyGetPostException`](../../doc/models/method-not-allowed-only-get-post-exception.md) |
| 429 | Too many requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal server error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |

