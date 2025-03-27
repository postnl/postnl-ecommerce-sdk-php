# Shipment

```php
$shipmentController = $client->getShipmentController();
```

## Class Name

`ShipmentController`


# Generate Shipment Label

```php
function generateShipmentLabel(LabellingRequest $body, ?bool $confirm = true): ApiResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`LabellingRequest`](../../doc/models/labelling-request.md) | Body, Required | - |
| `confirm` | `?bool` | Query, Optional | With the Confirm boolean in the request, you can determine if you want to confirm the shipment in the same call or not. If the Boolean variable is true the shipment will be preannounced. If this is set to false, then an additional Confirming API request needs to be made.<br>**Default**: `true` |

## Response Type

This method returns an [`ApiResponse`](../../doc/api-response.md) instance. The `getResult()` method on this instance returns the response data which is of type [`LabellingResponse`](../../doc/models/labelling-response.md).

## Example Usage

```php
$body = LabellingRequestBuilder::init(
    LabellingCustomerBuilder::init(
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
    LabellingCustomerMessageBuilder::init(
        '1',
        '08-09-2022 12:00:00',
        'GraphicFile|PDF'
    )->build(),
    [
        LabellingCustomerShipmentBuilder::init(
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

$apiResponse = $shipmentController->generateShipmentLabel($body);
```

## Example Response *(as JSON)*

```json
{
  "MergedLabels": [],
  "ResponseShipments": [
    {
      "Barcode": "3SDEVC272730803",
      "Errors": [],
      "Warnings": [],
      "Labels": [
        {
          "Content": "JVBERi0xLjMKJeLjz9MKNSAwIG9iago8PAovQ29udGVudHMg[TRUNCATED]",
          "Labeltype": "Label",
          "OutputType": "PDF"
        }
      ],
      "ProductCodeDelivery": "3085"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Error payload | [`LabellingResponseInvalidException`](../../doc/models/labelling-response-invalid-exception.md) |
| 401 | Invalid apikey | [`UnauthorizedException`](../../doc/models/unauthorized-exception.md) |
| 405 | Method not allowed | [`MethodNotAllowedOnlyPostException`](../../doc/models/method-not-allowed-only-post-exception.md) |
| 429 | Too many requests | [`TooManyRequestsException`](../../doc/models/too-many-requests-exception.md) |
| 500 | Internal server error | [`InternalServerErrorException`](../../doc/models/internal-server-error-exception.md) |

