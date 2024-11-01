<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Ip_messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\InstanceResource;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\Deserialize;
use ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service\User\UserBindingList;
use ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service\User\UserChannelList;
/**
 * @property string|null $sid
 * @property string|null $accountSid
 * @property string|null $serviceSid
 * @property string|null $attributes
 * @property string|null $friendlyName
 * @property string|null $roleSid
 * @property string|null $identity
 * @property bool|null $isOnline
 * @property bool|null $isNotifiable
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateUpdated
 * @property int|null $joinedChannelsCount
 * @property array|null $links
 * @property string|null $url
 */
class UserInstance extends \ShopMagicTwilioVendor\Twilio\InstanceResource
{
    protected $_userBindings;
    protected $_userChannels;
    /**
     * Initialize the UserInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid 
     * @param string $sid 
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, array $payload, string $serviceSid, string $sid = null)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['sid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'sid'), 'accountSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'account_sid'), 'serviceSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'service_sid'), 'attributes' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'attributes'), 'friendlyName' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'friendly_name'), 'roleSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'role_sid'), 'identity' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'identity'), 'isOnline' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'is_online'), 'isNotifiable' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'is_notifiable'), 'dateCreated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_created')), 'dateUpdated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_updated')), 'joinedChannelsCount' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'joined_channels_count'), 'links' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'links'), 'url' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'url')];
        $this->solution = ['serviceSid' => $serviceSid, 'sid' => $sid ?: $this->properties['sid']];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return UserContext Context for this UserInstance
     */
    protected function proxy() : \ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service\UserContext
    {
        if (!$this->context) {
            $this->context = new \ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service\UserContext($this->version, $this->solution['serviceSid'], $this->solution['sid']);
        }
        return $this->context;
    }
    /**
     * Delete the UserInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->proxy()->delete();
    }
    /**
     * Fetch the UserInstance
     *
     * @return UserInstance Fetched UserInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service\UserInstance
    {
        return $this->proxy()->fetch();
    }
    /**
     * Update the UserInstance
     *
     * @param array|Options $options Optional Arguments
     * @return UserInstance Updated UserInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service\UserInstance
    {
        return $this->proxy()->update($options);
    }
    /**
     * Access the userBindings
     */
    protected function getUserBindings() : \ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service\User\UserBindingList
    {
        return $this->proxy()->userBindings;
    }
    /**
     * Access the userChannels
     */
    protected function getUserChannels() : \ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service\User\UserChannelList
    {
        return $this->proxy()->userChannels;
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
        return '[Twilio.IpMessaging.V2.UserInstance ' . \implode(' ', $context) . ']';
    }
}
