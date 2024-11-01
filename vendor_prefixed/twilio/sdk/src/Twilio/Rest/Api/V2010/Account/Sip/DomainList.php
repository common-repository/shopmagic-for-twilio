<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Api
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Sip;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\ListResource;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Stream;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\Serialize;
class DomainList extends \ShopMagicTwilioVendor\Twilio\ListResource
{
    /**
     * Construct the DomainList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the [Account](https://www.twilio.com/docs/iam/api/account) that will create the resource.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, string $accountSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid];
        $this->uri = '/Accounts/' . \rawurlencode($accountSid) . '/SIP/Domains.json';
    }
    /**
     * Create the DomainInstance
     *
     * @param string $domainName The unique address you reserve on Twilio to which you route your SIP traffic. Domain names can contain letters, digits, and \\\"-\\\" and must end with `sip.twilio.com`.
     * @param array|Options $options Optional Arguments
     * @return DomainInstance Created DomainInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $domainName, array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Sip\DomainInstance
    {
        $options = new \ShopMagicTwilioVendor\Twilio\Values($options);
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['DomainName' => $domainName, 'FriendlyName' => $options['friendlyName'], 'VoiceUrl' => $options['voiceUrl'], 'VoiceMethod' => $options['voiceMethod'], 'VoiceFallbackUrl' => $options['voiceFallbackUrl'], 'VoiceFallbackMethod' => $options['voiceFallbackMethod'], 'VoiceStatusCallbackUrl' => $options['voiceStatusCallbackUrl'], 'VoiceStatusCallbackMethod' => $options['voiceStatusCallbackMethod'], 'SipRegistration' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['sipRegistration']), 'EmergencyCallingEnabled' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['emergencyCallingEnabled']), 'Secure' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['secure']), 'ByocTrunkSid' => $options['byocTrunkSid'], 'EmergencyCallerSid' => $options['emergencyCallerSid']]);
        $payload = $this->version->create('POST', $this->uri, [], $data);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Sip\DomainInstance($this->version, $payload, $this->solution['accountSid']);
    }
    /**
     * Reads DomainInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return DomainInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null) : array
    {
        return \iterator_to_array($this->stream($limit, $pageSize), \false);
    }
    /**
     * Streams DomainInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return Stream stream of results
     */
    public function stream(int $limit = null, $pageSize = null) : \ShopMagicTwilioVendor\Twilio\Stream
    {
        $limits = $this->version->readLimits($limit, $pageSize);
        $page = $this->page($limits['pageSize']);
        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }
    /**
     * Retrieve a single page of DomainInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return DomainPage Page of DomainInstance
     */
    public function page($pageSize = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $pageToken = \ShopMagicTwilioVendor\Twilio\Values::NONE, $pageNumber = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Sip\DomainPage
    {
        $params = \ShopMagicTwilioVendor\Twilio\Values::of(['PageToken' => $pageToken, 'Page' => $pageNumber, 'PageSize' => $pageSize]);
        $response = $this->version->page('GET', $this->uri, $params);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Sip\DomainPage($this->version, $response, $this->solution);
    }
    /**
     * Retrieve a specific page of DomainInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return DomainPage Page of DomainInstance
     */
    public function getPage(string $targetUrl) : \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Sip\DomainPage
    {
        $response = $this->version->getDomain()->getClient()->request('GET', $targetUrl);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Sip\DomainPage($this->version, $response, $this->solution);
    }
    /**
     * Constructs a DomainContext
     *
     * @param string $sid The Twilio-provided string that uniquely identifies the SipDomain resource to delete.
     */
    public function getContext(string $sid) : \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Sip\DomainContext
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\Sip\DomainContext($this->version, $this->solution['accountSid'], $sid);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.Api.V2010.DomainList]';
    }
}
