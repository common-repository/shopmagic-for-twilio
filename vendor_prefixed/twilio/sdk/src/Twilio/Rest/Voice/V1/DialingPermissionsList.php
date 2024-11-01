<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Voice
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Voice\V1;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\ListResource;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
use ShopMagicTwilioVendor\Twilio\Rest\Voice\V1\DialingPermissions\BulkCountryUpdateList;
use ShopMagicTwilioVendor\Twilio\Rest\Voice\V1\DialingPermissions\CountryList;
use ShopMagicTwilioVendor\Twilio\Rest\Voice\V1\DialingPermissions\SettingsList;
/**
 * @property BulkCountryUpdateList $bulkCountryUpdates
 * @property CountryList $countries
 * @property SettingsList $settings
 * @method \Twilio\Rest\Voice\V1\DialingPermissions\CountryContext countries(string $isoCode)
 * @method \Twilio\Rest\Voice\V1\DialingPermissions\SettingsContext settings()
 */
class DialingPermissionsList extends \ShopMagicTwilioVendor\Twilio\ListResource
{
    protected $_bulkCountryUpdates = null;
    protected $_countries = null;
    protected $_settings = null;
    /**
     * Construct the DialingPermissionsList
     *
     * @param Version $version Version that contains the resource
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = [];
    }
    /**
     * Access the bulkCountryUpdates
     */
    protected function getBulkCountryUpdates() : \ShopMagicTwilioVendor\Twilio\Rest\Voice\V1\DialingPermissions\BulkCountryUpdateList
    {
        if (!$this->_bulkCountryUpdates) {
            $this->_bulkCountryUpdates = new \ShopMagicTwilioVendor\Twilio\Rest\Voice\V1\DialingPermissions\BulkCountryUpdateList($this->version);
        }
        return $this->_bulkCountryUpdates;
    }
    /**
     * Access the countries
     */
    protected function getCountries() : \ShopMagicTwilioVendor\Twilio\Rest\Voice\V1\DialingPermissions\CountryList
    {
        if (!$this->_countries) {
            $this->_countries = new \ShopMagicTwilioVendor\Twilio\Rest\Voice\V1\DialingPermissions\CountryList($this->version);
        }
        return $this->_countries;
    }
    /**
     * Access the settings
     */
    protected function getSettings() : \ShopMagicTwilioVendor\Twilio\Rest\Voice\V1\DialingPermissions\SettingsList
    {
        if (!$this->_settings) {
            $this->_settings = new \ShopMagicTwilioVendor\Twilio\Rest\Voice\V1\DialingPermissions\SettingsList($this->version);
        }
        return $this->_settings;
    }
    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return \Twilio\ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name)
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
        return '[Twilio.Voice.V1.DialingPermissionsList]';
    }
}
