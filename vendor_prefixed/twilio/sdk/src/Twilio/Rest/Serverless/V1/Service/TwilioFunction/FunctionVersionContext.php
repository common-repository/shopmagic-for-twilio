<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Serverless
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Serverless\V1\Service\TwilioFunction;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\ListResource;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
use ShopMagicTwilioVendor\Twilio\Rest\Serverless\V1\Service\TwilioFunction\FunctionVersion\FunctionVersionContentList;
/**
 * @property FunctionVersionContentList $functionVersionContent
 * @method \Twilio\Rest\Serverless\V1\Service\TwilioFunction\FunctionVersion\FunctionVersionContentContext functionVersionContent()
 */
class FunctionVersionContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    protected $_functionVersionContent;
    /**
     * Initialize the FunctionVersionContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the Service to fetch the Function Version resource from.
     * @param string $functionSid The SID of the function that is the parent of the Function Version resource to fetch.
     * @param string $sid The SID of the Function Version resource to fetch.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $serviceSid, $functionSid, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['serviceSid' => $serviceSid, 'functionSid' => $functionSid, 'sid' => $sid];
        $this->uri = '/Services/' . \rawurlencode($serviceSid) . '/Functions/' . \rawurlencode($functionSid) . '/Versions/' . \rawurlencode($sid) . '';
    }
    /**
     * Fetch the FunctionVersionInstance
     *
     * @return FunctionVersionInstance Fetched FunctionVersionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Serverless\V1\Service\TwilioFunction\FunctionVersionInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Serverless\V1\Service\TwilioFunction\FunctionVersionInstance($this->version, $payload, $this->solution['serviceSid'], $this->solution['functionSid'], $this->solution['sid']);
    }
    /**
     * Access the functionVersionContent
     */
    protected function getFunctionVersionContent() : \ShopMagicTwilioVendor\Twilio\Rest\Serverless\V1\Service\TwilioFunction\FunctionVersion\FunctionVersionContentList
    {
        if (!$this->_functionVersionContent) {
            $this->_functionVersionContent = new \ShopMagicTwilioVendor\Twilio\Rest\Serverless\V1\Service\TwilioFunction\FunctionVersion\FunctionVersionContentList($this->version, $this->solution['serviceSid'], $this->solution['functionSid'], $this->solution['sid']);
        }
        return $this->_functionVersionContent;
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
        return '[Twilio.Serverless.V1.FunctionVersionContext ' . \implode(' ', $context) . ']';
    }
}
