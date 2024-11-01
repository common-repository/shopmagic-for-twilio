<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Preview
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices;

use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
abstract class FleetOptions
{
    /**
     * @param string $friendlyName Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     * @return CreateFleetOptions Options builder
     */
    public static function create(string $friendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\CreateFleetOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\CreateFleetOptions($friendlyName);
    }
    /**
     * @param string $friendlyName Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     * @param string $defaultDeploymentSid Provides a string identifier of a Deployment that is going to be used as a default one for this Fleet.
     * @return UpdateFleetOptions Options builder
     */
    public static function update(string $friendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $defaultDeploymentSid = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\UpdateFleetOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\Preview\DeployedDevices\UpdateFleetOptions($friendlyName, $defaultDeploymentSid);
    }
}
class CreateFleetOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $friendlyName Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     */
    public function __construct(string $friendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE)
    {
        $this->options['friendlyName'] = $friendlyName;
    }
    /**
     * Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     *
     * @param string $friendlyName Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName) : self
    {
        $this->options['friendlyName'] = $friendlyName;
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
        return '[Twilio.Preview.DeployedDevices.CreateFleetOptions ' . $options . ']';
    }
}
class UpdateFleetOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $friendlyName Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     * @param string $defaultDeploymentSid Provides a string identifier of a Deployment that is going to be used as a default one for this Fleet.
     */
    public function __construct(string $friendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $defaultDeploymentSid = \ShopMagicTwilioVendor\Twilio\Values::NONE)
    {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['defaultDeploymentSid'] = $defaultDeploymentSid;
    }
    /**
     * Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     *
     * @param string $friendlyName Provides a human readable descriptive text for this Fleet, up to 256 characters long.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName) : self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
     * Provides a string identifier of a Deployment that is going to be used as a default one for this Fleet.
     *
     * @param string $defaultDeploymentSid Provides a string identifier of a Deployment that is going to be used as a default one for this Fleet.
     * @return $this Fluent Builder
     */
    public function setDefaultDeploymentSid(string $defaultDeploymentSid) : self
    {
        $this->options['defaultDeploymentSid'] = $defaultDeploymentSid;
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
        return '[Twilio.Preview.DeployedDevices.UpdateFleetOptions ' . $options . ']';
    }
}
