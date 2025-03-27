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

class TimeframeTimeframe implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $from;

    /**
     * @var Options|null
     */
    private $options;

    /**
     * @var string|null
     */
    private $to;

    /**
     * @var Sustainability|null
     */
    private $sustainability;

    /**
     * Returns From.
     * The start time of the expected delivery window
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * Sets From.
     * The start time of the expected delivery window
     *
     * @maps From
     */
    public function setFrom(?string $from): void
    {
        $this->from = $from;
    }

    /**
     * Returns Options.
     * The delivery option for which the timeframe is calculated. See [Delivery Options](https://developer.
     * postnl.nl/docs/#/http/reference-data/reference-codes/delivery-options) for possible values.
     */
    public function getOptions(): ?Options
    {
        return $this->options;
    }

    /**
     * Sets Options.
     * The delivery option for which the timeframe is calculated. See [Delivery Options](https://developer.
     * postnl.nl/docs/#/http/reference-data/reference-codes/delivery-options) for possible values.
     *
     * @maps Options
     */
    public function setOptions(?Options $options): void
    {
        $this->options = $options;
    }

    /**
     * Returns To.
     * The end time of the expected delivery window
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * Sets To.
     * The end time of the expected delivery window
     *
     * @maps To
     */
    public function setTo(?string $to): void
    {
        $this->to = $to;
    }

    /**
     * Returns Sustainability.
     * Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-
     * data/reference-codes/sustainability-codes) for possible values.
     */
    public function getSustainability(): ?Sustainability
    {
        return $this->sustainability;
    }

    /**
     * Sets Sustainability.
     * Sustainability score; see [Sustainability codes](https://developer.postnl.nl/docs/#/http/reference-
     * data/reference-codes/sustainability-codes) for possible values.
     *
     * @maps Sustainability
     */
    public function setSustainability(?Sustainability $sustainability): void
    {
        $this->sustainability = $sustainability;
    }

    /**
     * Converts the TimeframeTimeframe object to a human-readable string representation.
     *
     * @return string The string representation of the TimeframeTimeframe object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'TimeframeTimeframe',
            [
                'from' => $this->from,
                'options' => $this->options,
                'to' => $this->to,
                'sustainability' => $this->sustainability
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
        if (isset($this->from)) {
            $json['From']           = $this->from;
        }
        if (isset($this->options)) {
            $json['Options']        = $this->options;
        }
        if (isset($this->to)) {
            $json['To']             = $this->to;
        }
        if (isset($this->sustainability)) {
            $json['Sustainability'] = $this->sustainability;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
