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

class ShippingstatusDimension implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $weight;

    /**
     * @var string|null
     */
    private $height;

    /**
     * @var string|null
     */
    private $length;

    /**
     * @var string|null
     */
    private $width;

    /**
     * @var string|null
     */
    private $volume;

    /**
     * Returns Weight.
     * The weight of the shipment
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }

    /**
     * Sets Weight.
     * The weight of the shipment
     *
     * @maps Weight
     */
    public function setWeight(?string $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * Returns Height.
     * The height of the shipment
     */
    public function getHeight(): ?string
    {
        return $this->height;
    }

    /**
     * Sets Height.
     * The height of the shipment
     *
     * @maps Height
     */
    public function setHeight(?string $height): void
    {
        $this->height = $height;
    }

    /**
     * Returns Length.
     * The length of the shipment
     */
    public function getLength(): ?string
    {
        return $this->length;
    }

    /**
     * Sets Length.
     * The length of the shipment
     *
     * @maps Length
     */
    public function setLength(?string $length): void
    {
        $this->length = $length;
    }

    /**
     * Returns Width.
     * The width of the shipment
     */
    public function getWidth(): ?string
    {
        return $this->width;
    }

    /**
     * Sets Width.
     * The width of the shipment
     *
     * @maps Width
     */
    public function setWidth(?string $width): void
    {
        $this->width = $width;
    }

    /**
     * Returns Volume.
     * The volume of the shipment
     */
    public function getVolume(): ?string
    {
        return $this->volume;
    }

    /**
     * Sets Volume.
     * The volume of the shipment
     *
     * @maps Volume
     */
    public function setVolume(?string $volume): void
    {
        $this->volume = $volume;
    }

    /**
     * Converts the ShippingstatusDimension object to a human-readable string representation.
     *
     * @return string The string representation of the ShippingstatusDimension object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ShippingstatusDimension',
            [
                'weight' => $this->weight,
                'height' => $this->height,
                'length' => $this->length,
                'width' => $this->width,
                'volume' => $this->volume
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
        if (isset($this->weight)) {
            $json['Weight'] = $this->weight;
        }
        if (isset($this->height)) {
            $json['Height'] = $this->height;
        }
        if (isset($this->length)) {
            $json['Length'] = $this->length;
        }
        if (isset($this->width)) {
            $json['Width']  = $this->width;
        }
        if (isset($this->volume)) {
            $json['Volume'] = $this->volume;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
