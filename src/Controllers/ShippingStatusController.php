<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Controllers;

use Core\Request\Parameters\QueryParam;
use Core\Request\Parameters\TemplateParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use PostnlEcommerceLib\Exceptions\InternalServerErrorException;
use PostnlEcommerceLib\Exceptions\MethodNotAllowedOnlyGetException;
use PostnlEcommerceLib\Exceptions\TooManyRequestsException;
use PostnlEcommerceLib\Exceptions\UnauthorizedException;
use PostnlEcommerceLib\Http\ApiResponse;
use PostnlEcommerceLib\Models\LanguageEnum;
use PostnlEcommerceLib\Models\ShippingstatusResponse;
use PostnlEcommerceLib\Models\ShippingstatusResponseSignature;
use PostnlEcommerceLib\Models\ShippingstatusResponseUpdatedShipment;

class ShippingStatusController extends BaseController
{
    /**
     * Request example:
     * ```
     * curl -X GET "https://api-sandbox.postnl.nl/shipment/v2/status/barcode/3SDEVC172649258" \
     * -H "Accept: application/json" \
     * -H "apikey: APIKEY-HERE" \
     * ```
     *
     *
     * @param string $barcode Barcode of the shipment. This is a unique value.
     * @param bool|null $detail Option to include old statuses in the response
     * @param string|null $language Language of the returned shipment and status descriptions
     *        (default is Dutch).
     * @param string|null $maxDays Limit the number of days that will be searched (decrease this
     *        amount for better performance).
     *
     * @return ApiResponse Response from the API call
     */
    public function getStatusByBarcode(
        string $barcode,
        ?bool $detail = false,
        ?string $language = null,
        ?string $maxDays = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/shipment/v2/status/barcode/{barcode}')
            ->auth('APIKeyHeader')
            ->parameters(
                TemplateParam::init('barcode', $barcode),
                QueryParam::init('detail', $detail),
                QueryParam::init('language', $language)->serializeBy([LanguageEnum::class, 'checkValue']),
                QueryParam::init('maxDays', $maxDays)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Invalid request', InternalServerErrorException::class))
            ->throwErrorOn('401', ErrorType::init('Invalid apikey', UnauthorizedException::class))
            ->throwErrorOn('405', ErrorType::init('Method not allowed', MethodNotAllowedOnlyGetException::class))
            ->throwErrorOn('429', ErrorType::init('Too many requests', TooManyRequestsException::class))
            ->throwErrorOn('500', ErrorType::init('Internal server error', InternalServerErrorException::class))
            ->type(ShippingstatusResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Request example:
     * ```
     * curl -X GET "https://api-sandbox.postnl.nl/shipment/v2/status/reference?
     * detail=true&language=NL&customerCode={{CustomerCode}}&customerNumber={{CustomerNumber}}&reference=RE
     * F98173245876329" \
     * -H "Accept: application/json" \
     * -H "apikey: APIKEY-HERE"
     * ```
     *
     *
     * @param string $customerCode Customer code as known at PostNL Pakketten
     * @param string $customerNumber Customer number as known at PostNL Pakketten
     * @param string $referenceId The customer reference belonging to the shipment
     * @param bool|null $detail Option to include old statuses in the response
     * @param string|null $language Language of the returned shipment and status descriptions
     *        (default is Dutch).
     * @param string|null $maxDays Limit the number of days that will be searched (decrease this
     *        amount for better performance). By default this is 90 days in the past.
     *
     * @return ApiResponse Response from the API call
     */
    public function getStatusByReference(
        string $customerCode,
        string $customerNumber,
        string $referenceId,
        ?bool $detail = false,
        ?string $language = null,
        ?string $maxDays = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/shipment/v2/status/reference/{referenceId}')
            ->auth('APIKeyHeader')
            ->parameters(
                QueryParam::init('customerCode', $customerCode),
                QueryParam::init('customerNumber', $customerNumber),
                TemplateParam::init('referenceId', $referenceId),
                QueryParam::init('detail', $detail),
                QueryParam::init('language', $language)->serializeBy([LanguageEnum::class, 'checkValue']),
                QueryParam::init('maxDays', $maxDays)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Invalid request', InternalServerErrorException::class))
            ->throwErrorOn('401', ErrorType::init('Invalid apikey', UnauthorizedException::class))
            ->throwErrorOn('405', ErrorType::init('Method not allowed', MethodNotAllowedOnlyGetException::class))
            ->throwErrorOn('429', ErrorType::init('Too many requests', TooManyRequestsException::class))
            ->throwErrorOn('500', ErrorType::init('Internal server error', InternalServerErrorException::class))
            ->type(ShippingstatusResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Request example:
     * ```
     * curl -X GET "https://api-sandbox.postnl.nl/shipment/v2/status/signature/3SDEVC172649258" \
     * -H "Accept: application/json" \
     * -H "apikey: APIKEY-HERE"
     * ```
     *
     *
     * @param string $barcode Barcode of the shipment
     *
     * @return ApiResponse Response from the API call
     */
    public function getShipmentSignature(string $barcode): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/shipment/v2/status/signature/{barcode}')
            ->auth('APIKeyHeader')
            ->parameters(TemplateParam::init('barcode', $barcode));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Invalid request', InternalServerErrorException::class))
            ->throwErrorOn('401', ErrorType::init('Invalid apikey', UnauthorizedException::class))
            ->throwErrorOn('405', ErrorType::init('Method not allowed', MethodNotAllowedOnlyGetException::class))
            ->throwErrorOn('429', ErrorType::init('Too many requests', TooManyRequestsException::class))
            ->throwErrorOn('500', ErrorType::init('Internal server error', InternalServerErrorException::class))
            ->type(ShippingstatusResponseSignature::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Request example:
     * ```
     * curl -X GET "https://api-sandbox.postnl.nl/shipment/v2/status/11223344/updatedshipments?period=2022-
     * 12-25T10:00:00&amp;period=2022-12-25T10:12:00" \
     * -H "Accept: application/json" \
     * -H "apikey: APIKEY-HERE" \
     * ```
     *
     *
     * @param string $customernumber Your customer number
     * @param string[]|null $period Optional array which defines a specific period in which to
     *        return updated shipments. For optimal results, schedule calls at a frequency between
     *        5-15 minutes and align the requested period accordingly to ensure complete coverage
     *        of past updates. Shorter periods yield improved response times. The API accommodates
     *        a maximum requested period of 2 hours, granting access to shipment data up to 48
     *        hours in the past. Please use the following format: YYYY-MM-DDTHH:MM:SS and repeat
     *        this variable to define the period (e.g. /updatedshipments?period=2022-11-07T12:00:
     *        00.000&period=2022-11-07T12:05:00.000).
     *
     * @return ApiResponse Response from the API call
     */
    public function getUpdatedStatusByCustomerNumber(string $customernumber, ?array $period = null): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(
            RequestMethod::GET,
            '/shipment/v2/status/{customernumber}/updatedshipments'
        )
            ->auth('APIKeyHeader')
            ->parameters(
                TemplateParam::init('customernumber', $customernumber),
                QueryParam::init('period', $period)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Invalid request', InternalServerErrorException::class))
            ->throwErrorOn('401', ErrorType::init('Invalid apikey', UnauthorizedException::class))
            ->throwErrorOn('405', ErrorType::init('Method not allowed', MethodNotAllowedOnlyGetException::class))
            ->throwErrorOn('429', ErrorType::init('Too many requests', TooManyRequestsException::class))
            ->throwErrorOn('500', ErrorType::init('Internal server error', InternalServerErrorException::class))
            ->type(ShippingstatusResponseUpdatedShipment::class, 1)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
