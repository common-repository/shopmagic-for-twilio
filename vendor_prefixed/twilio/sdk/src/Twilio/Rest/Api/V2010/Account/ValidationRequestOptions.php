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
namespace ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account;

use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
abstract class ValidationRequestOptions
{
    /**
     * @param string $friendlyName A descriptive string that you create to describe the new caller ID resource. It can be up to 64 characters long. The default value is a formatted version of the phone number.
     * @param int $callDelay The number of seconds to delay before initiating the verification call. Can be an integer between `0` and `60`, inclusive. The default is `0`.
     * @param string $extension The digits to dial after connecting the verification call.
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information about the verification process to your application.
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `GET` or `POST`, and the default is `POST`.
     * @return CreateValidationRequestOptions Options builder
     */
    public static function create(string $friendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE, int $callDelay = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, string $extension = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $statusCallback = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $statusCallbackMethod = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\CreateValidationRequestOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\Api\V2010\Account\CreateValidationRequestOptions($friendlyName, $callDelay, $extension, $statusCallback, $statusCallbackMethod);
    }
}
class CreateValidationRequestOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $friendlyName A descriptive string that you create to describe the new caller ID resource. It can be up to 64 characters long. The default value is a formatted version of the phone number.
     * @param int $callDelay The number of seconds to delay before initiating the verification call. Can be an integer between `0` and `60`, inclusive. The default is `0`.
     * @param string $extension The digits to dial after connecting the verification call.
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information about the verification process to your application.
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `GET` or `POST`, and the default is `POST`.
     */
    public function __construct(string $friendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE, int $callDelay = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, string $extension = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $statusCallback = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $statusCallbackMethod = \ShopMagicTwilioVendor\Twilio\Values::NONE)
    {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['callDelay'] = $callDelay;
        $this->options['extension'] = $extension;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
    }
    /**
     * A descriptive string that you create to describe the new caller ID resource. It can be up to 64 characters long. The default value is a formatted version of the phone number.
     *
     * @param string $friendlyName A descriptive string that you create to describe the new caller ID resource. It can be up to 64 characters long. The default value is a formatted version of the phone number.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName) : self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
     * The number of seconds to delay before initiating the verification call. Can be an integer between `0` and `60`, inclusive. The default is `0`.
     *
     * @param int $callDelay The number of seconds to delay before initiating the verification call. Can be an integer between `0` and `60`, inclusive. The default is `0`.
     * @return $this Fluent Builder
     */
    public function setCallDelay(int $callDelay) : self
    {
        $this->options['callDelay'] = $callDelay;
        return $this;
    }
    /**
     * The digits to dial after connecting the verification call.
     *
     * @param string $extension The digits to dial after connecting the verification call.
     * @return $this Fluent Builder
     */
    public function setExtension(string $extension) : self
    {
        $this->options['extension'] = $extension;
        return $this;
    }
    /**
     * The URL we should call using the `status_callback_method` to send status information about the verification process to your application.
     *
     * @param string $statusCallback The URL we should call using the `status_callback_method` to send status information about the verification process to your application.
     * @return $this Fluent Builder
     */
    public function setStatusCallback(string $statusCallback) : self
    {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }
    /**
     * The HTTP method we should use to call `status_callback`. Can be: `GET` or `POST`, and the default is `POST`.
     *
     * @param string $statusCallbackMethod The HTTP method we should use to call `status_callback`. Can be: `GET` or `POST`, and the default is `POST`.
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod(string $statusCallbackMethod) : self
    {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
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
        return '[Twilio.Api.V2010.CreateValidationRequestOptions ' . $options . ']';
    }
}
