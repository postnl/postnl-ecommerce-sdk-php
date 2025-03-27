<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CheckoutAddress;
use PostnlEcommerceLib\Models\CheckoutCutOffTime;
use PostnlEcommerceLib\Models\CheckoutRequest;

/**
 * Builder for model CheckoutRequest
 *
 * @see CheckoutRequest
 */
class CheckoutRequestBuilder
{
    /**
     * @var CheckoutRequest
     */
    private $instance;

    private function __construct(CheckoutRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Checkout Request Builder object.
     *
     * @param string $orderDate
     * @param CheckoutCutOffTime[] $cutOffTimes
     * @param string[] $options
     * @param int $locations
     * @param int $days
     * @param CheckoutAddress[] $addresses
     */
    public static function init(
        string $orderDate,
        array $cutOffTimes,
        array $options,
        int $locations,
        int $days,
        array $addresses
    ): self {
        return new self(new CheckoutRequest($orderDate, $cutOffTimes, $options, $locations, $days, $addresses));
    }

    /**
     * Sets Shipping Duration field.
     *
     * @param int|null $value
     */
    public function shippingDuration(?int $value): self
    {
        $this->instance->setShippingDuration($value);
        return $this;
    }

    /**
     * Sets Holiday Sorting field.
     *
     * @param bool|null $value
     */
    public function holidaySorting(?bool $value): self
    {
        $this->instance->setHolidaySorting($value);
        return $this;
    }

    /**
     * Initializes a new Checkout Request object.
     */
    public function build(): CheckoutRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
