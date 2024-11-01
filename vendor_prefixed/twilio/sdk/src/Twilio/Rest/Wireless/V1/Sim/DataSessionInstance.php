<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Wireless
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Wireless\V1\Sim;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\InstanceResource;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\Deserialize;
/**
 * @property string|null $sid
 * @property string|null $simSid
 * @property string|null $accountSid
 * @property string|null $radioLink
 * @property string|null $operatorMcc
 * @property string|null $operatorMnc
 * @property string|null $operatorCountry
 * @property string|null $operatorName
 * @property string|null $cellId
 * @property array|null $cellLocationEstimate
 * @property int|null $packetsUploaded
 * @property int|null $packetsDownloaded
 * @property \DateTime|null $lastUpdated
 * @property \DateTime|null $start
 * @property \DateTime|null $end
 * @property string|null $imei
 */
class DataSessionInstance extends \ShopMagicTwilioVendor\Twilio\InstanceResource
{
    /**
     * Initialize the DataSessionInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $simSid The SID of the [Sim resource](https://www.twilio.com/docs/iot/wireless/api/sim-resource) with the Data Sessions to read.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, array $payload, string $simSid)
    {
        parent::__construct($version);
        // Marshaled Properties
        $this->properties = ['sid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'sid'), 'simSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'sim_sid'), 'accountSid' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'account_sid'), 'radioLink' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'radio_link'), 'operatorMcc' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'operator_mcc'), 'operatorMnc' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'operator_mnc'), 'operatorCountry' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'operator_country'), 'operatorName' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'operator_name'), 'cellId' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'cell_id'), 'cellLocationEstimate' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'cell_location_estimate'), 'packetsUploaded' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'packets_uploaded'), 'packetsDownloaded' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'packets_downloaded'), 'lastUpdated' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'last_updated')), 'start' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'start')), 'end' => \ShopMagicTwilioVendor\Twilio\Deserialize::dateTime(\ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'end')), 'imei' => \ShopMagicTwilioVendor\Twilio\Values::array_get($payload, 'imei')];
        $this->solution = ['simSid' => $simSid];
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
        return '[Twilio.Wireless.V1.DataSessionInstance]';
    }
}
