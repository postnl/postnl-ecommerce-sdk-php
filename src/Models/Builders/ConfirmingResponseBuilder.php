<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ConfirmingResponse;
use PostnlEcommerceLib\Models\ConfirmingResponseShipment;

/**
 * Builder for model ConfirmingResponse
 *
 * @see ConfirmingResponse
 */
class ConfirmingResponseBuilder
{
    /**
     * @var ConfirmingResponse
     */
    private $instance;

    private function __construct(ConfirmingResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Confirming Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ConfirmingResponse());
    }

    /**
     * Sets Response Shipments field.
     *
     * @param ConfirmingResponseShipment[]|null $value
     */
    public function responseShipments(?array $value): self
    {
        $this->instance->setResponseShipments($value);
        return $this;
    }

    /**
     * Initializes a new Confirming Response object.
     */
    public function build(): ConfirmingResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
