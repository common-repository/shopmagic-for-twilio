<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\InstanceResource;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\Deserialize;
/**
 * @property string|null $accountSid
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateUpdated
 * @property string|null $sid
 * @property string|null $friendlyName
 * @property string|null $chatServiceSid
 * @property string $channelType
 * @property string|null $contactIdentity
 * @property bool|null $enabled
 * @property string $integrationType
 * @property array|null $integration
 * @property bool|null $longLived
 * @property bool|null $janitorEnabled
 * @property string|null $url
 */
class FlexFlowInstance extends \ShopMagicTwilioVendor\Twilio\InstanceResource
{
    /**
     * Initialize the FlexFlowInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid The SID of the Flex Flow resource to delete.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, array $payload, string $sid = null)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['accountSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'account_sid'), 'dateCreated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_created')), 'dateUpdated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_updated')), 'sid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'sid'), 'friendlyName' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'friendly_name'), 'chatServiceSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'chat_service_sid'), 'channelType' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'channel_type'), 'contactIdentity' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'contact_identity'), 'enabled' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'enabled'), 'integrationType' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'integration_type'), 'integration' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'integration'), 'longLived' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'long_lived'), 'janitorEnabled' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'janitor_enabled'), 'url' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'url')];
        $this->solution = ['sid' => $sid ?: $this->properties['sid']];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return FlexFlowContext Context for this FlexFlowInstance
     */
    protected function proxy() : \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\FlexFlowContext
    {
        if (!$this->context) {
            $this->context = new \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\FlexFlowContext($this->version, $this->solution['sid']);
        }
        return $this->context;
    }
    /**
     * Delete the FlexFlowInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->proxy()->delete();
    }
    /**
     * Fetch the FlexFlowInstance
     *
     * @return FlexFlowInstance Fetched FlexFlowInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\FlexFlowInstance
    {
        return $this->proxy()->fetch();
    }
    /**
     * Update the FlexFlowInstance
     *
     * @param array|Options $options Optional Arguments
     * @return FlexFlowInstance Updated FlexFlowInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\FlexFlowInstance
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
        return '[Twilio.FlexApi.V1.FlexFlowInstance ' . \implode(' ', $context) . ']';
    }
}
