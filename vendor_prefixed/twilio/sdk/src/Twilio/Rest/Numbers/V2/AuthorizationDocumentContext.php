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
namespace ShopMagicTwilioVendor\Twilio\Rest\Numbers\V2;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\ListResource;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
use ShopMagicTwilioVendor\Twilio\Rest\Numbers\V2\AuthorizationDocument\DependentHostedNumberOrderList;
/**
 * @property DependentHostedNumberOrderList $dependentHostedNumberOrders
 */
class AuthorizationDocumentContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    protected $_dependentHostedNumberOrders;
    /**
     * Initialize the AuthorizationDocumentContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid A 34 character string that uniquely identifies this AuthorizationDocument.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['sid' => $sid];
        $this->uri = '/HostedNumber/AuthorizationDocuments/' . \rawurlencode($sid) . '';
    }
    /**
     * Delete the AuthorizationDocumentInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->version->delete('DELETE', $this->uri);
    }
    /**
     * Fetch the AuthorizationDocumentInstance
     *
     * @return AuthorizationDocumentInstance Fetched AuthorizationDocumentInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Numbers\V2\AuthorizationDocumentInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Numbers\V2\AuthorizationDocumentInstance($this->version, $payload, $this->solution['sid']);
    }
    /**
     * Access the dependentHostedNumberOrders
     */
    protected function getDependentHostedNumberOrders() : \ShopMagicTwilioVendor\Twilio\Rest\Numbers\V2\AuthorizationDocument\DependentHostedNumberOrderList
    {
        if (!$this->_dependentHostedNumberOrders) {
            $this->_dependentHostedNumberOrders = new \ShopMagicTwilioVendor\Twilio\Rest\Numbers\V2\AuthorizationDocument\DependentHostedNumberOrderList($this->version, $this->solution['sid']);
        }
        return $this->_dependentHostedNumberOrders;
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
        return '[Twilio.Numbers.V2.AuthorizationDocumentContext ' . \implode(' ', $context) . ']';
    }
}
