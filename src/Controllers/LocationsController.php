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
use PostnlEcommerceLib\Models\LocationResponseSingle;
use PostnlEcommerceLib\Models\LocationsDeliveryOptionEnum;
use PostnlEcommerceLib\Models\LocationsResponseMultiple;

class LocationsController extends BaseController
{
    /**
     * Request example:
     * ```
     * curl -X GET "https://api-sandbox.postnl.nl/shipment/v2_1/locations/nearest?
     * CountryCode=NL&PostalCode=2132WT&City=Hoofddorp&Street=Siriusdreef&HouseNumber=42&HouseNumberExtensi
     * on=-60&DeliveryDate=24-12-2022&OpeningTime=09%3A00%3A00" \
     * -H "Accept: application/json" \
     * -H "apikey: APIKEY-HERE" \
     * ```
     *
     *
     * @param string $countryCode The country of the recipient's address
     * @param string $postalCode The zipcode of the recipient's address
     * @param string|null $city The city of the recipient's address
     * @param string|null $street The street name of the recipient's address
     * @param int|null $houseNumber The house number of the recipient's address
     * @param string|null $houseNumberExtension The house number extension of the recipient's
     *        address
     * @param string|null $deliveryDate The date of the earliest delivery date at the pickup
     *        location. Format:  dd-MM-yyyy. Note: this date cannot be in the past, otherwise an
     *        error is returned. If not provided, the present day is used as a default
     * @param string|null $openingTime Opening time filter. Format: hh:mm:ss. This field will be
     *        used to filter out locations that are closed at the time provided. If no opening
     *        time is provided all locations will be returned regardless of their opening times.
     * @param string[]|null $deliveryOptions The pickup location types for which locations should be
     *        filtered. By default all location types are returned (PG = Retail points and parcel
     *        lockers). This can be used to filter on only parcel lockers (PA) or specifically
     *        exclude parcel lockers from the response (PG_EX).
     *
     * @return ApiResponse Response from the API call
     */
    public function getPickupLocationsByAddress(
        string $countryCode,
        string $postalCode,
        ?string $city = null,
        ?string $street = null,
        ?int $houseNumber = null,
        ?string $houseNumberExtension = null,
        ?string $deliveryDate = null,
        ?string $openingTime = null,
        ?array $deliveryOptions = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/shipment/v2_1/locations/nearest')
            ->auth('APIKeyHeader')
            ->parameters(
                QueryParam::init('CountryCode', $countryCode)->serializeBy([CountrycodeEnum::class, 'checkValue']),
                QueryParam::init('PostalCode', $postalCode),
                QueryParam::init('City', $city),
                QueryParam::init('Street', $street),
                QueryParam::init('HouseNumber', $houseNumber),
                QueryParam::init('HouseNumberExtension', $houseNumberExtension),
                QueryParam::init('DeliveryDate', $deliveryDate),
                QueryParam::init('OpeningTime', $openingTime),
                QueryParam::init('DeliveryOptions', $deliveryOptions)
                    ->serializeBy([LocationsDeliveryOptionEnum::class, 'checkValue'])
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
            ->type(LocationsResponseMultiple::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Request example:
     * ```
     * curl -X GET "https://api-sandbox.postnl.nl/shipment/v2_1/locations/nearest/geocode?Latitude=52.
     * 2864669620795&Longitude=4.68239055845954&CountryCode=NL&DeliveryDate=24-12-
     * 2022&OpeningTime=09%3A00%3A00" \
     * -H "Accept: application/json" \
     * -H "apikey: APIKEY-HERE" \
     * ```
     *
     *
     * @param float $latitude The latitude of the location
     * @param float $longitude The longitude of the location
     * @param string $countryCode The coutry for which the coordinates are provided
     * @param string|null $deliveryDate The date of the earliest delivery date. Format: dd-MM-yyyy.
     *        Note: this date cannot be in the past, otherwise an error is returned.
     * @param string|null $openingTime Opening time filter. Format: hh:mm:ss. This field will be
     *        used to filter out locations that are closed at the time provided.
     * @param string[]|null $deliveryOptions The pickup location types for which locations should be
     *        filtered. By default all location types are returned (PG = Retail points and parcel
     *        lockers). This can be used to filter on only parcel lockers (PA) or specifically
     *        exclude parcel lockers from the response (PG_EX).
     *
     * @return ApiResponse Response from the API call
     */
    public function getPickupLocationsByCoordinates(
        float $latitude,
        float $longitude,
        string $countryCode,
        ?string $deliveryDate = null,
        ?string $openingTime = null,
        ?array $deliveryOptions = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/shipment/v2_1/locations/nearest/geocode')
            ->auth('APIKeyHeader')
            ->parameters(
                QueryParam::init('Latitude', $latitude),
                QueryParam::init('Longitude', $longitude),
                QueryParam::init('CountryCode', $countryCode)->serializeBy([CountrycodeEnum::class, 'checkValue']),
                QueryParam::init('DeliveryDate', $deliveryDate),
                QueryParam::init('OpeningTime', $openingTime),
                QueryParam::init('DeliveryOptions', $deliveryOptions)
                    ->serializeBy([LocationsDeliveryOptionEnum::class, 'checkValue'])
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
            ->type(LocationsResponseMultiple::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Request example:
     * ```
     * curl -X GET "https://api-sandbox.postnl.nl/shipment/v2_1/locations/area?LatitudeNorth=52.
     * 156439&LongitudeWest=5.015643&LatitudeSouth=52.017473&LongitudeEast=5.
     * 065254&CountryCode=NL&DeliveryDate=24-12-2023&OpeningTime=09%3A00%3A00" \
     * -H "Accept: application/json" \
     * -H "apikey: APIKEY-HERE" \
     * ```
     *
     *
     * @param float $latitudeNorth The northmost coordinates of the area
     * @param float $longitudeWest The westmost coordinates of the area
     * @param float $latitudeSouth The southmost coordinates of the area
     * @param float $longitudeEast The eastmost coordinates of the area
     * @param string $countryCode
     * @param string|null $deliveryDate The date of the earliest delivery date. Format: dd-MM-yyyy.
     *        Note: this date cannot be in the past, otherwise an error is returned.
     * @param string|null $openingTime Opening time filter. Format: hh:mm:ss. This field will be
     *        used to filter out locations that are closed at the time provided.
     * @param string[]|null $deliveryOptions The pickup location types for which locations should be
     *        filtered. By default all location types are returned (PG = Retail points and parcel
     *        lockers). This can be used to filter on only parcel lockers (PA) or specifically
     *        exclude parcel lockers from the response (PG_EX).
     *
     * @return ApiResponse Response from the API call
     */
    public function getPickupLocationsWithinArea(
        float $latitudeNorth,
        float $longitudeWest,
        float $latitudeSouth,
        float $longitudeEast,
        string $countryCode,
        ?string $deliveryDate = null,
        ?string $openingTime = null,
        ?array $deliveryOptions = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/shipment/v2_1/locations/area')
            ->auth('APIKeyHeader')
            ->parameters(
                QueryParam::init('LatitudeNorth', $latitudeNorth),
                QueryParam::init('LongitudeWest', $longitudeWest),
                QueryParam::init('LatitudeSouth', $latitudeSouth),
                QueryParam::init('LongitudeEast', $longitudeEast),
                QueryParam::init('CountryCode', $countryCode)->serializeBy([CountrycodeEnum::class, 'checkValue']),
                QueryParam::init('DeliveryDate', $deliveryDate),
                QueryParam::init('OpeningTime', $openingTime),
                QueryParam::init('DeliveryOptions', $deliveryOptions)
                    ->serializeBy([LocationsDeliveryOptionEnum::class, 'checkValue'])
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
            ->type(LocationsResponseMultiple::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }

    /**
     * Request example:
     * ```
     * curl -X GET "https://api-sandbox.postnl.nl/shipment/v2_1/locations/lookup?LocationCode=216877" \
     * -H "Accept: application/json" \
     * -H "apikey: APIKEY-HERE"
     * ```
     *
     *
     * @param string $locationCode LocationCode information
     *
     * @return ApiResponse Response from the API call
     */
    public function getPickupLocation(string $locationCode): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/shipment/v2_1/locations/lookup')
            ->auth('APIKeyHeader')
            ->parameters(QueryParam::init('LocationCode', $locationCode));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Invalid request', InvalidRequestException::class))
            ->throwErrorOn('401', ErrorType::init('Invalid apikey', UnauthorizedException::class))
            ->throwErrorOn(
                '405',
                ErrorType::init('Method not allowed', MethodNotAllowedOnlyGetPostException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests', TooManyRequestsException::class))
            ->throwErrorOn('500', ErrorType::init('Internal server error', InternalServerErrorException::class))
            ->type(LocationResponseSingle::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
