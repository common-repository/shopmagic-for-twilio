<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Verify
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Verify\V2;

use ShopMagicTwilioVendor\Twilio\ListResource;
use ShopMagicTwilioVendor\Twilio\Version;
class FormList extends \ShopMagicTwilioVendor\Twilio\ListResource
{
    /**
     * Construct the FormList
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
     * Constructs a FormContext
     *
     * @param string $formType The Type of this Form. Currently only `form-push` is supported.
     */
    public function getContext(string $formType) : \ShopMagicTwilioVendor\Twilio\Rest\Verify\V2\FormContext
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\Verify\V2\FormContext($this->version, $formType);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.Verify.V2.FormList]';
    }
}
