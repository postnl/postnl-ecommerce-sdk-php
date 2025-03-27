<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib;

use CoreInterfaces\Http\HttpConfigurations;
use PostnlEcommerceLib\Authentication\CustomHeaderAuthenticationCredentialsBuilder;

/**
 * An interface for all configuration parameters required by the SDK.
 */
interface ConfigurationInterface extends HttpConfigurations
{
    /**
     * Get current API environment
     */
    public function getEnvironment(): string;

    /**
     * Get the credentials to use with CustomHeaderAuthentication
     */
    public function getCustomHeaderAuthenticationCredentials(): CustomHeaderAuthenticationCredentials;

    /**
     * Get the credentials builder instance to update credentials for CustomHeaderAuthentication
     */
    public function getCustomHeaderAuthenticationCredentialsBuilder(): ?CustomHeaderAuthenticationCredentialsBuilder;

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::POSTNL): string;
}
