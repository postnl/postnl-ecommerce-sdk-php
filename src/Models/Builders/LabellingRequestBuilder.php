<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\LabellingCustomer;
use PostnlEcommerceLib\Models\LabellingCustomerMessage;
use PostnlEcommerceLib\Models\LabellingCustomerShipment;
use PostnlEcommerceLib\Models\LabellingRequest;

/**
 * Builder for model LabellingRequest
 *
 * @see LabellingRequest
 */
class LabellingRequestBuilder
{
    /**
     * @var LabellingRequest
     */
    private $instance;

    private function __construct(LabellingRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Labelling Request Builder object.
     *
     * @param LabellingCustomer $customer
     * @param LabellingCustomerMessage $message
     * @param LabellingCustomerShipment[] $shipments
     */
    public static function init(LabellingCustomer $customer, LabellingCustomerMessage $message, array $shipments): self
    {
        return new self(new LabellingRequest($customer, $message, $shipments));
    }

    /**
     * Sets Label Signature field.
     *
     * @param string|null $value
     */
    public function labelSignature(?string $value): self
    {
        $this->instance->setLabelSignature($value);
        return $this;
    }

    /**
     * Initializes a new Labelling Request object.
     */
    public function build(): LabellingRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
