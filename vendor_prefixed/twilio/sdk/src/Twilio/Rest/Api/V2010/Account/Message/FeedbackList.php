<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Message;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\ListResource;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
class FeedbackList extends \ShopMagicTwilioVendor\Twilio\ListResource
{
    /**
     * Construct the FeedbackList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) associated with the Message resource for which to create MessageFeedback.
     * @param string $messageSid The SID of the Message resource for which to create MessageFeedback.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, string $accountSid, string $messageSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'messageSid' => $messageSid];
        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Messages/' . \rawurlencode($messageSid) . '/Feedback.json';
    }
    /**
     * Create the FeedbackInstance
     *
     * @param array|Options $options Optional Arguments
     * @return FeedbackInstance Created FeedbackInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Message\FeedbackInstance
    {
        $options = new \ShopMagicTwilioVendor\Twilio\Values($options);
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['Outcome' => $options['outcome']]);
        $payload = $this->version->create('POST', $this->uri, [], $data);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Message\FeedbackInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['messageSid']);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.Api.V2010.FeedbackList]';
    }
}
