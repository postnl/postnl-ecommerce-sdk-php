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
use PostnlEcommerceLib\Models\DeliverydateDeliveryResponse;
use PostnlEcommerceLib\Models\DeliverydateOptionEnum;
use PostnlEcommerceLib\Models\DeliverydateShippingResponse;
use PostnlEcommerceLib\Models\OriginCountryCodeEnum;

class DeliverydateController extends BaseController
{
    /**
     * Request example:
     * ```
     * curl -X GET "https://api-sandbox.postnl.nl/shipment/v2_2/calculate/date/delivery?ShippingDate=29-05-
     * 2022+14%3A00%3A00&amp;ShippingDuration=1&amp;CutOffTime=17%3A00%3A00&amp;PostalCode=2132WT&amp;
     * CountryCode=NL&amp;City=Hoofddorp&amp;Street=Siriusdreef&amp;HouseNumber=42&amp;HouseNrExt=A" \
     * -H "Accept: application/json" \
     * -H "apikey: APIKEY-HERE"
     * ```
     *
     *
     * @param string $shippingDate Date/time of preparing the shipment for sending. Format:
     *        dd-MM-yyyy hh:mm:ss
     * @param int $shippingDuration The duration it takes for the shipment to be delivered to PostNL
     *        in days. A value of 1 means that the parcel will be delivered to PostNL on the same
     *        day as the date specified in ShippingDate. A value of 2 means the parcel will arrive
     *        at PostNL a day later etc.
     * @param string $cutOffTime Default cutoff time
     * @param string $postalCode Zipcode of the destination address
     * @param string $countryCode The ISO2 destination country code
     * @param string[] $options The delivery options that you want to take into account when
     *        calculating the expected delivery date
     * @param string|null $originCountryCode The ISO2 origin country code
     * @param string|null $city City of the destination address
     * @param string|null $street The street name of the destination address.
     * @param int|null $houseNumber The house number of the destination address
     * @param string|null $houseNrExt House number extension of the delivery address
     * @param string|null $cutOffTimeMonday Overrides default cutoff time specified in the
     *        CutOffTime parameter for mondays specifically
     * @param bool|null $availableMonday Specifies if you are available to ship to PostNL on mondays
     * @param string|null $cutOffTimeTuesday Overrides default cutoff time specified in the
     *        CutOffTime parameter for tuesdays specifically
     * @param bool|null $availableTuesday Specifies if you are available to ship to PostNL on
     *        tuesdays
     * @param string|null $cutOffTimeWednesday Overrides default cutoff time specified in the
     *        CutOffTime parameter for wednesdays specifically
     * @param bool|null $availableWednesday Specifies if you are available to ship to PostNL on
     *        wednesdays
     * @param string|null $cutOffTimeThursday Overrides default cutoff time specified in the
     *        CutOffTime parameter for thursdays specifically
     * @param bool|null $availableThursday Specifies if you are available to ship to PostNL on
     *        thursdays
     * @param string|null $cutOffTimeFriday Overrides default cutoff time specified in the
     *        CutOffTime parameter for fridays specifically
     * @param bool|null $availableFriday Specifies if you are available to ship to PostNL on fridays
     * @param string|null $cutOffTimeSaturday Overrides default cutoff time specified in the
     *        CutOffTime parameter for saturdays specifically
     * @param bool|null $availableSaturday Specifies if you are available to ship to PostNL on
     *        saturdays
     * @param string|null $cutOffTimeSunday Overrides default cutoff time specified in the
     *        CutOffTime parameter for sundays specifically
     * @param bool|null $availableSunday Specifies if you are available to ship to PostNL on sundays
     *
     * @return ApiResponse Response from the API call
     */
    public function calculateDeliveryDate(
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
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/shipment/v2_2/calculate/date/delivery')
            ->auth('APIKeyHeader')
            ->parameters(
                QueryParam::init('ShippingDate', $shippingDate),
                QueryParam::init('ShippingDuration', $shippingDuration),
                QueryParam::init('CutOffTime', $cutOffTime),
                QueryParam::init('PostalCode', $postalCode),
                QueryParam::init('CountryCode', $countryCode)->serializeBy([CountrycodeEnum::class, 'checkValue']),
                QueryParam::init('Options', $options)->serializeBy([DeliverydateOptionEnum::class, 'checkValue']),
                QueryParam::init('OriginCountryCode', $originCountryCode)
                    ->serializeBy([OriginCountryCodeEnum::class, 'checkValue']),
                QueryParam::init('City', $city),
                QueryParam::init('Street', $street),
                QueryParam::init('HouseNumber', $houseNumber),
                QueryParam::init('HouseNrExt', $houseNrExt),
                QueryParam::init('CutOffTimeMonday', $cutOffTimeMonday),
                QueryParam::init('AvailableMonday', $availableMonday),
                QueryParam::init('CutOffTimeTuesday', $cutOffTimeTuesday),
                QueryParam::init('AvailableTuesday', $availableTuesday),
                QueryParam::init('CutOffTimeWednesday', $cutOffTimeWednesday),
                QueryParam::init('AvailableWednesday', $availableWednesday),
                QueryParam::init('CutOffTimeThursday', $cutOffTimeThursday),
                QueryParam::init('AvailableThursday', $availableThursday),
                QueryParam::init('CutOffTimeFriday', $cutOffTimeFriday),
                QueryParam::init('AvailableFriday', $availableFriday),
                QueryParam::init('CutOffTimeSaturday', $cutOffTimeSaturday),
                QueryParam::init('AvailableSaturday', $availableSaturday),
                QueryParam::init('CutOffTimeSunday', $cutOffTimeSunday),
                QueryParam::init('AvailableSunday', $availableSunday)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request', InvalidRequestException::class))
            ->throwErrorOn('401', ErrorType::init('Invalid apikey', UnauthorizedException::class))
            ->throwErrorOn(
                '405',
                ErrorType::init('Method not allowed', MethodNotAllowedOnlyGetPostException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests', TooManyRequestsException::class))
            ->throwErrorOn('500', ErrorType::init('Internal server error', InternalServerErrorException::class))
            ->type(DeliverydateDeliveryResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Request example:
     * ```
     * curl -X GET "https://api-sandbox.postnl.nl/shipment/v2_2/calculate/date/shipping?DeliveryDate=30-05-
     * 2022&amp;ShippingDuration=1&amp;PostalCode=2132WT&amp;CountryCode=NL&amp;City=Hoofddorp&amp;
     * Street=Siriusdreef&amp;HouseNumber=42&amp;HouseNrExt=A" \
     * -H "Accept: application/json" \
     * -H "apikey: APIKEY-HERE" \
     *
     * ```
     *
     *
     * @param string $deliveryDate Date of the expected delivery (to the final destination) of the
     *        shipment.
     * @param int $shippingDuration The duration it takes for the shipment to be delivered to PostNL
     *        in days. A value of 1 means that the parcel will be delivered to PostNL on the same
     *        day as the date specified in ShippingDate. A value of 2 means the parcel will arrive
     *        at PostNL a day later etc.
     * @param string $postalCode Zipcode of the address
     * @param string $countryCode The ISO2 destination country code
     * @param string|null $originCountryCode The ISO2 country code of the origin country
     * @param string|null $city City of the destination address
     * @param string|null $street The street name of the destination address
     * @param int|null $houseNumber The house number of the destination address
     * @param string|null $houseNrExt House number extension of the destination address
     *
     * @return ApiResponse Response from the API call
     */
    public function calculateShippingDate(
        string $deliveryDate,
        int $shippingDuration,
        string $postalCode,
        string $countryCode,
        ?string $originCountryCode = OriginCountryCodeEnum::NL,
        ?string $city = null,
        ?string $street = null,
        ?int $houseNumber = null,
        ?string $houseNrExt = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/shipment/v2_2/calculate/date/shipping')
            ->auth('APIKeyHeader')
            ->parameters(
                QueryParam::init('DeliveryDate', $deliveryDate),
                QueryParam::init('ShippingDuration', $shippingDuration),
                QueryParam::init('PostalCode', $postalCode),
                QueryParam::init('CountryCode', $countryCode)->serializeBy([CountrycodeEnum::class, 'checkValue']),
                QueryParam::init('OriginCountryCode', $originCountryCode)
                    ->serializeBy([OriginCountryCodeEnum::class, 'checkValue']),
                QueryParam::init('City', $city),
                QueryParam::init('Street', $street),
                QueryParam::init('HouseNumber', $houseNumber),
                QueryParam::init('HouseNrExt', $houseNrExt)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request', InvalidRequestException::class))
            ->throwErrorOn('401', ErrorType::init('Invalid apikey', UnauthorizedException::class))
            ->throwErrorOn(
                '405',
                ErrorType::init('Method not allowed', MethodNotAllowedOnlyGetPostException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests', TooManyRequestsException::class))
            ->throwErrorOn('500', ErrorType::init('Internal server error', InternalServerErrorException::class))
            ->type(DeliverydateShippingResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
