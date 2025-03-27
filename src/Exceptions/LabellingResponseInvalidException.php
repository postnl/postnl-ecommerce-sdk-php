<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Exceptions;

use PostnlEcommerceLib\ApiHelper;

class LabellingResponseInvalidException extends ApiException
{
    /**
     * @var \PostnlEcommerceLib\Models\LabellingError[]|null
     */
    private $errors;

    /**
     * Returns Errors.
     * A list of errors returned from the webservice. See the [Error codes](https://developer.postnl.
     * nl/docs/#/http/reference-data/error-codes) for possible values.
     *
     * @return \PostnlEcommerceLib\Models\LabellingError[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     * A list of errors returned from the webservice. See the [Error codes](https://developer.postnl.
     * nl/docs/#/http/reference-data/error-codes) for possible values.
     *
     * @maps Errors
     *
     * @param \PostnlEcommerceLib\Models\LabellingError[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Converts the LabellingResponseInvalidException object to a human-readable string representation.
     *
     * @return string The string representation of the LabellingResponseInvalidException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LabellingResponseInvalidException',
            ['errors' => $this->errors],
            parent::__toString()
        );
    }
}
