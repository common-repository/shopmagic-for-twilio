<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\InstanceResource;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\Deserialize;
use ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\BrandRegistration\BrandRegistrationOtpList;
use ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\BrandRegistration\BrandVettingList;
/**
 * @property string|null $sid
 * @property string|null $accountSid
 * @property string|null $customerProfileBundleSid
 * @property string|null $a2PProfileBundleSid
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateUpdated
 * @property string|null $brandType
 * @property string $status
 * @property string|null $tcrId
 * @property string|null $failureReason
 * @property array[]|null $errors
 * @property string|null $url
 * @property int|null $brandScore
 * @property string[]|null $brandFeedback
 * @property string $identityStatus
 * @property bool|null $russell3000
 * @property bool|null $governmentEntity
 * @property string|null $taxExemptStatus
 * @property bool|null $skipAutomaticSecVet
 * @property bool|null $mock
 * @property array|null $links
 */
class BrandRegistrationInstance extends \ShopMagicTwilioVendor\Twilio\InstanceResource
{
    protected $_brandRegistrationOtps;
    protected $_brandVettings;
    /**
     * Initialize the BrandRegistrationInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The SID of the Brand Registration resource to fetch.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, array $payload, string $sid = null)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['sid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'sid'), 'accountSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'account_sid'), 'customerProfileBundleSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'customer_profile_bundle_sid'), 'a2PProfileBundleSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'a2p_profile_bundle_sid'), 'dateCreated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_created')), 'dateUpdated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_updated')), 'brandType' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'brand_type'), 'status' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'status'), 'tcrId' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'tcr_id'), 'failureReason' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'failure_reason'), 'errors' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'errors'), 'url' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'url'), 'brandScore' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'brand_score'), 'brandFeedback' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'brand_feedback'), 'identityStatus' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'identity_status'), 'russell3000' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'russell_3000'), 'governmentEntity' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'government_entity'), 'taxExemptStatus' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'tax_exempt_status'), 'skipAutomaticSecVet' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'skip_automatic_sec_vet'), 'mock' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'mock'), 'links' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'links')];
        $this->solution = ['sid' => $sid ?: $this->properties['sid']];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return BrandRegistrationContext Context for this BrandRegistrationInstance
     */
    protected function proxy() : \ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\BrandRegistrationContext
    {
        if (!$this->context) {
            $this->context = new \ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\BrandRegistrationContext($this->version, $this->solution['sid']);
        }
        return $this->context;
    }
    /**
     * Fetch the BrandRegistrationInstance
     *
     * @return BrandRegistrationInstance Fetched BrandRegistrationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\BrandRegistrationInstance
    {
        return $this->proxy()->fetch();
    }
    /**
     * Update the BrandRegistrationInstance
     *
     * @return BrandRegistrationInstance Updated BrandRegistrationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update() : \ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\BrandRegistrationInstance
    {
        return $this->proxy()->update();
    }
    /**
     * Access the brandRegistrationOtps
     */
    protected function getBrandRegistrationOtps() : \ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\BrandRegistration\BrandRegistrationOtpList
    {
        return $this->proxy()->brandRegistrationOtps;
    }
    /**
     * Access the brandVettings
     */
    protected function getBrandVettings() : \ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\BrandRegistration\BrandVettingList
    {
        return $this->proxy()->brandVettings;
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
        return '[Twilio.Messaging.V1.BrandRegistrationInstance ' . \implode(' ', $context) . ']';
    }
}
