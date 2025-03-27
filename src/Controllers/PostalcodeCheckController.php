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
use PostnlEcommerceLib\Exceptions\MethodNotAllowedOnlyGetPostErrorCheckoutPostalcodeCheckAPIException;
use PostnlEcommerceLib\Exceptions\PostalcodeCheckResponseInvalidException;
use PostnlEcommerceLib\Exceptions\TooManyRequestsException;
use PostnlEcommerceLib\Exceptions\UnauthorizedException;
use PostnlEcommerceLib\Http\ApiResponse;
use PostnlEcommerceLib\Models\PostalcodeCheckAddress;

class PostalcodeCheckController extends BaseController
{
    /**
     * Please note that this API is not available on the sandbox environment.
     *
     * Request example:
     * ```
     * curl -X GET "https://api.postnl.nl/shipment/checkout/v1/postalcodecheck?postalcode=3571ZZ&amp;
     * housenumber=74&amp;housenumberaddition=bis" \
     * -H "Accept: application/json" \
     * -H "apikey: APIKEY-HERE"
     * ```
     *
     *
     * @param string $postalcode
     * @param string $housenumber
     * @param string|null $housenumberaddition
     *
     * @return ApiResponse Response from the API call
     */
    public function checkoutPostalcodeCheck(
        string $postalcode,
        string $housenumber,
        ?string $housenumberaddition = null
    ): ApiResponse {
        $_reqBuilder = $this->requestBuilder(RequestMethod::GET, '/shipment/checkout/v1/postalcodecheck')
            ->auth('APIKeyHeader')
            ->parameters(
                QueryParam::init('postalcode', $postalcode),
                QueryParam::init('housenumber', $housenumber),
                QueryParam::init('housenumberaddition', $housenumberaddition)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Bad request', PostalcodeCheckResponseInvalidException::class))
            ->throwErrorOn('401', ErrorType::init('Invalid apikey', UnauthorizedException::class))
            ->throwErrorOn(
                '405',
                ErrorType::init(
                    'Method not allowed',
                    MethodNotAllowedOnlyGetPostErrorCheckoutPostalcodeCheckAPIException::class
                )
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests', TooManyRequestsException::class))
            ->throwErrorOn('500', ErrorType::init('Internal server error', InternalServerErrorException::class))
            ->type(PostalcodeCheckAddress::class, 1)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
