<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Monitor
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Monitor\V1;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\InstanceResource;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\Deserialize;
/**
 * @property string|null $accountSid
 * @property string|null $alertText
 * @property string|null $apiVersion
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateGenerated
 * @property \DateTime|null $dateUpdated
 * @property string|null $errorCode
 * @property string|null $logLevel
 * @property string|null $moreInfo
 * @property string|null $requestMethod
 * @property string|null $requestUrl
 * @property string|null $requestVariables
 * @property string|null $resourceSid
 * @property string|null $responseBody
 * @property string|null $responseHeaders
 * @property string|null $sid
 * @property string|null $url
 * @property string|null $requestHeaders
 * @property string|null $serviceSid
 */
class AlertInstance extends \ShopMagicTwilioVendor\Twilio\InstanceResource
{
    /**
     * Initialize the AlertInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The SID of the Alert resource to fetch.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, array $payload, string $sid = null)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['accountSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'account_sid'), 'alertText' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'alert_text'), 'apiVersion' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'api_version'), 'dateCreated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_created')), 'dateGenerated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_generated')), 'dateUpdated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_updated')), 'errorCode' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'error_code'), 'logLevel' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'log_level'), 'moreInfo' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'more_info'), 'requestMethod' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'request_method'), 'requestUrl' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'request_url'), 'requestVariables' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'request_variables'), 'resourceSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'resource_sid'), 'responseBody' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'response_body'), 'responseHeaders' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'response_headers'), 'sid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'sid'), 'url' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'url'), 'requestHeaders' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'request_headers'), 'serviceSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'service_sid')];
        $this->solution = ['sid' => $sid ?: $this->properties['sid']];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return AlertContext Context for this AlertInstance
     */
    protected function proxy() : \ShopMagicTwilioVendor\Twilio\Rest\Monitor\V1\AlertContext
    {
        if (!$this->context) {
            $this->context = new \ShopMagicTwilioVendor\Twilio\Rest\Monitor\V1\AlertContext($this->version, $this->solution['sid']);
        }
        return $this->context;
    }
    /**
     * Fetch the AlertInstance
     *
     * @return AlertInstance Fetched AlertInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Monitor\V1\AlertInstance
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
        return '[Twilio.Monitor.V1.AlertInstance ' . \implode(' ', $context) . ']';
    }
}
