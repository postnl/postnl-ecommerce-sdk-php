<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\CustomerAddress;
use PostnlEcommerceLib\Models\LabellingCustomerLabellingAPI;

/**
 * Builder for model LabellingCustomerLabellingAPI
 *
 * @see LabellingCustomerLabellingAPI
 */
class LabellingCustomerLabellingAPIBuilder
{
    /**
     * @var LabellingCustomerLabellingAPI
     */
    private $instance;

    private function __construct(LabellingCustomerLabellingAPI $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Labelling Customer Labelling API Builder object.
     *
     * @param string $customerCode
     * @param string $customerNumber
     */
    public static function init(string $customerCode, string $customerNumber): self
    {
        return new self(new LabellingCustomerLabellingAPI($customerCode, $customerNumber));
    }

    /**
     * Sets Address field.
     *
     * @param CustomerAddress|null $value
     */
    public function address(?CustomerAddress $value): self
    {
        $this->instance->setAddress($value);
        return $this;
    }

    /**
     * Sets Collection Location field.
     *
     * @param string|null $value
     */
    public function collectionLocation(?string $value): self
    {
        $this->instance->setCollectionLocation($value);
        return $this;
    }

    /**
     * Sets Contact Person field.
     *
     * @param string|null $value
     */
    public function contactPerson(?string $value): self
    {
        $this->instance->setContactPerson($value);
        return $this;
    }

    /**
     * Sets Email field.
     *
     * @param string|null $value
     */
    public function email(?string $value): self
    {
        $this->instance->setEmail($value);
        return $this;
    }

    /**
     * Sets Name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Initializes a new Labelling Customer Labelling API object.
     */
    public function build(): LabellingCustomerLabellingAPI
    {
        return CoreHelper::clone($this->instance);
    }
}
