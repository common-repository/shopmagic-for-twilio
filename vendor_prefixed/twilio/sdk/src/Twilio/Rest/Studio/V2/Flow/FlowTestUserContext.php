<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Studio
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Studio\V2\Flow;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
use ShopMagicTwilioVendor\Twilio\Serialize;
class FlowTestUserContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    /**
     * Initialize the FlowTestUserContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid Unique identifier of the flow.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['sid' => $sid];
        $this->uri = '/Flows/' . \rawurlencode($sid) . '/TestUsers';
    }
    /**
     * Fetch the FlowTestUserInstance
     *
     * @return FlowTestUserInstance Fetched FlowTestUserInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Studio\V2\Flow\FlowTestUserInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Studio\V2\Flow\FlowTestUserInstance($this->version, $payload, $this->solution['sid']);
    }
    /**
     * Update the FlowTestUserInstance
     *
     * @param string[] $testUsers List of test user identities that can test draft versions of the flow.
     * @return FlowTestUserInstance Updated FlowTestUserInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $testUsers) : \ShopMagicTwilioVendor\Twilio\Rest\Studio\V2\Flow\FlowTestUserInstance
    {
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['TestUsers' => \ShopMagicTwilioVendor\Twilio\Serialize::map($testUsers, function ($e) {
            return $e;
        })]);
        $payload = $this->version->update('POST', $this->uri, [], $data);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Studio\V2\Flow\FlowTestUserInstance($this->version, $payload, $this->solution['sid']);
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
        return '[Twilio.Studio.V2.FlowTestUserContext ' . \implode(' ', $context) . ']';
    }
}
