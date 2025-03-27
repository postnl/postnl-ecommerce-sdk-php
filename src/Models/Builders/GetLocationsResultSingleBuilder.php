<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\GetLocationsResultSingle;
use PostnlEcommerceLib\Models\Location;

/**
 * Builder for model GetLocationsResultSingle
 *
 * @see GetLocationsResultSingle
 */
class GetLocationsResultSingleBuilder
{
    /**
     * @var GetLocationsResultSingle
     */
    private $instance;

    private function __construct(GetLocationsResultSingle $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get Locations Result Single Builder object.
     */
    public static function init(): self
    {
        return new self(new GetLocationsResultSingle());
    }

    /**
     * Sets Response Location field.
     *
     * @param Location|null $value
     */
    public function responseLocation(?Location $value): self
    {
        $this->instance->setResponseLocation($value);
        return $this;
    }

    /**
     * Initializes a new Get Locations Result Single object.
     */
    public function build(): GetLocationsResultSingle
    {
        return CoreHelper::clone($this->instance);
    }
}
