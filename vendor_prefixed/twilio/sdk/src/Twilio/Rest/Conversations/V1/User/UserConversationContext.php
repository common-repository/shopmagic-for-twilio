<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Conversations
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Conversations\V1\User;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
use ShopMagicTwilioVendor\Twilio\Serialize;
class UserConversationContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    /**
     * Initialize the UserConversationContext
     *
     * @param Version $version Version that contains the resource
     * @param string $userSid The unique SID identifier of the [User resource](https://www.twilio.com/docs/conversations/api/user-resource). This value can be either the `sid` or the `identity` of the User resource.
     * @param string $conversationSid The unique SID identifier of the Conversation. This value can be either the `sid` or the `unique_name` of the [Conversation resource](https://www.twilio.com/docs/conversations/api/conversation-resource).
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $userSid, $conversationSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['userSid' => $userSid, 'conversationSid' => $conversationSid];
        $this->uri = '/Users/' . \rawurlencode($userSid) . '/Conversations/' . \rawurlencode($conversationSid) . '';
    }
    /**
     * Delete the UserConversationInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->version->delete('DELETE', $this->uri);
    }
    /**
     * Fetch the UserConversationInstance
     *
     * @return UserConversationInstance Fetched UserConversationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Conversations\V1\User\UserConversationInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Conversations\V1\User\UserConversationInstance($this->version, $payload, $this->solution['userSid'], $this->solution['conversationSid']);
    }
    /**
     * Update the UserConversationInstance
     *
     * @param array|Options $options Optional Arguments
     * @return UserConversationInstance Updated UserConversationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Conversations\V1\User\UserConversationInstance
    {
        $options = new \ShopMagicTwilioVendor\Twilio\Values($options);
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['NotificationLevel' => $options['notificationLevel'], 'LastReadTimestamp' => \ShopMagicTwilioVendor\Twilio\Serialize::iso8601DateTime($options['lastReadTimestamp']), 'LastReadMessageIndex' => $options['lastReadMessageIndex']]);
        $payload = $this->version->update('POST', $this->uri, [], $data);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Conversations\V1\User\UserConversationInstance($this->version, $payload, $this->solution['userSid'], $this->solution['conversationSid']);
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
        return '[Twilio.Conversations.V1.UserConversationContext ' . \implode(' ', $context) . ']';
    }
}
