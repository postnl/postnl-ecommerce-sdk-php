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
use PostnlEcommerceLib\Models\LocationResponseSingle;

/**
 * Builder for model LocationResponseSingle
 *
 * @see LocationResponseSingle
 */
class LocationResponseSingleBuilder
{
    /**
     * @var LocationResponseSingle
     */
    private $instance;

    private function __construct(LocationResponseSingle $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Location Response Single Builder object.
     */
    public static function init(): self
    {
        return new self(new LocationResponseSingle());
    }

    /**
     * Sets Get Locations Result field.
     *
     * @param GetLocationsResultSingle|null $value
     */
    public function getLocationsResult(?GetLocationsResultSingle $value): self
    {
        $this->instance->setGetLocationsResult($value);
        return $this;
    }

    /**
     * Initializes a new Location Response Single object.
     */
    public function build(): LocationResponseSingle
    {
        return CoreHelper::clone($this->instance);
    }
}
