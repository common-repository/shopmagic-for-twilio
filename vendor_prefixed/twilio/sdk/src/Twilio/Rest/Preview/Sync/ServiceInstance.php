<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Preview\Sync;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\InstanceResource;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\Deserialize;
use ShopMagicTwilioVendor\Twilio\Rest\Preview\Sync\Service\SyncListList;
use ShopMagicTwilioVendor\Twilio\Rest\Preview\Sync\Service\SyncMapList;
use ShopMagicTwilioVendor\Twilio\Rest\Preview\Sync\Service\DocumentList;
/**
 * @property string|null $sid
 * @property string|null $accountSid
 * @property string|null $friendlyName
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateUpdated
 * @property string|null $url
 * @property string|null $webhookUrl
 * @property bool|null $reachabilityWebhooksEnabled
 * @property bool|null $aclEnabled
 * @property array|null $links
 */
class ServiceInstance extends \ShopMagicTwilioVendor\Twilio\InstanceResource
{
    protected $_syncLists;
    protected $_syncMaps;
    protected $_documents;
    /**
     * Initialize the ServiceInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid 
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, array $payload, string $sid = null)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['sid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'sid'), 'accountSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'account_sid'), 'friendlyName' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'friendly_name'), 'dateCreated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_created')), 'dateUpdated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_updated')), 'url' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'url'), 'webhookUrl' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'webhook_url'), 'reachabilityWebhooksEnabled' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'reachability_webhooks_enabled'), 'aclEnabled' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'acl_enabled'), 'links' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'links')];
        $this->solution = ['sid' => $sid ?: $this->properties['sid']];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return ServiceContext Context for this ServiceInstance
     */
    protected function proxy() : \ShopMagicTwilioVendor\Twilio\Rest\Preview\Sync\ServiceContext
    {
        if (!$this->context) {
            $this->context = new \ShopMagicTwilioVendor\Twilio\Rest\Preview\Sync\ServiceContext($this->version, $this->solution['sid']);
        }
        return $this->context;
    }
    /**
     * Delete the ServiceInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->proxy()->delete();
    }
    /**
     * Fetch the ServiceInstance
     *
     * @return ServiceInstance Fetched ServiceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Preview\Sync\ServiceInstance
    {
        return $this->proxy()->fetch();
    }
    /**
     * Update the ServiceInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ServiceInstance Updated ServiceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Preview\Sync\ServiceInstance
    {
        return $this->proxy()->update($options);
    }
    /**
     * Access the syncLists
     */
    protected function getSyncLists() : \ShopMagicTwilioVendor\Twilio\Rest\Preview\Sync\Service\SyncListList
    {
        return $this->proxy()->syncLists;
    }
    /**
     * Access the syncMaps
     */
    protected function getSyncMaps() : \ShopMagicTwilioVendor\Twilio\Rest\Preview\Sync\Service\SyncMapList
    {
        return $this->proxy()->syncMaps;
    }
    /**
     * Access the documents
     */
    protected function getDocuments() : \ShopMagicTwilioVendor\Twilio\Rest\Preview\Sync\Service\DocumentList
    {
        return $this->proxy()->documents;
    }
    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->{$method}();
        }
        throw new \ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException('Unknown property: ' . $name);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "{$key}={$value}";
        }
        return '[Twilio.Preview.Sync.ServiceInstance ' . \implode(' ', $context) . ']';
    }
}
