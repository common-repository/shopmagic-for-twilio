<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Trunking
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\ListResource;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
use ShopMagicTwilioVendor\Twilio\Serialize;
use ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\IpAccessControlListList;
use ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\PhoneNumberList;
use ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\CredentialListList;
use ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\OriginationUrlList;
use ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\RecordingList;
/**
 * @property IpAccessControlListList $ipAccessControlLists
 * @property PhoneNumberList $phoneNumbers
 * @property CredentialListList $credentialsLists
 * @property OriginationUrlList $originationUrls
 * @property RecordingList $recordings
 * @method \Twilio\Rest\Trunking\V1\Trunk\RecordingContext recordings()
 * @method \Twilio\Rest\Trunking\V1\Trunk\CredentialListContext credentialsLists(string $sid)
 * @method \Twilio\Rest\Trunking\V1\Trunk\IpAccessControlListContext ipAccessControlLists(string $sid)
 * @method \Twilio\Rest\Trunking\V1\Trunk\PhoneNumberContext phoneNumbers(string $sid)
 * @method \Twilio\Rest\Trunking\V1\Trunk\OriginationUrlContext originationUrls(string $sid)
 */
class TrunkContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    protected $_ipAccessControlLists;
    protected $_phoneNumbers;
    protected $_credentialsLists;
    protected $_originationUrls;
    protected $_recordings;
    /**
     * Initialize the TrunkContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The unique string that we created to identify the Trunk resource to delete.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['sid' => $sid];
        $this->uri = '/Trunks/' . \rawurlencode($sid) . '';
    }
    /**
     * Delete the TrunkInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->version->delete('DELETE', $this->uri);
    }
    /**
     * Fetch the TrunkInstance
     *
     * @return TrunkInstance Fetched TrunkInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\TrunkInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\TrunkInstance($this->version, $payload, $this->solution['sid']);
    }
    /**
     * Update the TrunkInstance
     *
     * @param array|Options $options Optional Arguments
     * @return TrunkInstance Updated TrunkInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\TrunkInstance
    {
        $options = new \ShopMagicTwilioVendor\Twilio\Values($options);
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['FriendlyName' => $options['friendlyName'], 'DomainName' => $options['domainName'], 'DisasterRecoveryUrl' => $options['disasterRecoveryUrl'], 'DisasterRecoveryMethod' => $options['disasterRecoveryMethod'], 'TransferMode' => $options['transferMode'], 'Secure' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['secure']), 'CnamLookupEnabled' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['cnamLookupEnabled']), 'TransferCallerId' => $options['transferCallerId']]);
        $payload = $this->version->update('POST', $this->uri, [], $data);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\TrunkInstance($this->version, $payload, $this->solution['sid']);
    }
    /**
     * Access the ipAccessControlLists
     */
    protected function getIpAccessControlLists() : \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\IpAccessControlListList
    {
        if (!$this->_ipAccessControlLists) {
            $this->_ipAccessControlLists = new \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\IpAccessControlListList($this->version, $this->solution['sid']);
        }
        return $this->_ipAccessControlLists;
    }
    /**
     * Access the phoneNumbers
     */
    protected function getPhoneNumbers() : \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\PhoneNumberList
    {
        if (!$this->_phoneNumbers) {
            $this->_phoneNumbers = new \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\PhoneNumberList($this->version, $this->solution['sid']);
        }
        return $this->_phoneNumbers;
    }
    /**
     * Access the credentialsLists
     */
    protected function getCredentialsLists() : \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\CredentialListList
    {
        if (!$this->_credentialsLists) {
            $this->_credentialsLists = new \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\CredentialListList($this->version, $this->solution['sid']);
        }
        return $this->_credentialsLists;
    }
    /**
     * Access the originationUrls
     */
    protected function getOriginationUrls() : \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\OriginationUrlList
    {
        if (!$this->_originationUrls) {
            $this->_originationUrls = new \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\OriginationUrlList($this->version, $this->solution['sid']);
        }
        return $this->_originationUrls;
    }
    /**
     * Access the recordings
     */
    protected function getRecordings() : \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\RecordingList
    {
        if (!$this->_recordings) {
            $this->_recordings = new \ShopMagicTwilioVendor\Twilio\Rest\Trunking\V1\Trunk\RecordingList($this->version, $this->solution['sid']);
        }
        return $this->_recordings;
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
        return '[Twilio.Trunking.V1.TrunkContext ' . \implode(' ', $context) . ']';
    }
}
