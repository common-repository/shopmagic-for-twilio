<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Flex
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1;

use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
abstract class PluginVersionArchiveOptions
{
    /**
     * @param string $flexMetadata The Flex-Metadata HTTP request header
     * @return UpdatePluginVersionArchiveOptions Options builder
     */
    public static function update(string $flexMetadata = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\UpdatePluginVersionArchiveOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\UpdatePluginVersionArchiveOptions($flexMetadata);
    }
}
class UpdatePluginVersionArchiveOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $flexMetadata The Flex-Metadata HTTP request header
     */
    public function __construct(string $flexMetadata = \ShopMagicTwilioVendor\Twilio\Values::NONE)
    {
        $this->options['flexMetadata'] = $flexMetadata;
    }
    /**
     * The Flex-Metadata HTTP request header
     *
     * @param string $flexMetadata The Flex-Metadata HTTP request header
     * @return $this Fluent Builder
     */
    public function setFlexMetadata(string $flexMetadata) : self
    {
        $this->options['flexMetadata'] = $flexMetadata;
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
        return '[Twilio.FlexApi.V1.UpdatePluginVersionArchiveOptions ' . $options . ']';
    }
}
