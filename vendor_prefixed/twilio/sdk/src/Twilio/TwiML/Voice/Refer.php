<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace ShopMagicTwilioVendor\Twilio\TwiML\Voice;

use ShopMagicTwilioVendor\Twilio\TwiML\TwiML;
class Refer extends \ShopMagicTwilioVendor\Twilio\TwiML\TwiML
{
    /**
     * Refer constructor.
     *
     * @param array $attributes Optional attributes
     */
    public function __construct($attributes = [])
    {
        parent::__construct('Refer', null, $attributes);
    }
    /**
     * Add Sip child.
     *
     * @param string $sipUrl SIP URL
     * @return ReferSip Child element.
     */
    public function sip($sipUrl) : \ShopMagicTwilioVendor\Twilio\TwiML\Voice\ReferSip
    {
        return $this->nest(new \ShopMagicTwilioVendor\Twilio\TwiML\Voice\ReferSip($sipUrl));
    }
    /**
     * Add Action attribute.
     *
     * @param string $action Action URL
     */
    public function setAction($action) : self
    {
        return $this->setAttribute('action', $action);
    }
    /**
     * Add Method attribute.
     *
     * @param string $method Action URL method
     */
    public function setMethod($method) : self
    {
        return $this->setAttribute('method', $method);
    }
}
