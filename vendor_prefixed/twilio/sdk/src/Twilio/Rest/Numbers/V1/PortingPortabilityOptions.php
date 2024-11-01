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
namespace ShopMagicTwilioVendor\Twilio\Rest\Numbers\V1;

use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
abstract class PortingPortabilityOptions
{
    /**
     * @param string $targetAccountSid The SID of the account where the phone number(s) will be ported.
     * @return FetchPortingPortabilityOptions Options builder
     */
    public static function fetch(string $targetAccountSid = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\Numbers\V1\FetchPortingPortabilityOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\Numbers\V1\FetchPortingPortabilityOptions($targetAccountSid);
    }
}
class FetchPortingPortabilityOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $targetAccountSid The SID of the account where the phone number(s) will be ported.
     */
    public function __construct(string $targetAccountSid = \ShopMagicTwilioVendor\Twilio\Values::NONE)
    {
        $this->options['targetAccountSid'] = $targetAccountSid;
    }
    /**
     * The SID of the account where the phone number(s) will be ported.
     *
     * @param string $targetAccountSid The SID of the account where the phone number(s) will be ported.
     * @return $this Fluent Builder
     */
    public function setTargetAccountSid(string $targetAccountSid) : self
    {
        $this->options['targetAccountSid'] = $targetAccountSid;
        return $this;
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        $options = \http_build_query(\ShopMagicTwilioVendor\Twilio\Values::of($this->options), '', ' ');
        return '[Twilio.Numbers.V1.FetchPortingPortabilityOptions ' . $options . ']';
    }
}
