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
use PostnlEcommerceLib\Exceptions\InternalServerErrorException;
use PostnlEcommerceLib\Exceptions\InvalidRequestException;
use PostnlEcommerceLib\Exceptions\MethodNotAllowedOnlyGetPostException;
use PostnlEcommerceLib\Exceptions\TooManyRequestsException;
use PostnlEcommerceLib\Exceptions\UnauthorizedException;
use PostnlEcommerceLib\Http\ApiResponse;
use PostnlEcommerceLib\Models\CountrycodeEnum;
use PostnlEcommerceLib\Models\TimeframeOptionsEnum;
use PostnlEcommerceLib\Models\TimeframeResponse;

class TimeframesController extends BaseController
{
    /**
     * Request example:
     * ```
     * curl -X GET "https://api-sandbox.postnl.nl/shipment/v2_1/calculate/timeframes?
     * AllowSundaySorting=false&StartDate=30-06-2022&EndDate=02-07-
     * 2022&CountryCode=NL&PostalCode=2132WT&HouseNumber=42&HouseNrExt=A&City=Hoofddorp&Street=Siriusdreef&
     * Options=Daytime%2CEvening" \
     * -H "Accept: application/json" \
     * -H "apikey: APIKEY-HERE" \
     * ```
     *
     *
     * @param bool $allowSundaySorting Whether or not the requesting party allows for Sunday sorting
     *        (which leads to delivery on Monday).
     * @param string $startDate Date of the beginning of the timeframe. Format: dd-MM-yyyy
     * @param string $endDate Date of the enddate of the timeframe. Format:dd-MM-yyyy. Enddate may
     *        not be before StartDate.
     * @param string $countryCode The ISO2 country code of the delivery address
     * @param string $postalCode Zipcode of the delivery address
     * @param int $houseNumber The house number of the delivery address
     * @param string[] $options The delivery options for which expected timeframes should be
     *        calculated. At least one delivery option must be specified. Multiple values should
     *        be comma-separated.
     * @param string|null $houseNrExt House number extension of the delivery address
     * @param string|null $city City of the delivery address
     * @param string|null $street The street name of the delivery address
     *
     * @return ApiResponse Response from the API call
     */
    public function retrieveDeliveryTimeframes(
        bool $allowSundaySorting,
        string $startDate,
        string $endDate,
        string $countryCode,
        string $postalCode,
        int $houseNumber,
        array $options,
        ?string $houseNrExt = null,
        ?string $city = null,
        ?string $street = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/shipment/v2_1/calculate/timeframes')
            ->auth('APIKeyHeader')
            ->parameters(
                QueryParam::init('AllowSundaySorting', $allowSundaySorting),
                QueryParam::init('StartDate', $startDate),
                QueryParam::init('EndDate', $endDate),
                QueryParam::init('CountryCode', $countryCode)->serializeBy([CountrycodeEnum::class, 'checkValue']),
                QueryParam::init('PostalCode', $postalCode),
                QueryParam::init('HouseNumber', $houseNumber),
                QueryParam::init('Options', $options)->serializeBy([TimeframeOptionsEnum::class, 'checkValue']),
                QueryParam::init('HouseNrExt', $houseNrExt),
                QueryParam::init('City', $city),
                QueryParam::init('Street', $street)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Invalid request', InvalidRequestException::class))
            ->throwErrorOn('401', ErrorType::init('Invalid apikey', UnauthorizedException::class))
            ->throwErrorOn(
                '405',
                ErrorType::init('Method not allowed', MethodNotAllowedOnlyGetPostException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests', TooManyRequestsException::class))
            ->throwErrorOn('500', ErrorType::init('Internal server error', InternalServerErrorException::class))
            ->type(TimeframeResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
