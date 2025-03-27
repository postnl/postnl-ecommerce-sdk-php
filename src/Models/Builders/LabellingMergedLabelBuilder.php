<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\LabellingLabel;
use PostnlEcommerceLib\Models\LabellingMergedLabel;

/**
 * Builder for model LabellingMergedLabel
 *
 * @see LabellingMergedLabel
 */
class LabellingMergedLabelBuilder
{
    /**
     * @var LabellingMergedLabel
     */
    private $instance;

    private function __construct(LabellingMergedLabel $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Labelling Merged Label Builder object.
     */
    public static function init(): self
    {
        return new self(new LabellingMergedLabel());
    }

    /**
     * Sets Barcodes field.
     *
     * @param string[]|null $value
     */
    public function barcodes(?array $value): self
    {
        $this->instance->setBarcodes($value);
        return $this;
    }

    /**
     * Sets Labels field.
     *
     * @param LabellingLabel[]|null $value
     */
    public function labels(?array $value): self
    {
        $this->instance->setLabels($value);
        return $this;
    }

    /**
     * Initializes a new Labelling Merged Label object.
     */
    public function build(): LabellingMergedLabel
    {
        return CoreHelper::clone($this->instance);
    }
}
