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

/**
 * Builder for model LabellingLabel
 *
 * @see LabellingLabel
 */
class LabellingLabelBuilder
{
    /**
     * @var LabellingLabel
     */
    private $instance;

    private function __construct(LabellingLabel $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Labelling Label Builder object.
     */
    public static function init(): self
    {
        return new self(new LabellingLabel());
    }

    /**
     * Sets Content field.
     *
     * @param string|null $value
     */
    public function content(?string $value): self
    {
        $this->instance->setContent($value);
        return $this;
    }

    /**
     * Sets Labeltype field.
     *
     * @param string|null $value
     */
    public function labeltype(?string $value): self
    {
        $this->instance->setLabeltype($value);
        return $this;
    }

    /**
     * Sets Output Type field.
     *
     * @param string|null $value
     */
    public function outputType(?string $value): self
    {
        $this->instance->setOutputType($value);
        return $this;
    }

    /**
     * Initializes a new Labelling Label object.
     */
    public function build(): LabellingLabel
    {
        return CoreHelper::clone($this->instance);
    }
}
