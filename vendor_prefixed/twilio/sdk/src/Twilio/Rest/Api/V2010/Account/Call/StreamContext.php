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
namespace ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Call;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\Stream;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
class StreamContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    /**
     * Initialize the StreamContext
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that created this Stream resource.
     * @param string $callSid The SID of the [Call](https://www.twilio.com/docs/voice/api/call-resource) the Stream resource is associated with.
     * @param string $sid The SID of the Stream resource, or the `name` used when creating the resource
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $accountSid, $callSid, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'callSid' => $callSid, 'sid' => $sid];
        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/Calls/' . \rawurlencode($callSid) . '/Streams/' . \rawurlencode($sid) . '.json';
    }
    /**
     * Update the StreamInstance
     *
     * @param string $status
     * @return StreamInstance Updated StreamInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $status) : \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Call\StreamInstance
    {
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['Status' => $status]);
        $payload = $this->version->update('POST', $this->uri, [], $data);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Call\StreamInstance($this->version, $payload, $this->solution['accountSid'], $this->solution['callSid'], $this->solution['sid']);
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
        return '[Twilio.Api.V2010.StreamContext ' . \implode(' ', $context) . ']';
    }
}
