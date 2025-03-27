<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Exceptions;

use PostnlEcommerceLib\ApiHelper;

class InternalServerErrorException extends ApiException
{
    /**
     * @var \PostnlEcommerceLib\Models\Fault|null
     */
    private $fault;

    /**
     * Returns Fault.
     */
    public function getFault(): ?\PostnlEcommerceLib\Models\Fault
    {
        return $this->fault;
    }

    /**
     * Sets Fault.
     *
     * @maps fault
     */
    public function setFault(?\PostnlEcommerceLib\Models\Fault $fault): void
    {
        $this->fault = $fault;
    }

    /**
     * Converts the InternalServerErrorException object to a human-readable string representation.
     *
     * @return string The string representation of the InternalServerErrorException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'InternalServerErrorException',
            ['fault' => $this->fault],
            parent::__toString()
        );
    }
}
