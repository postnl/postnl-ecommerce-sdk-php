<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\LabellingMergedLabel;
use PostnlEcommerceLib\Models\LabellingResponse;
use PostnlEcommerceLib\Models\LabellingResponseShipment;

/**
 * Builder for model LabellingResponse
 *
 * @see LabellingResponse
 */
class LabellingResponseBuilder
{
    /**
     * @var LabellingResponse
     */
    private $instance;

    private function __construct(LabellingResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Labelling Response Builder object.
     */
    public static function init(): self
    {
        return new self(new LabellingResponse());
    }

    /**
     * Sets Merged Labels field.
     *
     * @param LabellingMergedLabel[]|null $value
     */
    public function mergedLabels(?array $value): self
    {
        $this->instance->setMergedLabels($value);
        return $this;
    }

    /**
     * Sets Response Shipments field.
     *
     * @param LabellingResponseShipment[]|null $value
     */
    public function responseShipments(?array $value): self
    {
        $this->instance->setResponseShipments($value);
        return $this;
    }

    /**
     * Initializes a new Labelling Response object.
     */
    public function build(): LabellingResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
