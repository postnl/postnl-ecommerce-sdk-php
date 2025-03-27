<?php

declare(strict_types=1);

/*
 * PostnlEcommerceLib
 *
 * This file was automatically generated for PostNL by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PostnlEcommerceLib;

use Core\ClientBuilder;
use Core\Utils\CoreHelper;
use PostnlEcommerceLib\Authentication\CustomHeaderAuthenticationCredentialsBuilder;
use PostnlEcommerceLib\Authentication\CustomHeaderAuthenticationManager;
use PostnlEcommerceLib\Controllers\BarcodeController;
use PostnlEcommerceLib\Controllers\CheckoutController;
use PostnlEcommerceLib\Controllers\ConfirmingController;
use PostnlEcommerceLib\Controllers\DeliverydateController;
use PostnlEcommerceLib\Controllers\LabellingController;
use PostnlEcommerceLib\Controllers\LocationsController;
use PostnlEcommerceLib\Controllers\PostalcodeCheckController;
use PostnlEcommerceLib\Controllers\ShipmentController;
use PostnlEcommerceLib\Controllers\ShippingStatusController;
use PostnlEcommerceLib\Controllers\TimeframesController;
use PostnlEcommerceLib\Utils\CompatibilityConverter;
use Unirest\Configuration;
use Unirest\HttpClient;

class PostnlEcommerceClient implements ConfigurationInterface
{
    private $barcode;

    private $checkout;

    private $confirming;

    private $deliverydate;

    private $labelling;

    private $locations;

    private $postalcodeCheck;

    private $shipment;

    private $shippingStatus;

    private $timeframes;

    private $customHeaderAuthenticationManager;

    private $config;

    private $client;

    /**
     * @see PostnlEcommerceClientBuilder::init()
     * @see PostnlEcommerceClientBuilder::build()
     *
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = array_merge(ConfigurationDefaults::_ALL, CoreHelper::clone($config));
        $this->customHeaderAuthenticationManager = new CustomHeaderAuthenticationManager($this->config);
        $this->client = ClientBuilder::init(new HttpClient(Configuration::init($this)))
            ->converter(new CompatibilityConverter())
            ->jsonHelper(ApiHelper::getJsonHelper())
            ->apiCallback($this->config['httpCallback'] ?? null)
            ->userAgent('APIMATIC 3.0')
            ->serverUrls(self::ENVIRONMENT_MAP[$this->getEnvironment()], Server::POSTNL)
            ->authManagers(['APIKeyHeader' => $this->customHeaderAuthenticationManager])
            ->build();
    }

    /**
     * Create a builder with the current client's configurations.
     *
     * @return PostnlEcommerceClientBuilder PostnlEcommerceClientBuilder instance
     */
    public function toBuilder(): PostnlEcommerceClientBuilder
    {
        $builder = PostnlEcommerceClientBuilder::init()
            ->timeout($this->getTimeout())
            ->enableRetries($this->shouldEnableRetries())
            ->numberOfRetries($this->getNumberOfRetries())
            ->retryInterval($this->getRetryInterval())
            ->backOffFactor($this->getBackOffFactor())
            ->maximumRetryWaitTime($this->getMaximumRetryWaitTime())
            ->retryOnTimeout($this->shouldRetryOnTimeout())
            ->httpStatusCodesToRetry($this->getHttpStatusCodesToRetry())
            ->httpMethodsToRetry($this->getHttpMethodsToRetry())
            ->environment($this->getEnvironment())
            ->httpCallback($this->config['httpCallback'] ?? null);

        $customHeaderAuthentication = $this->getCustomHeaderAuthenticationCredentialsBuilder();
        if ($customHeaderAuthentication != null) {
            $builder->customHeaderAuthenticationCredentials($customHeaderAuthentication);
        }
        return $builder;
    }

    public function getTimeout(): int
    {
        return $this->config['timeout'] ?? ConfigurationDefaults::TIMEOUT;
    }

    public function shouldEnableRetries(): bool
    {
        return $this->config['enableRetries'] ?? ConfigurationDefaults::ENABLE_RETRIES;
    }

    public function getNumberOfRetries(): int
    {
        return $this->config['numberOfRetries'] ?? ConfigurationDefaults::NUMBER_OF_RETRIES;
    }

    public function getRetryInterval(): float
    {
        return $this->config['retryInterval'] ?? ConfigurationDefaults::RETRY_INTERVAL;
    }

    public function getBackOffFactor(): float
    {
        return $this->config['backOffFactor'] ?? ConfigurationDefaults::BACK_OFF_FACTOR;
    }

    public function getMaximumRetryWaitTime(): int
    {
        return $this->config['maximumRetryWaitTime'] ?? ConfigurationDefaults::MAXIMUM_RETRY_WAIT_TIME;
    }

    public function shouldRetryOnTimeout(): bool
    {
        return $this->config['retryOnTimeout'] ?? ConfigurationDefaults::RETRY_ON_TIMEOUT;
    }

    public function getHttpStatusCodesToRetry(): array
    {
        return $this->config['httpStatusCodesToRetry'] ?? ConfigurationDefaults::HTTP_STATUS_CODES_TO_RETRY;
    }

    public function getHttpMethodsToRetry(): array
    {
        return $this->config['httpMethodsToRetry'] ?? ConfigurationDefaults::HTTP_METHODS_TO_RETRY;
    }

    public function getEnvironment(): string
    {
        return $this->config['environment'] ?? ConfigurationDefaults::ENVIRONMENT;
    }

    public function getCustomHeaderAuthenticationCredentials(): CustomHeaderAuthenticationCredentials
    {
        return $this->customHeaderAuthenticationManager;
    }

    public function getCustomHeaderAuthenticationCredentialsBuilder(): ?CustomHeaderAuthenticationCredentialsBuilder
    {
        if (empty($this->customHeaderAuthenticationManager->getApikey())) {
            return null;
        }
        return CustomHeaderAuthenticationCredentialsBuilder::init(
            $this->customHeaderAuthenticationManager->getApikey()
        );
    }

    /**
     * Get the client configuration as an associative array
     *
     * @see PostnlEcommerceClientBuilder::getConfiguration()
     */
    public function getConfiguration(): array
    {
        return $this->toBuilder()->getConfiguration();
    }

    /**
     * Clone this client and override given configuration options
     *
     * @see PostnlEcommerceClientBuilder::build()
     */
    public function withConfiguration(array $config): self
    {
        return new self(array_merge($this->config, $config));
    }

    /**
     * Get the base uri for a given server in the current environment.
     *
     * @param string $server Server name
     *
     * @return string Base URI
     */
    public function getBaseUri(string $server = Server::POSTNL): string
    {
        return $this->client->getGlobalRequest($server)->getQueryUrl();
    }

    /**
     * Returns Barcode Controller
     */
    public function getBarcodeController(): BarcodeController
    {
        if ($this->barcode == null) {
            $this->barcode = new BarcodeController($this->client);
        }
        return $this->barcode;
    }

    /**
     * Returns Checkout Controller
     */
    public function getCheckoutController(): CheckoutController
    {
        if ($this->checkout == null) {
            $this->checkout = new CheckoutController($this->client);
        }
        return $this->checkout;
    }

    /**
     * Returns Confirming Controller
     */
    public function getConfirmingController(): ConfirmingController
    {
        if ($this->confirming == null) {
            $this->confirming = new ConfirmingController($this->client);
        }
        return $this->confirming;
    }

    /**
     * Returns Deliverydate Controller
     */
    public function getDeliverydateController(): DeliverydateController
    {
        if ($this->deliverydate == null) {
            $this->deliverydate = new DeliverydateController($this->client);
        }
        return $this->deliverydate;
    }

    /**
     * Returns Labelling Controller
     */
    public function getLabellingController(): LabellingController
    {
        if ($this->labelling == null) {
            $this->labelling = new LabellingController($this->client);
        }
        return $this->labelling;
    }

    /**
     * Returns Locations Controller
     */
    public function getLocationsController(): LocationsController
    {
        if ($this->locations == null) {
            $this->locations = new LocationsController($this->client);
        }
        return $this->locations;
    }

    /**
     * Returns Postalcode Check Controller
     */
    public function getPostalcodeCheckController(): PostalcodeCheckController
    {
        if ($this->postalcodeCheck == null) {
            $this->postalcodeCheck = new PostalcodeCheckController($this->client);
        }
        return $this->postalcodeCheck;
    }

    /**
     * Returns Shipment Controller
     */
    public function getShipmentController(): ShipmentController
    {
        if ($this->shipment == null) {
            $this->shipment = new ShipmentController($this->client);
        }
        return $this->shipment;
    }

    /**
     * Returns Shipping Status Controller
     */
    public function getShippingStatusController(): ShippingStatusController
    {
        if ($this->shippingStatus == null) {
            $this->shippingStatus = new ShippingStatusController($this->client);
        }
        return $this->shippingStatus;
    }

    /**
     * Returns Timeframes Controller
     */
    public function getTimeframesController(): TimeframesController
    {
        if ($this->timeframes == null) {
            $this->timeframes = new TimeframesController($this->client);
        }
        return $this->timeframes;
    }

    /**
     * A map of all base urls used in different environments and servers
     *
     * @var array
     */
    private const ENVIRONMENT_MAP = [
        Environment::PRODUCTION_SERVER => [Server::POSTNL => 'https://api.postnl.nl'],
        Environment::NON_PRODUCTION_SERVER => [Server::POSTNL => 'https://api-sandbox.postnl.nl']
    ];
}
