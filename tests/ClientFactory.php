<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib\Tests;

use Core\Types\CallbackCatcher;
use PostnlEcommerceLib\Authentication\CustomHeaderAuthenticationCredentialsBuilder;
use PostnlEcommerceLib\PostnlEcommerceClient;
use PostnlEcommerceLib\PostnlEcommerceClientBuilder;

class ClientFactory
{
    public static function create(CallbackCatcher $httpCallback): PostnlEcommerceClient
    {
        $clientBuilder = PostnlEcommerceClientBuilder::init();
        $clientBuilder = self::addConfigurationFromEnvironment($clientBuilder);
        $clientBuilder = self::addTestConfiguration($clientBuilder);
        return $clientBuilder->httpCallback($httpCallback)->build();
    }

    public static function addTestConfiguration(PostnlEcommerceClientBuilder $builder): PostnlEcommerceClientBuilder
    {
        return $builder;
    }

    public static function addConfigurationFromEnvironment(
        PostnlEcommerceClientBuilder $builder
    ): PostnlEcommerceClientBuilder {
        $timeout = getenv('POSTNL_ECOMMERCE_LIB_TIMEOUT');
        $numberOfRetries = getenv('POSTNL_ECOMMERCE_LIB_NUMBER_OF_RETRIES');
        $maximumRetryWaitTime = getenv('POSTNL_ECOMMERCE_LIB_MAXIMUM_RETRY_WAIT_TIME');
        $environment = getenv('POSTNL_ECOMMERCE_LIB_ENVIRONMENT');
        $apikey = getenv('POSTNL_ECOMMERCE_LIB_APIKEY');

        if (!empty($timeout) && \is_numeric($timeout)) {
            $builder->timeout(intval($timeout));
        }

        if (!empty($numberOfRetries) && \is_numeric($numberOfRetries)) {
            $builder->numberOfRetries(intval($numberOfRetries));
        }

        if (!empty($maximumRetryWaitTime) && \is_numeric($maximumRetryWaitTime)) {
            $builder->maximumRetryWaitTime(intval($maximumRetryWaitTime));
        }

        if (!empty($environment)) {
            $builder->environment($environment);
        }

        if (!empty($apikey)) {
            $builder->customHeaderAuthenticationCredentials(
                CustomHeaderAuthenticationCredentialsBuilder::init($apikey)
            );
        }

        return $builder;
    }
}
