<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Numbers
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Numbers\V1;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\InstanceResource;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\Deserialize;
/**
 * @property string|null $portInRequestSid
 * @property string|null $url
 * @property string|null $accountSid
 * @property string[]|null $notificationEmails
 * @property \DateTime|null $targetPortInDate
 * @property string|null $targetPortInTimeRangeStart
 * @property string|null $targetPortInTimeRangeEnd
 * @property array|null $losingCarrierInformation
 * @property array[]|null $phoneNumbers
 * @property string[]|null $documents
 */
class PortingPortInFetchInstance extends \ShopMagicTwilioVendor\Twilio\InstanceResource
{
    /**
     * Initialize the PortingPortInFetchInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $portInRequestSid The SID of the Port In request. This is a unique identifier of the port in request.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, array $payload, string $portInRequestSid = null)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['portInRequestSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'port_in_request_sid'), 'url' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'url'), 'accountSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'account_sid'), 'notificationEmails' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'notification_emails'), 'targetPortInDate' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'target_port_in_date')), 'targetPortInTimeRangeStart' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'target_port_in_time_range_start'), 'targetPortInTimeRangeEnd' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'target_port_in_time_range_end'), 'losingCarrierInformation' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'losing_carrier_information'), 'phoneNumbers' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'phone_numbers'), 'documents' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'documents')];
        $this->solution = ['portInRequestSid' => $portInRequestSid ?: $this->properties['portInRequestSid']];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return PortingPortInFetchContext Context for this PortingPortInFetchInstance
     */
    protected function proxy() : \ShopMagicTwilioVendor\Twilio\Rest\Numbers\V1\PortingPortInFetchContext
    {
        if (!$this->context) {
            $this->context = new \ShopMagicTwilioVendor\Twilio\Rest\Numbers\V1\PortingPortInFetchContext($this->version, $this->solution['portInRequestSid']);
        }
        return $this->context;
    }
    /**
     * Fetch the PortingPortInFetchInstance
     *
     * @return PortingPortInFetchInstance Fetched PortingPortInFetchInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Numbers\V1\PortingPortInFetchInstance
    {
        return $this->proxy()->fetch();
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
        return '[Twilio.Numbers.V1.PortingPortInFetchInstance ' . \implode(' ', $context) . ']';
    }
}
