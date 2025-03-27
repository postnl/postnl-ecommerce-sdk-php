<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\ConfirmingMessage;
use PostnlEcommerceLib\Models\ConfirmingRequest;
use PostnlEcommerceLib\Models\ConfirmingShipment;
use PostnlEcommerceLib\Models\Customer;

/**
 * Builder for model ConfirmingRequest
 *
 * @see ConfirmingRequest
 */
class ConfirmingRequestBuilder
{
    /**
     * @var ConfirmingRequest
     */
    private $instance;

    private function __construct(ConfirmingRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Confirming Request Builder object.
     *
     * @param Customer $customer
     * @param ConfirmingMessage $message
     * @param ConfirmingShipment[] $shipments
     */
    public static function init(Customer $customer, ConfirmingMessage $message, array $shipments): self
    {
        return new self(new ConfirmingRequest($customer, $message, $shipments));
    }

    /**
     * Initializes a new Confirming Request object.
     */
    public function build(): ConfirmingRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
