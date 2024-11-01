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
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\Deserialize;
/**
 * @property string|null $sid
 * @property string|null $accountSid
 * @property string|null $customerProfileSid
 * @property string|null $trustProductSid
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateUpdated
 * @property string|null $regulatedItemSid
 * @property string|null $businessName
 * @property string|null $businessStreetAddress
 * @property string|null $businessStreetAddress2
 * @property string|null $businessCity
 * @property string|null $businessStateProvinceRegion
 * @property string|null $businessPostalCode
 * @property string|null $businessCountry
 * @property string|null $businessWebsite
 * @property string|null $businessContactFirstName
 * @property string|null $businessContactLastName
 * @property string|null $businessContactEmail
 * @property string|null $businessContactPhone
 * @property string|null $notificationEmail
 * @property string[]|null $useCaseCategories
 * @property string|null $useCaseSummary
 * @property string|null $productionMessageSample
 * @property string[]|null $optInImageUrls
 * @property string $optInType
 * @property string|null $messageVolume
 * @property string|null $additionalInformation
 * @property string|null $tollfreePhoneNumberSid
 * @property string $status
 * @property string|null $url
 * @property string|null $rejectionReason
 * @property int|null $errorCode
 * @property \DateTime|null $editExpiration
 * @property bool|null $editAllowed
 * @property array[]|null $rejectionReasons
 * @property array|null $resourceLinks
 * @property string|null $externalReferenceId
 */
class TollfreeVerificationInstance extends \ShopMagicTwilioVendor\Twilio\InstanceResource
{
    /**
     * Initialize the TollfreeVerificationInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The unique string to identify Tollfree Verification.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, array $payload, string $sid = null)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['sid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'sid'), 'accountSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'account_sid'), 'customerProfileSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'customer_profile_sid'), 'trustProductSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'trust_product_sid'), 'dateCreated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_created')), 'dateUpdated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_updated')), 'regulatedItemSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'regulated_item_sid'), 'businessName' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'business_name'), 'businessStreetAddress' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'business_street_address'), 'businessStreetAddress2' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'business_street_address2'), 'businessCity' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'business_city'), 'businessStateProvinceRegion' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'business_state_province_region'), 'businessPostalCode' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'business_postal_code'), 'businessCountry' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'business_country'), 'businessWebsite' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'business_website'), 'businessContactFirstName' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'business_contact_first_name'), 'businessContactLastName' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'business_contact_last_name'), 'businessContactEmail' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'business_contact_email'), 'businessContactPhone' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'business_contact_phone'), 'notificationEmail' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'notification_email'), 'useCaseCategories' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'use_case_categories'), 'useCaseSummary' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'use_case_summary'), 'productionMessageSample' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'production_message_sample'), 'optInImageUrls' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'opt_in_image_urls'), 'optInType' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'opt_in_type'), 'messageVolume' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'message_volume'), 'additionalInformation' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'additional_information'), 'tollfreePhoneNumberSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'tollfree_phone_number_sid'), 'status' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'status'), 'url' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'url'), 'rejectionReason' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'rejection_reason'), 'errorCode' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'error_code'), 'editExpiration' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'edit_expiration')), 'editAllowed' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'edit_allowed'), 'rejectionReasons' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'rejection_reasons'), 'resourceLinks' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'resource_links'), 'externalReferenceId' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'external_reference_id')];
        $this->solution = ['sid' => $sid ?: $this->properties['sid']];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return TollfreeVerificationContext Context for this TollfreeVerificationInstance
     */
    protected function proxy() : \ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\TollfreeVerificationContext
    {
        if (!$this->context) {
            $this->context = new \ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\TollfreeVerificationContext($this->version, $this->solution['sid']);
        }
        return $this->context;
    }
    /**
     * Delete the TollfreeVerificationInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->proxy()->delete();
    }
    /**
     * Fetch the TollfreeVerificationInstance
     *
     * @return TollfreeVerificationInstance Fetched TollfreeVerificationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\TollfreeVerificationInstance
    {
        return $this->proxy()->fetch();
    }
    /**
     * Update the TollfreeVerificationInstance
     *
     * @param array|Options $options Optional Arguments
     * @return TollfreeVerificationInstance Updated TollfreeVerificationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\TollfreeVerificationInstance
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
        return '[Twilio.Messaging.V1.TollfreeVerificationInstance ' . \implode(' ', $context) . ']';
    }
}
