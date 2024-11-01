<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Voice
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Voice\V1;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\InstanceResource;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\Deserialize;
/**
 * @property string|null $accountSid
 * @property string|null $sid
 * @property string|null $friendlyName
 * @property string|null $voiceUrl
 * @property string|null $voiceMethod
 * @property string|null $voiceFallbackUrl
 * @property string|null $voiceFallbackMethod
 * @property string|null $statusCallbackUrl
 * @property string|null $statusCallbackMethod
 * @property bool|null $cnamLookupEnabled
 * @property string|null $connectionPolicySid
 * @property string|null $fromDomainSid
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateUpdated
 * @property string|null $url
 */
class ByocTrunkInstance extends \ShopMagicTwilioVendor\Twilio\InstanceResource
{
    /**
     * Initialize the ByocTrunkInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The Twilio-provided string that uniquely identifies the BYOC Trunk resource to delete.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, array $payload, string $sid = null)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['accountSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'account_sid'), 'sid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'sid'), 'friendlyName' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'friendly_name'), 'voiceUrl' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'voice_url'), 'voiceMethod' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'voice_method'), 'voiceFallbackUrl' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'voice_fallback_url'), 'voiceFallbackMethod' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'voice_fallback_method'), 'statusCallbackUrl' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'status_callback_url'), 'statusCallbackMethod' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'status_callback_method'), 'cnamLookupEnabled' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'cnam_lookup_enabled'), 'connectionPolicySid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'connection_policy_sid'), 'fromDomainSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'from_domain_sid'), 'dateCreated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_created')), 'dateUpdated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_updated')), 'url' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'url')];
        $this->solution = ['sid' => $sid ?: $this->properties['sid']];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return ByocTrunkContext Context for this ByocTrunkInstance
     */
    protected function proxy() : \ShopMagicTwilioVendor\Twilio\Rest\Voice\V1\ByocTrunkContext
    {
        if (!$this->context) {
            $this->context = new \ShopMagicTwilioVendor\Twilio\Rest\Voice\V1\ByocTrunkContext($this->version, $this->solution['sid']);
        }
        return $this->context;
    }
    /**
     * Delete the ByocTrunkInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->proxy()->delete();
    }
    /**
     * Fetch the ByocTrunkInstance
     *
     * @return ByocTrunkInstance Fetched ByocTrunkInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Voice\V1\ByocTrunkInstance
    {
        return $this->proxy()->fetch();
    }
    /**
     * Update the ByocTrunkInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ByocTrunkInstance Updated ByocTrunkInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Voice\V1\ByocTrunkInstance
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
        return '[Twilio.Voice.V1.ByocTrunkInstance ' . \implode(' ', $context) . ']';
    }
}
