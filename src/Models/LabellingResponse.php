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

class LabellingResponse implements \JsonSerializable
{
    /**
     * @var LabellingMergedLabel[]|null
     */
    private $mergedLabels;

    /**
     * @var LabellingResponseShipment[]|null
     */
    private $responseShipments;

    /**
     * Returns Merged Labels.
     * The merged label output; only returned if the printer type selected in your request merges the pdf
     * labels into a single file (e.g. using GraphicFile|Merge).
     *
     * @return LabellingMergedLabel[]|null
     */
    public function getMergedLabels(): ?array
    {
        return $this->mergedLabels;
    }

    /**
     * Sets Merged Labels.
     * The merged label output; only returned if the printer type selected in your request merges the pdf
     * labels into a single file (e.g. using GraphicFile|Merge).
     *
     * @maps MergedLabels
     *
     * @param LabellingMergedLabel[]|null $mergedLabels
     */
    public function setMergedLabels(?array $mergedLabels): void
    {
        $this->mergedLabels = $mergedLabels;
    }

    /**
     * Returns Response Shipments.
     *
     * @return LabellingResponseShipment[]|null
     */
    public function getResponseShipments(): ?array
    {
        return $this->responseShipments;
    }

    /**
     * Sets Response Shipments.
     *
     * @maps ResponseShipments
     *
     * @param LabellingResponseShipment[]|null $responseShipments
     */
    public function setResponseShipments(?array $responseShipments): void
    {
        $this->responseShipments = $responseShipments;
    }

    /**
     * Converts the LabellingResponse object to a human-readable string representation.
     *
     * @return string The string representation of the LabellingResponse object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LabellingResponse',
            ['mergedLabels' => $this->mergedLabels, 'responseShipments' => $this->responseShipments]
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
        if (isset($this->mergedLabels)) {
            $json['MergedLabels']      = $this->mergedLabels;
        }
        if (isset($this->responseShipments)) {
            $json['ResponseShipments'] = $this->responseShipments;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
