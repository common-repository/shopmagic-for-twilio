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
namespace ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service\User;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\InstanceResource;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
/**
 * @property string|null $accountSid
 * @property string|null $serviceSid
 * @property string|null $channelSid
 * @property string|null $userSid
 * @property string|null $memberSid
 * @property string $status
 * @property int|null $lastConsumedMessageIndex
 * @property int|null $unreadMessagesCount
 * @property array|null $links
 * @property string|null $url
 * @property string $notificationLevel
 */
class UserChannelInstance extends \ShopMagicTwilioVendor\Twilio\InstanceResource
{
    /**
     * Initialize the UserChannelInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $serviceSid 
     * @param string $userSid 
     * @param string $channelSid 
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, array $payload, string $serviceSid, string $userSid, string $channelSid = null)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['accountSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'account_sid'), 'serviceSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'service_sid'), 'channelSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'channel_sid'), 'userSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'user_sid'), 'memberSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'member_sid'), 'status' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'status'), 'lastConsumedMessageIndex' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'last_consumed_message_index'), 'unreadMessagesCount' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'unread_messages_count'), 'links' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'links'), 'url' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'url'), 'notificationLevel' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'notification_level')];
        $this->solution = ['serviceSid' => $serviceSid, 'userSid' => $userSid, 'channelSid' => $channelSid ?: $this->properties['channelSid']];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return UserChannelContext Context for this UserChannelInstance
     */
    protected function proxy() : \ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service\User\UserChannelContext
    {
        if (!$this->context) {
            $this->context = new \ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service\User\UserChannelContext($this->version, $this->solution['serviceSid'], $this->solution['userSid'], $this->solution['channelSid']);
        }
        return $this->context;
    }
    /**
     * Delete the UserChannelInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->proxy()->delete();
    }
    /**
     * Fetch the UserChannelInstance
     *
     * @return UserChannelInstance Fetched UserChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service\User\UserChannelInstance
    {
        return $this->proxy()->fetch();
    }
    /**
     * Update the UserChannelInstance
     *
     * @param array|Options $options Optional Arguments
     * @return UserChannelInstance Updated UserChannelInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\IpMessaging\V2\Service\User\UserChannelInstance
    {
        return $this->proxy()->update($options);
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
        return '[Twilio.IpMessaging.V2.UserChannelInstance ' . \implode(' ', $context) . ']';
    }
}
