<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Insights
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Insights\V1\Call;

use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
abstract class CallSummaryOptions
{
    /**
     * @param string $processingState The Processing State of this Call Summary. One of `complete`, `partial` or `all`.
     * @return FetchCallSummaryOptions Options builder
     */
    public static function fetch(string $processingState = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\Insights\V1\Call\FetchCallSummaryOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\Insights\V1\Call\FetchCallSummaryOptions($processingState);
    }
}
class FetchCallSummaryOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $processingState The Processing State of this Call Summary. One of `complete`, `partial` or `all`.
     */
    public function __construct(string $processingState = \ShopMagicTwilioVendor\Twilio\Values::NONE)
    {
        $this->options['processingState'] = $processingState;
    }
    /**
     * The Processing State of this Call Summary. One of `complete`, `partial` or `all`.
     *
     * @param string $processingState The Processing State of this Call Summary. One of `complete`, `partial` or `all`.
     * @return $this Fluent Builder
     */
    public function setProcessingState(string $processingState) : self
    {
        $this->options['processingState'] = $processingState;
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
        return '[Twilio.Insights.V1.FetchCallSummaryOptions ' . $options . ']';
    }
}
