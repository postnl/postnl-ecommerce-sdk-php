<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Exceptions;

use PostnlEcommerceLib\ApiHelper;

class BarcodeResponseInvalidException extends ApiException
{
    /**
     * @var \PostnlEcommerceLib\Models\BarcodeError[]|null
     */
    private $errors;

    /**
     * Returns Errors.
     * A list of errors. See [Error codes](https://developer.postnl.nl/docs/#/http/reference-data/error-
     * codes) for possible values.
     *
     * @return \PostnlEcommerceLib\Models\BarcodeError[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * A list of errors. See [Error codes](https://developer.postnl.nl/docs/#/http/reference-data/error-
     * codes) for possible values.
     *
     * @maps errors
     *
     * @param \PostnlEcommerceLib\Models\BarcodeError[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Converts the BarcodeResponseInvalidException object to a human-readable string representation.
     *
     * @return string The string representation of the BarcodeResponseInvalidException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'BarcodeResponseInvalidException',
            ['errors' => $this->errors],
            parent::__toString()
        );
    }
}
