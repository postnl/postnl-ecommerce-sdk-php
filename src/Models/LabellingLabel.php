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

class LabellingLabel implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $content;

    /**
     * @var string|null
     */
    private $labeltype;

    /**
     * @var string|null
     */
    private $outputType;

    /**
     * Returns Content.
     * Base64 encoded label content
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Sets Content.
     * Base64 encoded label content
     *
     * @maps Content
     */
    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    /**
     * Returns Labeltype.
     * Type of the label. See possible [Label types](https://developer.postnl.nl/docs/#/http/reference-
     * data/reference-codes/label-types)
     */
    public function getLabeltype(): ?string
    {
        return $this->labeltype;
    }

    /**
     * Sets Labeltype.
     * Type of the label. See possible [Label types](https://developer.postnl.nl/docs/#/http/reference-
     * data/reference-codes/label-types)
     *
     * @maps Labeltype
     */
    public function setLabeltype(?string $labeltype): void
    {
        $this->labeltype = $labeltype;
    }

    /**
     * Returns Output Type.
     * Content type of the label, e.g. zebra of pdf.
     */
    public function getOutputType(): ?string
    {
        return $this->outputType;
    }

    /**
     * Sets Output Type.
     * Content type of the label, e.g. zebra of pdf.
     *
     * @maps OutputType
     */
    public function setOutputType(?string $outputType): void
    {
        $this->outputType = $outputType;
    }

    /**
     * Converts the LabellingLabel object to a human-readable string representation.
     *
     * @return string The string representation of the LabellingLabel object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'LabellingLabel',
            ['content' => $this->content, 'labeltype' => $this->labeltype, 'outputType' => $this->outputType]
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
        if (isset($this->content)) {
            $json['Content']    = $this->content;
        }
        if (isset($this->labeltype)) {
            $json['Labeltype']  = $this->labeltype;
        }
        if (isset($this->outputType)) {
            $json['OutputType'] = $this->outputType;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
