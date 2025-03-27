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

class LabellingMergedLabel implements \JsonSerializable
{
    /**
     * @var string[]|null
     */
    private $barcodes;

    /**
     * @var LabellingLabel[]|null
     */
    private $labels;

    /**
     * Returns Barcodes.
     *
     * @return string[]|null
     */
    public function getBarcodes(): ?array
    {
        return $this->barcodes;
    }

    /**
     * Sets Barcodes.
     *
     * @maps Barcodes
     *
     * @param string[]|null $barcodes
     */
    public function setBarcodes(?array $barcodes): void
    {
        $this->barcodes = $barcodes;
    }

    /**
     * Returns Labels.
     *
     * @return LabellingLabel[]|null
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * Sets Labels.
     *
     * @maps Labels
     *
     * @param LabellingLabel[]|null $labels
     */
    public function setLabels(?array $labels): void
    {
        $this->labels = $labels;
    }

    /**
     * Converts the LabellingMergedLabel object to a human-readable string representation.
     *
     * @return string The string representation of the LabellingMergedLabel object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LabellingMergedLabel',
            ['barcodes' => $this->barcodes, 'labels' => $this->labels]
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
        if (isset($this->barcodes)) {
            $json['Barcodes'] = $this->barcodes;
        }
        if (isset($this->labels)) {
            $json['Labels']   = $this->labels;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
