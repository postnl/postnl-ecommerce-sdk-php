<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Exceptions;

use PostnlEcommerceLib\ApiHelper;

class ConfirmingResponseErrorException extends ApiException
{
    /**
     * @var \PostnlEcommerceLib\Models\ConfirmingResponseShipment[]|null
     */
    private $responseShipments;

    /**
     * Returns Response Shipments.
     *
     * @return \PostnlEcommerceLib\Models\ConfirmingResponseShipment[]|null
     */
    public function getResponseShipments(): ?array
    {
        return $this->responseShipments;
    }

    /**
     * Sets Response Shipments.
     *
     * @maps ResponseShipments
     *
     * @param \PostnlEcommerceLib\Models\ConfirmingResponseShipment[]|null $responseShipments
     */
    public function setResponseShipments(?array $responseShipments): void
    {
        $this->responseShipments = $responseShipments;
    }

    /**
     * Converts the ConfirmingResponseErrorException object to a human-readable string representation.
     *
     * @return string The string representation of the ConfirmingResponseErrorException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ConfirmingResponseErrorException',
            ['responseShipments' => $this->responseShipments],
            parent::__toString()
        );
    }
}
