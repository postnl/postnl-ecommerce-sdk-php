<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\Amount;

/**
 * Builder for model Amount
 *
 * @see Amount
 */
class AmountBuilder
{
    /**
     * @var Amount
     */
    private $instance;

    private function __construct(Amount $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Amount Builder object.
     *
     * @param string $amountType
     * @param float $value
     */
    public static function init(string $amountType, float $value): self
    {
        return new self(new Amount($amountType, $value));
    }

    /**
     * Sets Account Name field.
     *
     * @param string|null $value
     */
    public function accountName(?string $value): self
    {
        $this->instance->setAccountName($value);
        return $this;
    }

    /**
     * Sets BIC field.
     *
     * @param string|null $value
     */
    public function bIC(?string $value): self
    {
        $this->instance->setBIC($value);
        return $this;
    }

    /**
     * Sets Currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets IBAN field.
     *
     * @param string|null $value
     */
    public function iBAN(?string $value): self
    {
        $this->instance->setIBAN($value);
        return $this;
    }

    /**
     * Sets Reference field.
     *
     * @param string|null $value
     */
    public function reference(?string $value): self
    {
        $this->instance->setReference($value);
        return $this;
    }

    /**
     * Sets Transaction Number field.
     *
     * @param string|null $value
     */
    public function transactionNumber(?string $value): self
    {
        $this->instance->setTransactionNumber($value);
        return $this;
    }

    /**
     * Initializes a new Amount object.
     */
    public function build(): Amount
    {
        return CoreHelper::clone($this->instance);
    }
}
