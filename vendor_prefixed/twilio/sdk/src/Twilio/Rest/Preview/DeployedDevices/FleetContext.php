<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\ListResource;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
use ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\Fleet\CertificateList;
use ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\Fleet\DeviceList;
use ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\Fleet\KeyList;
use ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\Fleet\DeploymentList;
/**
 * @property CertificateList $certificates
 * @property DeviceList $devices
 * @property KeyList $keys
 * @property DeploymentList $deployments
 * @method \Twilio\Rest\Preview\DeployedDevices\Fleet\CertificateContext certificates(string $sid)
 * @method \Twilio\Rest\Preview\DeployedDevices\Fleet\DeviceContext devices(string $sid)
 * @method \Twilio\Rest\Preview\DeployedDevices\Fleet\KeyContext keys(string $sid)
 * @method \Twilio\Rest\Preview\DeployedDevices\Fleet\DeploymentContext deployments(string $sid)
 */
class FleetContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    protected $_certificates;
    protected $_devices;
    protected $_keys;
    protected $_deployments;
    /**
     * Initialize the FleetContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid Provides a 34 character string that uniquely identifies the requested Fleet resource.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['sid' => $sid];
        $this->uri = '/Fleets/' . \rawurlencode($sid) . '';
    }
    /**
     * Delete the FleetInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->version->delete('DELETE', $this->uri);
    }
    /**
     * Fetch the FleetInstance
     *
     * @return FleetInstance Fetched FleetInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\FleetInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\FleetInstance($this->version, $payload, $this->solution['sid']);
    }
    /**
     * Update the FleetInstance
     *
     * @param array|Options $options Optional Arguments
     * @return FleetInstance Updated FleetInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\FleetInstance
    {
        $options = new \ShopMagicTwilioVendor\Twilio\Values($options);
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['FriendlyName' => $options['friendlyName'], 'DefaultDeploymentSid' => $options['defaultDeploymentSid']]);
        $payload = $this->version->update('POST', $this->uri, [], $data);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\FleetInstance($this->version, $payload, $this->solution['sid']);
    }
    /**
     * Access the certificates
     */
    protected function getCertificates() : \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\Fleet\CertificateList
    {
        if (!$this->_certificates) {
            $this->_certificates = new \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\Fleet\CertificateList($this->version, $this->solution['sid']);
        }
        return $this->_certificates;
    }
    /**
     * Access the devices
     */
    protected function getDevices() : \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\Fleet\DeviceList
    {
        if (!$this->_devices) {
            $this->_devices = new \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\Fleet\DeviceList($this->version, $this->solution['sid']);
        }
        return $this->_devices;
    }
    /**
     * Access the keys
     */
    protected function getKeys() : \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\Fleet\KeyList
    {
        if (!$this->_keys) {
            $this->_keys = new \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\Fleet\KeyList($this->version, $this->solution['sid']);
        }
        return $this->_keys;
    }
    /**
     * Access the deployments
     */
    protected function getDeployments() : \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\Fleet\DeploymentList
    {
        if (!$this->_deployments) {
            $this->_deployments = new \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\Fleet\DeploymentList($this->version, $this->solution['sid']);
        }
        return $this->_deployments;
    }
    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name) : \ShopMagicTwilioVendor\Twilio\ListResource
    {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->{$method}();
        }
        throw new \ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException('Unknown subresource ' . $name);
    }
    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments) : \ShopMagicTwilioVendor\Twilio\InstanceContext
    {
        $property = $this->{$name};
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }
        throw new \ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException('Resource does not have a context');
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
        return '[Twilio.Preview.DeployedDevices.FleetContext ' . \implode(' ', $context) . ']';
    }
}
