<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Exceptions;

use PostnlEcommerceLib\ApiHelper;

class PostalcodeCheckResponseInvalidException extends ApiException
{
    /**
     * @var \PostnlEcommerceLib\Models\PostalcodeCheckError[]|null
     */
    private $errors;

    /**
     * Returns Errors.
     *
     * @return \PostnlEcommerceLib\Models\PostalcodeCheckError[]|null
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * Sets Errors.
     *
     * @maps errors
     *
     * @param \PostnlEcommerceLib\Models\PostalcodeCheckError[]|null $errors
     */
    public function setErrors(?array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * Converts the PostalcodeCheckResponseInvalidException object to a human-readable string
     * representation.
     *
     * @return string The string representation of the PostalcodeCheckResponseInvalidException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PostalcodeCheckResponseInvalidException',
            ['errors' => $this->errors],
            parent::__toString()
        );
    }
}
