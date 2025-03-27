<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Models\Builders;

use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Models\GetLocationsResultMultiple;
use PostnlEcommerceLib\Models\Location;

/**
 * Builder for model GetLocationsResultMultiple
 *
 * @see GetLocationsResultMultiple
 */
class GetLocationsResultMultipleBuilder
{
    /**
     * @var GetLocationsResultMultiple
     */
    private $instance;

    private function __construct(GetLocationsResultMultiple $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Get Locations Result Multiple Builder object.
     */
    public static function init(): self
    {
        return new self(new GetLocationsResultMultiple());
    }

    /**
     * Sets Response Location field.
     *
     * @param Location[]|null $value
     */
    public function responseLocation(?array $value): self
    {
        $this->instance->setResponseLocation($value);
        return $this;
    }

    /**
     * Initializes a new Get Locations Result Multiple object.
     */
    public function build(): GetLocationsResultMultiple
    {
        return CoreHelper::clone($this->instance);
    }
}
