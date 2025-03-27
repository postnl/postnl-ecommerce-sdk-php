<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib;

/**
 * Interface for defining the behavior of Authentication.
 */
interface CustomHeaderAuthenticationCredentials
{
    /**
     * String value for apikey.
     */
    public function getApikey(): string;

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $apikey
     */
    public function equals(string $apikey): bool;
}
