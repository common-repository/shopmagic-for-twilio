<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Verify
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Verify\V2\Service\Entity;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
class FactorContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    /**
     * Initialize the FactorContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The unique SID identifier of the Service.
     * @param string $identity Customer unique identity for the Entity owner of the Factor. This identifier should be immutable, not PII, length between 8 and 64 characters, and generated by your external system, such as your user's UUID, GUID, or SID. It can only contain dash (-) separated alphanumeric characters.
     * @param string $sid A 34 character string that uniquely identifies this Factor.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $serviceSid, $identity, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, 'identity' => $identity, 'sid' => $sid];
        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Entities/' . \rawurlencode($identity) . '/Factors/' . \rawurlencode($sid) . '';
    }
    /**
     * Delete the FactorInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->version->delete('DELETE', $this->uri);
    }
    /**
     * Fetch the FactorInstance
     *
     * @return FactorInstance Fetched FactorInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Verify\V2\Service\Entity\FactorInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Verify\V2\Service\Entity\FactorInstance($this->version, $payload, $this->solution['serviceSid'], $this->solution['identity'], $this->solution['sid']);
    }
    /**
     * Update the FactorInstance
     *
     * @param array|Options $options Optional Arguments
     * @return FactorInstance Updated FactorInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Verify\V2\Service\Entity\FactorInstance
    {
        $options = new \ShopMagicTwilioVendor\Twilio\Values($options);
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['AuthPayload' => $options['authPayload'], 'FriendlyName' => $options['friendlyName'], 'Config.NotificationToken' => $options['configNotificationToken'], 'Config.SdkVersion' => $options['configSdkVersion'], 'Config.TimeStep' => $options['configTimeStep'], 'Config.Skew' => $options['configSkew'], 'Config.CodeLength' => $options['configCodeLength'], 'Config.Alg' => $options['configAlg'], 'Config.NotificationPlatform' => $options['configNotificationPlatform']]);
        $payload = $this->version->update('POST', $this->uri, [], $data);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Verify\V2\Service\Entity\FactorInstance($this->version, $payload, $this->solution['serviceSid'], $this->solution['identity'], $this->solution['sid']);
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
        return '[Twilio.Verify.V2.FactorContext ' . \implode(' ', $context) . ']';
    }
}
