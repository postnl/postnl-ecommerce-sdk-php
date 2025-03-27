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

/**
 * Note: Length, Width, Height values are about the order of the size and need to be filled in from the
 * longest to the shortest value. For example: shipment's official height is 700mm, width 500mm, length
 * 300mm. The longest side (highest value) of 700mm needs to be entered at Length. Width value becomes
 * 500mm, Height value: 300mm (the lowest). Entering the dimensions in the wrong order may result in
 * incorrect shipping labels and longer delivery times. The maximum dimensions can be found in your
 * PostNL contract.
 */
class Dimension implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $height;

    /**
     * @var int|null
     */
    private $length;

    /**
     * @var int|null
     */
    private $volume;

    /**
     * @var int
     */
    private $weight;

    /**
     * @var int|null
     */
    private $width;

    /**
     * @param int $weight
     */
    public function __construct(int $weight)
    {
        $this->weight = $weight;
    }

    /**
     * Returns Height.
     * The shortest side of the shipment in millimeters (mm).
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * Sets Height.
     * The shortest side of the shipment in millimeters (mm).
     *
     * @maps Height
     */
    public function setHeight(?int $height): void
    {
        $this->height = $height;
    }

    /**
     * Returns Length.
     * The longest side of the shipment in millimeters (mm).
     */
    public function getLength(): ?int
    {
        return $this->length;
    }

    /**
     * Sets Length.
     * The longest side of the shipment in millimeters (mm).
     *
     * @maps Length
     */
    public function setLength(?int $length): void
    {
        $this->length = $length;
    }

    /**
     * Returns Volume.
     * Volume of the shipment in centimeters (cm3). Mandatory for E@H-products.
     */
    public function getVolume(): ?int
    {
        return $this->volume;
    }

    /**
     * Sets Volume.
     * Volume of the shipment in centimeters (cm3). Mandatory for E@H-products.
     *
     * @maps Volume
     */
    public function setVolume(?int $volume): void
    {
        $this->volume = $volume;
    }

    /**
     * Returns Weight.
     * Weight of the shipment in grams. Approximate weight suffices
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * Sets Weight.
     * Weight of the shipment in grams. Approximate weight suffices
     *
     * @required
     * @maps Weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * Returns Width.
     * The second longest side of the shipment in millimeters (mm).
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * Sets Width.
     * The second longest side of the shipment in millimeters (mm).
     *
     * @maps Width
     */
    public function setWidth(?int $width): void
    {
        $this->width = $width;
    }

    /**
     * Converts the Dimension object to a human-readable string representation.
     *
     * @return string The string representation of the Dimension object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Dimension',
            [
                'height' => $this->height,
                'length' => $this->length,
                'volume' => $this->volume,
                'weight' => $this->weight,
                'width' => $this->width
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
        if (isset($this->height)) {
            $json['Height'] = $this->height;
        }
        if (isset($this->length)) {
            $json['Length'] = $this->length;
        }
        if (isset($this->volume)) {
            $json['Volume'] = $this->volume;
        }
        $json['Weight']     = $this->weight;
        if (isset($this->width)) {
            $json['Width']  = $this->width;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
