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
namespace ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\Plugin;

use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
abstract class PluginVersionsOptions
{
    /**
     * @param string $changelog The changelog of the Flex Plugin Version.
     * @param bool $private Whether this Flex Plugin Version requires authorization.
     * @param string $flexMetadata The Flex-Metadata HTTP request header
     * @return CreatePluginVersionsOptions Options builder
     */
    public static function create(string $changelog = \ShopMagicTwilioVendor\Twilio\Values::NONE, bool $private = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, string $flexMetadata = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\Plugin\CreatePluginVersionsOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\Plugin\CreatePluginVersionsOptions($changelog, $private, $flexMetadata);
    }
    /**
     * @param string $flexMetadata The Flex-Metadata HTTP request header
     * @return FetchPluginVersionsOptions Options builder
     */
    public static function fetch(string $flexMetadata = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\Plugin\FetchPluginVersionsOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\Plugin\FetchPluginVersionsOptions($flexMetadata);
    }
    /**
     * @param string $flexMetadata The Flex-Metadata HTTP request header
     * @return ReadPluginVersionsOptions Options builder
     */
    public static function read(string $flexMetadata = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\Plugin\ReadPluginVersionsOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\Plugin\ReadPluginVersionsOptions($flexMetadata);
    }
}
class CreatePluginVersionsOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $changelog The changelog of the Flex Plugin Version.
     * @param bool $private Whether this Flex Plugin Version requires authorization.
     * @param string $flexMetadata The Flex-Metadata HTTP request header
     */
    public function __construct(string $changelog = \ShopMagicTwilioVendor\Twilio\Values::NONE, bool $private = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, string $flexMetadata = \ShopMagicTwilioVendor\Twilio\Values::NONE)
    {
        $this->options['changelog'] = $changelog;
        $this->options['private'] = $private;
        $this->options['flexMetadata'] = $flexMetadata;
    }
    /**
     * The changelog of the Flex Plugin Version.
     *
     * @param string $changelog The changelog of the Flex Plugin Version.
     * @return $this Fluent Builder
     */
    public function setChangelog(string $changelog) : self
    {
        $this->options['changelog'] = $changelog;
        return $this;
    }
    /**
     * Whether this Flex Plugin Version requires authorization.
     *
     * @param bool $private Whether this Flex Plugin Version requires authorization.
     * @return $this Fluent Builder
     */
    public function setPrivate(bool $private) : self
    {
        $this->options['private'] = $private;
        return $this;
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
        return '[Twilio.FlexApi.V1.CreatePluginVersionsOptions ' . $options . ']';
    }
}
class FetchPluginVersionsOptions extends \ShopMagicTwilioVendor\Twilio\Options
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
        return '[Twilio.FlexApi.V1.FetchPluginVersionsOptions ' . $options . ']';
    }
}
class ReadPluginVersionsOptions extends \ShopMagicTwilioVendor\Twilio\Options
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
        return '[Twilio.FlexApi.V1.ReadPluginVersionsOptions ' . $options . ']';
    }
}
