<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Accounts
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Accounts\V1\Credential;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
class AwsContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    /**
     * Initialize the AwsContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The Twilio-provided string that uniquely identifies the AWS resource to delete.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['sid' => $sid];
        $this->uri = '/Credentials/AWS/' . \rawurlencode($sid) . '';
    }
    /**
     * Delete the AwsInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete() : bool
    {
        return $this->version->delete('DELETE', $this->uri);
    }
    /**
     * Fetch the AwsInstance
     *
     * @return AwsInstance Fetched AwsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Accounts\V1\Credential\AwsInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Accounts\V1\Credential\AwsInstance($this->version, $payload, $this->solution['sid']);
    }
    /**
     * Update the AwsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return AwsInstance Updated AwsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Accounts\V1\Credential\AwsInstance
    {
        $options = new \ShopMagicTwilioVendor\Twilio\Values($options);
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['FriendlyName' => $options['friendlyName']]);
        $payload = $this->version->update('POST', $this->uri, [], $data);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Accounts\V1\Credential\AwsInstance($this->version, $payload, $this->solution['sid']);
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
        return '[Twilio.Accounts.V1.AwsContext ' . \implode(' ', $context) . ']';
    }
}
