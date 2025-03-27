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

class PostalcodeCheckError implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $title;

    /**
     * @var string|null
     */
    private $detail;

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Title.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * Sets Title.
     *
     * @maps title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * Returns Detail.
     */
    public function getDetail(): ?string
    {
        return $this->detail;
    }

    /**
     * Sets Detail.
     *
     * @maps detail
     */
    public function setDetail(?string $detail): void
    {
        $this->detail = $detail;
    }

    /**
     * Converts the PostalcodeCheckError object to a human-readable string representation.
     *
     * @return string The string representation of the PostalcodeCheckError object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'PostalcodeCheckError',
            ['status' => $this->status, 'title' => $this->title, 'detail' => $this->detail]
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
        if (isset($this->status)) {
            $json['status'] = $this->status;
        }
        if (isset($this->title)) {
            $json['title']  = $this->title;
        }
        if (isset($this->detail)) {
            $json['detail'] = $this->detail;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
