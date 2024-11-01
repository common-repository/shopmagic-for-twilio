<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Events
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Events\V1\Subscription;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\ListResource;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Stream;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
class SubscribedEventList extends \ShopMagicTwilioVendor\Twilio\ListResource
{
    /**
     * Construct the SubscribedEventList
     *
     * @param Version $version Version that contains the resource
     * @param string $subscriptionSid The unique SID identifier of the Subscription.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, string $subscriptionSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['subscriptionSid' => $subscriptionSid];
        $this->uri = '/Subscriptions/' . \rawurlencode($subscriptionSid) . '/SubscribedEvents';
    }
    /**
     * Create the SubscribedEventInstance
     *
     * @param string $type Type of event being subscribed to.
     * @param array|Options $options Optional Arguments
     * @return SubscribedEventInstance Created SubscribedEventInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $type, array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Events\V1\Subscription\SubscribedEventInstance
    {
        $options = new \ShopMagicTwilioVendor\Twilio\Values($options);
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['Type' => $type, 'SchemaVersion' => $options['schemaVersion']]);
        $payload = $this->version->create('POST', $this->uri, [], $data);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Events\V1\Subscription\SubscribedEventInstance($this->version, $payload, $this->solution['subscriptionSid']);
    }
    /**
     * Reads SubscribedEventInstance records from the API as a list.
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
     * @return SubscribedEventInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null) : array
    {
        return \iterator_to_array($this->stream($limit, $pageSize), \false);
    }
    /**
     * Streams SubscribedEventInstance records from the API as a generator stream.
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
     * Retrieve a single page of SubscribedEventInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return SubscribedEventPage Page of SubscribedEventInstance
     */
    public function page($pageSize = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $pageToken = \ShopMagicTwilioVendor\Twilio\Values::NONE, $pageNumber = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\Events\V1\Subscription\SubscribedEventPage
    {
        $params = \ShopMagicTwilioVendor\Twilio\Values::of(['PageToken' => $pageToken, 'Page' => $pageNumber, 'PageSize' => $pageSize]);
        $response = $this->version->page('GET', $this->uri, $params);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Events\V1\Subscription\SubscribedEventPage($this->version, $response, $this->solution);
    }
    /**
     * Retrieve a specific page of SubscribedEventInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return SubscribedEventPage Page of SubscribedEventInstance
     */
    public function getPage(string $targetUrl) : \ShopMagicTwilioVendor\Twilio\Rest\Events\V1\Subscription\SubscribedEventPage
    {
        $response = $this->version->getDomain()->getClient()->request('GET', $targetUrl);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Events\V1\Subscription\SubscribedEventPage($this->version, $response, $this->solution);
    }
    /**
     * Constructs a SubscribedEventContext
     *
     * @param string $type Type of event being subscribed to.
     */
    public function getContext(string $type) : \ShopMagicTwilioVendor\Twilio\Rest\Events\V1\Subscription\SubscribedEventContext
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\Events\V1\Subscription\SubscribedEventContext($this->version, $this->solution['subscriptionSid'], $type);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.Events.V1.SubscribedEventList]';
    }
}
