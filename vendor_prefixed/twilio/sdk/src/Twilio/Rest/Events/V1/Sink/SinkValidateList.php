<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Events
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Events\V1\Sink;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\ListResource;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
class SinkValidateList extends \ShopMagicTwilioVendor\Twilio\ListResource
{
    /**
     * Construct the SinkValidateList
     *
     * @param Version $version Version that contains the resource
     * @param string $sid A 34 character string that uniquely identifies the Sink being validated.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, string $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['sid' => $sid];
        $this->uri = '/Sinks/' . \rawurlencode($sid) . '/Validate';
    }
    /**
     * Create the SinkValidateInstance
     *
     * @param string $testId A 34 character string that uniquely identifies the test event for a Sink being validated.
     * @return SinkValidateInstance Created SinkValidateInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $testId) : \ShopMagicTwilioVendor\Twilio\Rest\Events\V1\Sink\SinkValidateInstance
    {
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['TestId' => $testId]);
        $payload = $this->version->create('POST', $this->uri, [], $data);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Events\V1\Sink\SinkValidateInstance($this->version, $payload, $this->solution['sid']);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.Events.V1.SinkValidateList]';
    }
}
