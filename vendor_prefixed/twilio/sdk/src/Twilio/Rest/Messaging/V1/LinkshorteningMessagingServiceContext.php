<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Messaging
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
class LinkshorteningMessagingServiceContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    /**
     * Initialize the LinkshorteningMessagingServiceContext
     *
     * @param Version $version Version that contains the resource
     * @param string $domainSid The domain SID to associate with a messaging service. With URL shortening enabled, links in messages sent with the associated messaging service will be shortened to the provided domain
     * @param string $messagingServiceSid A messaging service SID to associate with a domain. With URL shortening enabled, links in messages sent with the provided messaging service will be shortened to the associated domain
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $domainSid, $messagingServiceSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['domainSid' => $domainSid, 'messagingServiceSid' => $messagingServiceSid];
        $this->uri = '/LinkShortening/Domains/' . \rawurlencode($domainSid) . '/MessagingServices/' . \rawurlencode($messagingServiceSid) . '';
    }
    /**
     * Create the LinkshorteningMessagingServiceInstance
     *
     * @return LinkshorteningMessagingServiceInstance Created LinkshorteningMessagingServiceInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create() : \ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\LinkshorteningMessagingServiceInstance
    {
        $payload = $this->version->create('POST', $this->uri);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Messaging\V1\LinkshorteningMessagingServiceInstance($this->version, $payload, $this->solution['domainSid'], $this->solution['messagingServiceSid']);
    }
    /**
     * Delete the LinkshorteningMessagingServiceInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->version->delete('DELETE', $this->uri);
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
        return '[Twilio.Messaging.V1.LinkshorteningMessagingServiceContext ' . \implode(' ', $context) . ']';
    }
}
