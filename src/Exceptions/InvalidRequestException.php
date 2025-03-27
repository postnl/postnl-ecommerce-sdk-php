<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Exceptions;

use PostnlEcommerceLib\ApiHelper;

class InvalidRequestException extends ApiException
{
    /**
     * @var \DateTime|null
     */
    private $date;

    /**
     * @var \PostnlEcommerceLib\Models\Error|null
     */
    private $error;

    /**
     * @var string|null
     */
    private $requestId;

    /**
     * Returns Date.
     */
    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    /**
     * Sets Date.
     *
     * @maps Date
     * @factory \PostnlEcommerceLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setDate(?\DateTime $date): void
    {
        $this->date = $date;
    }

    /**
     * Returns Error.
     */
    public function getError(): ?\PostnlEcommerceLib\Models\Error
    {
        return $this->error;
    }

    /**
     * Sets Error.
     *
     * @maps Error
     */
    public function setError(?\PostnlEcommerceLib\Models\Error $error): void
    {
        $this->error = $error;
    }

    /**
     * Returns Request Id.
     */
    public function getRequestId(): ?string
    {
        return $this->requestId;
    }

    /**
     * Sets Request Id.
     *
     * @maps RequestId
     */
    public function setRequestId(?string $requestId): void
    {
        $this->requestId = $requestId;
    }

    /**
     * Converts the InvalidRequestException object to a human-readable string representation.
     *
     * @return string The string representation of the InvalidRequestException object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'InvalidRequestException',
            ['date' => $this->date, 'error' => $this->error, 'requestId' => $this->requestId],
            parent::__toString()
        );
    }
}
