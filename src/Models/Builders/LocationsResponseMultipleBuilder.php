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
use PostnlEcommerceLib\Models\LocationsResponseMultiple;

/**
 * Builder for model LocationsResponseMultiple
 *
 * @see LocationsResponseMultiple
 */
class LocationsResponseMultipleBuilder
{
    /**
     * @var LocationsResponseMultiple
     */
    private $instance;

    private function __construct(LocationsResponseMultiple $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Locations Response Multiple Builder object.
     */
    public static function init(): self
    {
        return new self(new LocationsResponseMultiple());
    }

    /**
     * Sets Get Locations Result field.
     *
     * @param GetLocationsResultMultiple|null $value
     */
    public function getLocationsResult(?GetLocationsResultMultiple $value): self
    {
        $this->instance->setGetLocationsResult($value);
        return $this;
    }

    /**
     * Initializes a new Locations Response Multiple object.
     */
    public function build(): LocationsResponseMultiple
    {
        return CoreHelper::clone($this->instance);
    }
}
