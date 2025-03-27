<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models;

use PostnlEcommerceLib\ApiHelper;
use stdClass;

class LabellingError implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $error;

    /**
     * @var string|null
     */
    private $code;

    /**
     * @var string|null
     */
    private $description;

    /**
     * Returns Error.
     * The error reason
     */
    public function getError(): ?string
    {
        return $this->error;
    }

    /**
     * Sets Error.
     * The error reason
     *
     * @maps Error
     */
    public function setError(?string $error): void
    {
        $this->error = $error;
    }

    /**
     * Returns Code.
     * The error code
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * The error code
     *
     * @maps Code
     */
    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Description.
     * The description of the error
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * The description of the error
     *
     * @maps Description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Converts the LabellingError object to a human-readable string representation.
     *
     * @return string The string representation of the LabellingError object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LabellingError',
            ['error' => $this->error, 'code' => $this->code, 'description' => $this->description]
        );
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->error)) {
            $json['Error']       = $this->error;
        }
        if (isset($this->code)) {
            $json['Code']        = $this->code;
        }
        if (isset($this->description)) {
            $json['Description'] = $this->description;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
