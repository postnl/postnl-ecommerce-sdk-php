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

class Amount implements \JsonSerializable
{
    /**
     * @var string
     */
    private $amountType;

    /**
     * @var string|null
     */
    private $accountName;

    /**
     * @var string|null
     */
    private $bIC;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var string|null
     */
    private $iBAN;

    /**
     * @var string|null
     */
    private $reference;

    /**
     * @var string|null
     */
    private $transactionNumber;

    /**
     * @var float
     */
    private $value;

    /**
     * @param string $amountType
     * @param float $value
     */
    public function __construct(string $amountType, float $value)
    {
        $this->amountType = $amountType;
        $this->value = $value;
    }

    /**
     * Returns Amount Type.
     * Amount type. Please see [Amount types](https://developer.postnl.nl/docs/#/http/reference-
     * data/reference-codes/amount-types) for the available types.
     */
    public function getAmountType(): string
    {
        return $this->amountType;
    }

    /**
     * Sets Amount Type.
     * Amount type. Please see [Amount types](https://developer.postnl.nl/docs/#/http/reference-
     * data/reference-codes/amount-types) for the available types.
     *
     * @required
     * @maps AmountType
     */
    public function setAmountType(string $amountType): void
    {
        $this->amountType = $amountType;
    }

    /**
     * Returns Account Name.
     * Name of bank account owner
     */
    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    /**
     * Sets Account Name.
     * Name of bank account owner
     *
     * @maps AccountName
     */
    public function setAccountName(?string $accountName): void
    {
        $this->accountName = $accountName;
    }

    /**
     * Returns B IC.
     * BIC number,optional for COD shipments (mandatory for bank account number other than originating in
     * The Netherlands)
     */
    public function getBIC(): ?string
    {
        return $this->bIC;
    }

    /**
     * Sets B IC.
     * BIC number,optional for COD shipments (mandatory for bank account number other than originating in
     * The Netherlands)
     *
     * @maps BIC
     */
    public function setBIC(?string $bIC): void
    {
        $this->bIC = $bIC;
    }

    /**
     * Returns Currency.
     * Currency code. only EUR, GBP, USD and CNY are allowed.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     * Currency code. only EUR, GBP, USD and CNY are allowed.
     *
     * @maps Currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns I BAN.
     * IBAN bank account number,mandatory for COD shipments. Dutch IBAN numbers are 18 characters
     */
    public function getIBAN(): ?string
    {
        return $this->iBAN;
    }

    /**
     * Sets I BAN.
     * IBAN bank account number,mandatory for COD shipments. Dutch IBAN numbers are 18 characters
     *
     * @maps IBAN
     */
    public function setIBAN(?string $iBAN): void
    {
        $this->iBAN = $iBAN;
    }

    /**
     * Returns Reference.
     * Personal payment reference
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Sets Reference.
     * Personal payment reference
     *
     * @maps Reference
     */
    public function setReference(?string $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * Returns Transaction Number.
     * Transaction number
     */
    public function getTransactionNumber(): ?string
    {
        return $this->transactionNumber;
    }

    /**
     * Sets Transaction Number.
     * Transaction number
     *
     * @maps TransactionNumber
     */
    public function setTransactionNumber(?string $transactionNumber): void
    {
        $this->transactionNumber = $transactionNumber;
    }

    /**
     * Returns Value.
     * Money value in EUR (unless value Currency is specified for another currency). Value format (N6.2):
     * #####0.00 (2 digits behind decimal dot). Mandatory for COD, Insured products (with the exception of
     * certain productcodes with a standard insured amount).
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Sets Value.
     * Money value in EUR (unless value Currency is specified for another currency). Value format (N6.2):
     * #####0.00 (2 digits behind decimal dot). Mandatory for COD, Insured products (with the exception of
     * certain productcodes with a standard insured amount).
     *
     * @required
     * @maps Value
     */
    public function setValue(float $value): void
    {
        $this->value = $value;
    }

    /**
     * Converts the Amount object to a human-readable string representation.
     *
     * @return string The string representation of the Amount object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Amount',
            [
                'amountType' => $this->amountType,
                'accountName' => $this->accountName,
                'bIC' => $this->bIC,
                'currency' => $this->currency,
                'iBAN' => $this->iBAN,
                'reference' => $this->reference,
                'transactionNumber' => $this->transactionNumber,
                'value' => $this->value
            ]
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
        $json['AmountType']            = $this->amountType;
        if (isset($this->accountName)) {
            $json['AccountName']       = $this->accountName;
        }
        if (isset($this->bIC)) {
            $json['BIC']               = $this->bIC;
        }
        if (isset($this->currency)) {
            $json['Currency']          = $this->currency;
        }
        if (isset($this->iBAN)) {
            $json['IBAN']              = $this->iBAN;
        }
        if (isset($this->reference)) {
            $json['Reference']         = $this->reference;
        }
        if (isset($this->transactionNumber)) {
            $json['TransactionNumber'] = $this->transactionNumber;
        }
        $json['Value']                 = $this->value;

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
