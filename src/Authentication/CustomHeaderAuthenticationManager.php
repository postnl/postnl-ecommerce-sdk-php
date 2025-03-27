<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Authentication;

use Core\Authentication\CoreAuth;
use PostnlEcommerceLib\ConfigurationDefaults;
use Core\Request\Parameters\HeaderParam;
use PostnlEcommerceLib\CustomHeaderAuthenticationCredentials;

/**
 * Utility class for authorization and token management.
 */
class CustomHeaderAuthenticationManager extends CoreAuth implements CustomHeaderAuthenticationCredentials
{
    /**
     * @var array
     */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
        parent::__construct(HeaderParam::init('apikey', $this->getApikey())->requiredNonEmpty());
    }

    /**
     * String value for apikey.
     */
    public function getApikey(): string
    {
        return $this->config['apikey'] ?? ConfigurationDefaults::APIKEY;
    }

    /**
     * Checks if provided credentials match with existing ones.
     *
     * @param string $apikey
     */
    public function equals(string $apikey): bool
    {
        return $apikey == $this->getApikey();
    }
}
