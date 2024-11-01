<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Proxy
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Proxy\V1\Service;

use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
abstract class SessionOptions
{
    /**
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. This value must be 191 characters or fewer in length and be unique. **This value should not have PII.**
     * @param \DateTime $dateExpiry The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date when the Session should expire. If this is value is present, it overrides the `ttl` value.
     * @param int $ttl The time, in seconds, when the session will expire. The time is measured from the last Session create or the Session's last Interaction.
     * @param string $mode
     * @param string $status
     * @param array[] $participants The Participant objects to include in the new session.
     * @return CreateSessionOptions Options builder
     */
    public static function create(string $uniqueName = \ShopMagicTwilioVendor\Twilio\Values::NONE, \DateTime $dateExpiry = null, int $ttl = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, string $mode = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $status = \ShopMagicTwilioVendor\Twilio\Values::NONE, array $participants = \ShopMagicTwilioVendor\Twilio\Values::ARRAY_NONE) : \ShopMagicTwilioVendor\Twilio\Rest\Proxy\V1\Service\CreateSessionOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\Proxy\V1\Service\CreateSessionOptions($uniqueName, $dateExpiry, $ttl, $mode, $status, $participants);
    }
    /**
     * @param \DateTime $dateExpiry The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date when the Session should expire. If this is value is present, it overrides the `ttl` value.
     * @param int $ttl The time, in seconds, when the session will expire. The time is measured from the last Session create or the Session's last Interaction.
     * @param string $status
     * @return UpdateSessionOptions Options builder
     */
    public static function update(\DateTime $dateExpiry = null, int $ttl = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, string $status = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\Proxy\V1\Service\UpdateSessionOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\Proxy\V1\Service\UpdateSessionOptions($dateExpiry, $ttl, $status);
    }
}
class CreateSessionOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. This value must be 191 characters or fewer in length and be unique. **This value should not have PII.**
     * @param \DateTime $dateExpiry The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date when the Session should expire. If this is value is present, it overrides the `ttl` value.
     * @param int $ttl The time, in seconds, when the session will expire. The time is measured from the last Session create or the Session's last Interaction.
     * @param string $mode
     * @param string $status
     * @param array[] $participants The Participant objects to include in the new session.
     */
    public function __construct(string $uniqueName = \ShopMagicTwilioVendor\Twilio\Values::NONE, \DateTime $dateExpiry = null, int $ttl = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, string $mode = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $status = \ShopMagicTwilioVendor\Twilio\Values::NONE, array $participants = \ShopMagicTwilioVendor\Twilio\Values::ARRAY_NONE)
    {
        $this->options['uniqueName'] = $uniqueName;
        $this->options['dateExpiry'] = $dateExpiry;
        $this->options['ttl'] = $ttl;
        $this->options['mode'] = $mode;
        $this->options['status'] = $status;
        $this->options['participants'] = $participants;
    }
    /**
     * An application-defined string that uniquely identifies the resource. This value must be 191 characters or fewer in length and be unique. **This value should not have PII.**
     *
     * @param string $uniqueName An application-defined string that uniquely identifies the resource. This value must be 191 characters or fewer in length and be unique. **This value should not have PII.**
     * @return $this Fluent Builder
     */
    public function setUniqueName(string $uniqueName) : self
    {
        $this->options['uniqueName'] = $uniqueName;
        return $this;
    }
    /**
     * The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date when the Session should expire. If this is value is present, it overrides the `ttl` value.
     *
     * @param \DateTime $dateExpiry The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date when the Session should expire. If this is value is present, it overrides the `ttl` value.
     * @return $this Fluent Builder
     */
    public function setDateExpiry(\DateTime $dateExpiry) : self
    {
        $this->options['dateExpiry'] = $dateExpiry;
        return $this;
    }
    /**
     * The time, in seconds, when the session will expire. The time is measured from the last Session create or the Session's last Interaction.
     *
     * @param int $ttl The time, in seconds, when the session will expire. The time is measured from the last Session create or the Session's last Interaction.
     * @return $this Fluent Builder
     */
    public function setTtl(int $ttl) : self
    {
        $this->options['ttl'] = $ttl;
        return $this;
    }
    /**
     * @param string $mode
     * @return $this Fluent Builder
     */
    public function setMode(string $mode) : self
    {
        $this->options['mode'] = $mode;
        return $this;
    }
    /**
     * @param string $status
     * @return $this Fluent Builder
     */
    public function setStatus(string $status) : self
    {
        $this->options['status'] = $status;
        return $this;
    }
    /**
     * The Participant objects to include in the new session.
     *
     * @param array[] $participants The Participant objects to include in the new session.
     * @return $this Fluent Builder
     */
    public function setParticipants(array $participants) : self
    {
        $this->options['participants'] = $participants;
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
        return '[Twilio.Proxy.V1.CreateSessionOptions ' . $options . ']';
    }
}
class UpdateSessionOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param \DateTime $dateExpiry The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date when the Session should expire. If this is value is present, it overrides the `ttl` value.
     * @param int $ttl The time, in seconds, when the session will expire. The time is measured from the last Session create or the Session's last Interaction.
     * @param string $status
     */
    public function __construct(\DateTime $dateExpiry = null, int $ttl = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, string $status = \ShopMagicTwilioVendor\Twilio\Values::NONE)
    {
        $this->options['dateExpiry'] = $dateExpiry;
        $this->options['ttl'] = $ttl;
        $this->options['status'] = $status;
    }
    /**
     * The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date when the Session should expire. If this is value is present, it overrides the `ttl` value.
     *
     * @param \DateTime $dateExpiry The [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) date when the Session should expire. If this is value is present, it overrides the `ttl` value.
     * @return $this Fluent Builder
     */
    public function setDateExpiry(\DateTime $dateExpiry) : self
    {
        $this->options['dateExpiry'] = $dateExpiry;
        return $this;
    }
    /**
     * The time, in seconds, when the session will expire. The time is measured from the last Session create or the Session's last Interaction.
     *
     * @param int $ttl The time, in seconds, when the session will expire. The time is measured from the last Session create or the Session's last Interaction.
     * @return $this Fluent Builder
     */
    public function setTtl(int $ttl) : self
    {
        $this->options['ttl'] = $ttl;
        return $this;
    }
    /**
     * @param string $status
     * @return $this Fluent Builder
     */
    public function setStatus(string $status) : self
    {
        $this->options['status'] = $status;
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
        return '[Twilio.Proxy.V1.UpdateSessionOptions ' . $options . ']';
    }
}
