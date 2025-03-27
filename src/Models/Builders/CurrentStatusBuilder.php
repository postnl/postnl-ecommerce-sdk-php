<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CurrentStatus;
use PostnlEcommerceLib\Models\CurrentStatusShipment;

/**
 * Builder for model CurrentStatus
 *
 * @see CurrentStatus
 */
class CurrentStatusBuilder
{
    /**
     * @var CurrentStatus
     */
    private $instance;

    private function __construct(CurrentStatus $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Current Status Builder object.
     */
    public static function init(): self
    {
        return new self(new CurrentStatus());
    }

    /**
     * Sets Shipment field.
     *
     * @param CurrentStatusShipment|null $value
     */
    public function shipment(?CurrentStatusShipment $value): self
    {
        $this->instance->setShipment($value);
        return $this;
    }

    /**
     * Initializes a new Current Status object.
     */
    public function build(): CurrentStatus
    {
        return CoreHelper::clone($this->instance);
    }
}
