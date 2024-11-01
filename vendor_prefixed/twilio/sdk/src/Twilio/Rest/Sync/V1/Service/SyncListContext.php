<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Sync
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Sync\V1\Service;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\ListResource;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
use ShopMagicTwilioVendor\Twilio\Rest\Sync\V1\Service\SyncList\SyncListPermissionList;
use ShopMagicTwilioVendor\Twilio\Rest\Sync\V1\Service\SyncList\SyncListItemList;
/**
 * @property SyncListPermissionList $syncListPermissions
 * @property SyncListItemList $syncListItems
 * @method \Twilio\Rest\Sync\V1\Service\SyncList\SyncListPermissionContext syncListPermissions(string $identity)
 * @method \Twilio\Rest\Sync\V1\Service\SyncList\SyncListItemContext syncListItems(string $index)
 */
class SyncListContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    protected $_syncListPermissions;
    protected $_syncListItems;
    /**
     * Initialize the SyncListContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the [Sync Service](https://www.twilio.com/docs/sync/api/service) to create the new Sync List in.
     * @param string $sid The SID of the Sync List resource to delete. Can be the Sync List resource's `sid` or its `unique_name`.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $serviceSid, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, 'sid' => $sid];
        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Lists/' . \rawurlencode($sid) . '';
    }
    /**
     * Delete the SyncListInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->version->delete('DELETE', $this->uri);
    }
    /**
     * Fetch the SyncListInstance
     *
     * @return SyncListInstance Fetched SyncListInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Sync\V1\Service\SyncListInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Sync\V1\Service\SyncListInstance($this->version, $payload, $this->solution['serviceSid'], $this->solution['sid']);
    }
    /**
     * Update the SyncListInstance
     *
     * @param array|Options $options Optional Arguments
     * @return SyncListInstance Updated SyncListInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Sync\V1\Service\SyncListInstance
    {
        $options = new \ShopMagicTwilioVendor\Twilio\Values($options);
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['Ttl' => $options['ttl'], 'CollectionTtl' => $options['collectionTtl']]);
        $payload = $this->version->update('POST', $this->uri, [], $data);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Sync\V1\Service\SyncListInstance($this->version, $payload, $this->solution['serviceSid'], $this->solution['sid']);
    }
    /**
     * Access the syncListPermissions
     */
    protected function getSyncListPermissions() : \ShopMagicTwilioVendor\Twilio\Rest\Sync\V1\Service\SyncList\SyncListPermissionList
    {
        if (!$this->_syncListPermissions) {
            $this->_syncListPermissions = new \ShopMagicTwilioVendor\Twilio\Rest\Sync\V1\Service\SyncList\SyncListPermissionList($this->version, $this->solution['serviceSid'], $this->solution['sid']);
        }
        return $this->_syncListPermissions;
    }
    /**
     * Access the syncListItems
     */
    protected function getSyncListItems() : \ShopMagicTwilioVendor\Twilio\Rest\Sync\V1\Service\SyncList\SyncListItemList
    {
        if (!$this->_syncListItems) {
            $this->_syncListItems = new \ShopMagicTwilioVendor\Twilio\Rest\Sync\V1\Service\SyncList\SyncListItemList($this->version, $this->solution['serviceSid'], $this->solution['sid']);
        }
        return $this->_syncListItems;
    }
    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name) : \ShopMagicTwilioVendor\Twilio\ListResource
    {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->{$method}();
        }
        throw new \ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException('Unknown subresource ' . $name);
    }
    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments) : \ShopMagicTwilioVendor\Twilio\InstanceContext
    {
        $property = $this->{$name};
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }
        throw new \ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException('Resource does not have a context');
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
        return '[Twilio.Sync.V1.SyncListContext ' . \implode(' ', $context) . ']';
    }
}
