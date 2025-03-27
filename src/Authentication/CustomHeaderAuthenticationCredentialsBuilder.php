<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Authentication;

use Core\Utils\CoreHelper;

/**
 * Utility class for initializing CustomHeaderAuthentication security credentials.
 */
class CustomHeaderAuthenticationCredentialsBuilder
{
    /**
     * @var array
     */
    private $config;

    private function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Initializer for CustomHeaderAuthenticationCredentialsBuilder
     *
     * @param string $apikey
     */
    public static function init(string $apikey): self
    {
        return new self(['apikey' => $apikey]);
    }

    /**
     * Setter for Apikey.
     *
     * @param string $apikey
     *
     * @return $this
     */
    public function apikey(string $apikey): self
    {
        $this->config['apikey'] = $apikey;
        return $this;
    }

    public function getConfiguration(): array
    {
        return CoreHelper::clone($this->config);
    }
}
