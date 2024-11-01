<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V2;

use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
abstract class WebChannelsOptions
{
    /**
     * @param string $chatFriendlyName The Conversation's friendly name. See the [Conversation resource](https://www.twilio.com/docs/conversations/api/conversation-resource) for an example.
     * @param string $customerFriendlyName The Conversation participant's friendly name. See the [Conversation Participant Resource](https://www.twilio.com/docs/conversations/api/conversation-participant-resource) for an example.
     * @param string $preEngagementData The pre-engagement data.
     * @return CreateWebChannelsOptions Options builder
     */
    public static function create(string $chatFriendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $customerFriendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $preEngagementData = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V2\CreateWebChannelsOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V2\CreateWebChannelsOptions($chatFriendlyName, $customerFriendlyName, $preEngagementData);
    }
}
class CreateWebChannelsOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $chatFriendlyName The Conversation's friendly name. See the [Conversation resource](https://www.twilio.com/docs/conversations/api/conversation-resource) for an example.
     * @param string $customerFriendlyName The Conversation participant's friendly name. See the [Conversation Participant Resource](https://www.twilio.com/docs/conversations/api/conversation-participant-resource) for an example.
     * @param string $preEngagementData The pre-engagement data.
     */
    public function __construct(string $chatFriendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $customerFriendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $preEngagementData = \ShopMagicTwilioVendor\Twilio\Values::NONE)
    {
        $this->options['chatFriendlyName'] = $chatFriendlyName;
        $this->options['customerFriendlyName'] = $customerFriendlyName;
        $this->options['preEngagementData'] = $preEngagementData;
    }
    /**
     * The Conversation's friendly name. See the [Conversation resource](https://www.twilio.com/docs/conversations/api/conversation-resource) for an example.
     *
     * @param string $chatFriendlyName The Conversation's friendly name. See the [Conversation resource](https://www.twilio.com/docs/conversations/api/conversation-resource) for an example.
     * @return $this Fluent Builder
     */
    public function setChatFriendlyName(string $chatFriendlyName) : self
    {
        $this->options['chatFriendlyName'] = $chatFriendlyName;
        return $this;
    }
    /**
     * The Conversation participant's friendly name. See the [Conversation Participant Resource](https://www.twilio.com/docs/conversations/api/conversation-participant-resource) for an example.
     *
     * @param string $customerFriendlyName The Conversation participant's friendly name. See the [Conversation Participant Resource](https://www.twilio.com/docs/conversations/api/conversation-participant-resource) for an example.
     * @return $this Fluent Builder
     */
    public function setCustomerFriendlyName(string $customerFriendlyName) : self
    {
        $this->options['customerFriendlyName'] = $customerFriendlyName;
        return $this;
    }
    /**
     * The pre-engagement data.
     *
     * @param string $preEngagementData The pre-engagement data.
     * @return $this Fluent Builder
     */
    public function setPreEngagementData(string $preEngagementData) : self
    {
        $this->options['preEngagementData'] = $preEngagementData;
        return $this;
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        $options = \http_build_query(\ShopMagicTwilioVendor\Twilio\Values::of($this->options), '', ' ');
        return '[Twilio.FlexApi.V2.CreateWebChannelsOptions ' . $options . ']';
    }
}
