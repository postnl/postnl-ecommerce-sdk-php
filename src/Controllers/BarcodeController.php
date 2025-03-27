<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Controllers;

use Core\Request\Parameters\QueryParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use PostnlEcommerceLib\Exceptions\BarcodeResponseInvalidException;
use PostnlEcommerceLib\Exceptions\InternalServerErrorException;
use PostnlEcommerceLib\Exceptions\MethodNotAllowedOnlyGetPostException;
use PostnlEcommerceLib\Exceptions\TooManyRequestsException;
use PostnlEcommerceLib\Exceptions\UnauthorizedException;
use PostnlEcommerceLib\Http\ApiResponse;
use PostnlEcommerceLib\Models\BarcodeResponse;
use PostnlEcommerceLib\Models\TypeEnum;

class BarcodeController extends BaseController
{
    /**
     * Request example:
     * ```
     * curl -X GET "https://api-sandbox.postnl.nl/shipment/v1_1/barcode?CustomerCode=DEVC&amp;
     * CustomerNumber=11223344&amp;Type=3S&amp;Serie=000000000-999999999&amp" \
     * -H "Accept: application/json" \
     * -H "apikey: APIKEY-HERE"
     * ```
     *
     *
     * @param string $customerCode The customer code for which you want a barcode to be generated
     * @param string $customerNumber The customer code for which you want a barcode to be generated
     * @param string $type The barcode type that you want to be generated
     * @param string|null $serie Barcode serie in the format '###000000-###000000', for example
     *        100000-20000. The range must consist of a minimal difference of 100.000. It is
     *        allowed to add extra leading zeros at the beginning of the serie. See
     *        [Guidelines](https://developer.postnl.nl/docs/#/http/api-endpoints/send-
     *        track/barcode/guidelines) for more information.
     * @param string|null $range Only used for International Mail and Packet products (PEPS)
     *        shipments (with type LA, RI, UE). Identifying the issuing postal administration's
     *        country (NL in this case).
     *
     * @return ApiResponse Response from the API call
     */
    public function generateBarcode(
        string $customerCode,
        string $customerNumber,
        string $type,
        ?string $serie = null,
        ?string $range = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/shipment/v1_1/barcode')
            ->auth('APIKeyHeader')
            ->parameters(
                QueryParam::init('CustomerCode', $customerCode),
                QueryParam::init('CustomerNumber', $customerNumber),
                QueryParam::init('Type', $type)->serializeBy([TypeEnum::class, 'checkValue']),
                QueryParam::init('Serie', $serie),
                QueryParam::init('Range', $range)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Invalid request', BarcodeResponseInvalidException::class))
            ->throwErrorOn('401', ErrorType::init('Invalid apikey', UnauthorizedException::class))
            ->throwErrorOn(
                '405',
                ErrorType::init('Method not allowed', MethodNotAllowedOnlyGetPostException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests', TooManyRequestsException::class))
            ->throwErrorOn('500', ErrorType::init('Internal server error', InternalServerErrorException::class))
            ->type(BarcodeResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
