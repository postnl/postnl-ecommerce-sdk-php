<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Controllers;

use Core\Request\Parameters\BodyParam;
use Core\Request\Parameters\HeaderParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use PostnlEcommerceLib\Exceptions\ConfirmingResponseErrorException;
use PostnlEcommerceLib\Exceptions\InternalServerErrorException;
use PostnlEcommerceLib\Exceptions\MethodNotAllowedOnlyGetPostException;
use PostnlEcommerceLib\Exceptions\TooManyRequestsException;
use PostnlEcommerceLib\Exceptions\UnauthorizedException;
use PostnlEcommerceLib\Http\ApiResponse;
use PostnlEcommerceLib\Models\ConfirmingRequest;
use PostnlEcommerceLib\Models\ConfirmingResponse;

class ConfirmingController extends BaseController
{
    /**
     * @param ConfirmingRequest $body
     *
     * @return ApiResponse Response from the API call
     */
    public function confirmShipment(ConfirmingRequest $body): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/shipment/v2/confirm')
            ->auth('APIKeyHeader')
            ->parameters(HeaderParam::init('Content-Type', 'application/json'), BodyParam::init($body));

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error payload', ConfirmingResponseErrorException::class))
            ->throwErrorOn('401', ErrorType::init('Invalid apikey', UnauthorizedException::class))
            ->throwErrorOn(
                '405',
                ErrorType::init('Method not allowed', MethodNotAllowedOnlyGetPostException::class)
            )
            ->throwErrorOn('429', ErrorType::init('Too many requests', TooManyRequestsException::class))
            ->throwErrorOn('500', ErrorType::init('Internal server error', InternalServerErrorException::class))
            ->type(ConfirmingResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
