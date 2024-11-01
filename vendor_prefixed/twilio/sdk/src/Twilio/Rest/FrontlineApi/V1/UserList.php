<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Frontline
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\FrontlineApi\V1;

use ShopMagicTwilioVendor\Twilio\ListResource;
use ShopMagicTwilioVendor\Twilio\Version;
class UserList extends \ShopMagicTwilioVendor\Twilio\ListResource
{
    /**
     * Construct the UserList
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
     * Constructs a UserContext
     *
     * @param string $sid The SID of the User resource to fetch. This value can be either the `sid` or the `identity` of the User resource to fetch.
     */
    public function getContext(string $sid) : \ShopMagicTwilioVendor\Twilio\Rest\FrontlineApi\V1\UserContext
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\FrontlineApi\V1\UserContext($this->version, $sid);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.FrontlineApi.V1.UserList]';
    }
}
