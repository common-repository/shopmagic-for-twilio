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
 * @property string|null $sid
 * @property string|null $pluginSid
 * @property string|null $accountSid
 * @property string|null $version
 * @property string|null $pluginUrl
 * @property string|null $changelog
 * @property bool|null $private
 * @property bool|null $archived
 * @property \DateTime|null $dateCreated
 * @property string|null $url
 */
class PluginVersionArchiveInstance extends \ShopMagicTwilioVendor\Twilio\InstanceResource
{
    /**
     * Initialize the PluginVersionArchiveInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $pluginSid The SID of the Flex Plugin the resource to belongs to.
     * @param string $sid The SID of the Flex Plugin Version resource to archive.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, array $payload, string $pluginSid = null, string $sid = null)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['sid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'sid'), 'pluginSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'plugin_sid'), 'accountSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'account_sid'), 'version' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'version'), 'pluginUrl' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'plugin_url'), 'changelog' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'changelog'), 'private' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'private'), 'archived' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'archived'), 'dateCreated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'date_created')), 'url' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'url')];
        $this->solution = ['pluginSid' => $pluginSid ?: $this->properties['pluginSid'], 'sid' => $sid ?: $this->properties['sid']];
    }
    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return PluginVersionArchiveContext Context for this PluginVersionArchiveInstance
     */
    protected function proxy() : \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\PluginVersionArchiveContext
    {
        if (!$this->context) {
            $this->context = new \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\PluginVersionArchiveContext($this->version, $this->solution['pluginSid'], $this->solution['sid']);
        }
        return $this->context;
    }
    /**
     * Update the PluginVersionArchiveInstance
     *
     * @param array|Options $options Optional Arguments
     * @return PluginVersionArchiveInstance Updated PluginVersionArchiveInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\PluginVersionArchiveInstance
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
        return '[Twilio.FlexApi.V1.PluginVersionArchiveInstance ' . \implode(' ', $context) . ']';
    }
}
