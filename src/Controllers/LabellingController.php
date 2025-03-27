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
use Core\Request\Parameters\QueryParam;
use Core\Response\Types\ErrorType;
use CoreInterfaces\Core\Request\RequestMethod;
use PostnlEcommerceLib\Exceptions\InternalServerErrorException;
use PostnlEcommerceLib\Exceptions\LabellingResponseInvalidException;
use PostnlEcommerceLib\Exceptions\MethodNotAllowedOnlyPostException;
use PostnlEcommerceLib\Exceptions\TooManyRequestsException;
use PostnlEcommerceLib\Exceptions\UnauthorizedException;
use PostnlEcommerceLib\Http\ApiResponse;
use PostnlEcommerceLib\Models\LabellingRequest;
use PostnlEcommerceLib\Models\LabellingResponse;

class LabellingController extends BaseController
{
    /**
     * @param LabellingRequest $body
     * @param bool|null $confirm With the Confirm boolean in the request, you can determine if you
     *        want to confirm the shipment in the same call or not. If the Boolean variable is
     *        true the shipment will be preannounced. If this is set to false, then an additional
     *        Confirming API request needs to be made.
     *
     * @return ApiResponse Response from the API call
     */
    public function generateLabel(LabellingRequest $body, ?bool $confirm = true): ApiResponse
    {
        $_reqBuilder = $this->requestBuilder(RequestMethod::POST, '/shipment/v2_2/label')
            ->auth('APIKeyHeader')
            ->parameters(
                HeaderParam::init('Content-Type', 'application/json'),
                BodyParam::init($body),
                QueryParam::init('confirm', $confirm)
            );

        $_resHandler = $this->responseHandler()
            ->throwErrorOn('400', ErrorType::init('Error payload', LabellingResponseInvalidException::class))
            ->throwErrorOn('401', ErrorType::init('Invalid apikey', UnauthorizedException::class))
            ->throwErrorOn('405', ErrorType::init('Method not allowed', MethodNotAllowedOnlyPostException::class))
            ->throwErrorOn('429', ErrorType::init('Too many requests', TooManyRequestsException::class))
            ->throwErrorOn('500', ErrorType::init('Internal server error', InternalServerErrorException::class))
            ->type(LabellingResponse::class)
            ->returnApiResponse();

        return $this->execute($_reqBuilder, $_resHandler);
    }
}
