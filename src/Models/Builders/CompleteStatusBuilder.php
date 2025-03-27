<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CompleteStatus;
use PostnlEcommerceLib\Models\CompleteStatusShipment;

/**
 * Builder for model CompleteStatus
 *
 * @see CompleteStatus
 */
class CompleteStatusBuilder
{
    /**
     * @var CompleteStatus
     */
    private $instance;

    private function __construct(CompleteStatus $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Complete Status Builder object.
     */
    public static function init(): self
    {
        return new self(new CompleteStatus());
    }

    /**
     * Sets Shipment field.
     *
     * @param CompleteStatusShipment|null $value
     */
    public function shipment(?CompleteStatusShipment $value): self
    {
        $this->instance->setShipment($value);
        return $this;
    }

    /**
     * Initializes a new Complete Status object.
     */
    public function build(): CompleteStatus
    {
        return CoreHelper::clone($this->instance);
    }
}
