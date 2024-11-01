<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Routes
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Routes\V2;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
class TrunkContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    /**
     * Initialize the TrunkContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sipTrunkDomain The absolute URL of the SIP Trunk
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $sipTrunkDomain)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['sipTrunkDomain' => $sipTrunkDomain];
        $this->uri = '/Trunks/' . \rawurlencode($sipTrunkDomain) . '';
    }
    /**
     * Fetch the TrunkInstance
     *
     * @return TrunkInstance Fetched TrunkInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Routes\V2\TrunkInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Routes\V2\TrunkInstance($this->version, $payload, $this->solution['sipTrunkDomain']);
    }
    /**
     * Update the TrunkInstance
     *
     * @param array|Options $options Optional Arguments
     * @return TrunkInstance Updated TrunkInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Routes\V2\TrunkInstance
    {
        $options = new \ShopMagicTwilioVendor\Twilio\Values($options);
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['VoiceRegion' => $options['voiceRegion'], 'FriendlyName' => $options['friendlyName']]);
        $payload = $this->version->update('POST', $this->uri, [], $data);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Routes\V2\TrunkInstance($this->version, $payload, $this->solution['sipTrunkDomain']);
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
        return '[Twilio.Routes.V2.TrunkContext ' . \implode(' ', $context) . ']';
    }
}
