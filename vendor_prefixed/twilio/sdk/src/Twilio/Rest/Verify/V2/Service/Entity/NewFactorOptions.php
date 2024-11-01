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
namespace ShopMagicTwilioVendor\Twilio\Rest\Verify\V2\Service\Entity;

use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
abstract class NewFactorOptions
{
    /**
     * @param string $bindingAlg The algorithm used when `factor_type` is `push`. Algorithm supported: `ES256`
     * @param string $bindingPublicKey The Ecdsa public key in PKIX, ASN.1 DER format encoded in Base64.  Required when `factor_type` is `push`
     * @param string $configAppId The ID that uniquely identifies your app in the Google or Apple store, such as `com.example.myapp`. It can be up to 100 characters long.  Required when `factor_type` is `push`.
     * @param string $configNotificationPlatform
     * @param string $configNotificationToken For APN, the device token. For FCM, the registration token. It is used to send the push notifications. Must be between 32 and 255 characters long.  Required when `factor_type` is `push`.
     * @param string $configSdkVersion The Verify Push SDK version used to configure the factor  Required when `factor_type` is `push`
     * @param string $bindingSecret The shared secret for TOTP factors encoded in Base32. This can be provided when creating the Factor, otherwise it will be generated.  Used when `factor_type` is `totp`
     * @param int $configTimeStep Defines how often, in seconds, are TOTP codes generated. i.e, a new TOTP code is generated every time_step seconds. Must be between 20 and 60 seconds, inclusive. The default value is defined at the service level in the property `totp.time_step`. Defaults to 30 seconds if not configured.  Used when `factor_type` is `totp`
     * @param int $configSkew The number of time-steps, past and future, that are valid for validation of TOTP codes. Must be between 0 and 2, inclusive. The default value is defined at the service level in the property `totp.skew`. If not configured defaults to 1.  Used when `factor_type` is `totp`
     * @param int $configCodeLength Number of digits for generated TOTP codes. Must be between 3 and 8, inclusive. The default value is defined at the service level in the property `totp.code_length`. If not configured defaults to 6.  Used when `factor_type` is `totp`
     * @param string $configAlg
     * @param array $metadata Custom metadata associated with the factor. This is added by the Device/SDK directly to allow for the inclusion of device information. It must be a stringified JSON with only strings values eg. `{\\\"os\\\": \\\"Android\\\"}`. Can be up to 1024 characters in length.
     * @return CreateNewFactorOptions Options builder
     */
    public static function create(string $bindingAlg = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $bindingPublicKey = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $configAppId = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $configNotificationPlatform = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $configNotificationToken = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $configSdkVersion = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $bindingSecret = \ShopMagicTwilioVendor\Twilio\Values::NONE, int $configTimeStep = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, int $configSkew = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, int $configCodeLength = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, string $configAlg = \ShopMagicTwilioVendor\Twilio\Values::NONE, array $metadata = \ShopMagicTwilioVendor\Twilio\Values::ARRAY_NONE) : \ShopMagicTwilioVendor\Twilio\Rest\Verify\V2\Service\Entity\CreateNewFactorOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\Verify\V2\Service\Entity\CreateNewFactorOptions($bindingAlg, $bindingPublicKey, $configAppId, $configNotificationPlatform, $configNotificationToken, $configSdkVersion, $bindingSecret, $configTimeStep, $configSkew, $configCodeLength, $configAlg, $metadata);
    }
}
class CreateNewFactorOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $bindingAlg The algorithm used when `factor_type` is `push`. Algorithm supported: `ES256`
     * @param string $bindingPublicKey The Ecdsa public key in PKIX, ASN.1 DER format encoded in Base64.  Required when `factor_type` is `push`
     * @param string $configAppId The ID that uniquely identifies your app in the Google or Apple store, such as `com.example.myapp`. It can be up to 100 characters long.  Required when `factor_type` is `push`.
     * @param string $configNotificationPlatform
     * @param string $configNotificationToken For APN, the device token. For FCM, the registration token. It is used to send the push notifications. Must be between 32 and 255 characters long.  Required when `factor_type` is `push`.
     * @param string $configSdkVersion The Verify Push SDK version used to configure the factor  Required when `factor_type` is `push`
     * @param string $bindingSecret The shared secret for TOTP factors encoded in Base32. This can be provided when creating the Factor, otherwise it will be generated.  Used when `factor_type` is `totp`
     * @param int $configTimeStep Defines how often, in seconds, are TOTP codes generated. i.e, a new TOTP code is generated every time_step seconds. Must be between 20 and 60 seconds, inclusive. The default value is defined at the service level in the property `totp.time_step`. Defaults to 30 seconds if not configured.  Used when `factor_type` is `totp`
     * @param int $configSkew The number of time-steps, past and future, that are valid for validation of TOTP codes. Must be between 0 and 2, inclusive. The default value is defined at the service level in the property `totp.skew`. If not configured defaults to 1.  Used when `factor_type` is `totp`
     * @param int $configCodeLength Number of digits for generated TOTP codes. Must be between 3 and 8, inclusive. The default value is defined at the service level in the property `totp.code_length`. If not configured defaults to 6.  Used when `factor_type` is `totp`
     * @param string $configAlg
     * @param array $metadata Custom metadata associated with the factor. This is added by the Device/SDK directly to allow for the inclusion of device information. It must be a stringified JSON with only strings values eg. `{\\\"os\\\": \\\"Android\\\"}`. Can be up to 1024 characters in length.
     */
    public function __construct(string $bindingAlg = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $bindingPublicKey = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $configAppId = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $configNotificationPlatform = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $configNotificationToken = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $configSdkVersion = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $bindingSecret = \ShopMagicTwilioVendor\Twilio\Values::NONE, int $configTimeStep = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, int $configSkew = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, int $configCodeLength = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, string $configAlg = \ShopMagicTwilioVendor\Twilio\Values::NONE, array $metadata = \ShopMagicTwilioVendor\Twilio\Values::ARRAY_NONE)
    {
        $this->options['bindingAlg'] = $bindingAlg;
        $this->options['bindingPublicKey'] = $bindingPublicKey;
        $this->options['configAppId'] = $configAppId;
        $this->options['configNotificationPlatform'] = $configNotificationPlatform;
        $this->options['configNotificationToken'] = $configNotificationToken;
        $this->options['configSdkVersion'] = $configSdkVersion;
        $this->options['bindingSecret'] = $bindingSecret;
        $this->options['configTimeStep'] = $configTimeStep;
        $this->options['configSkew'] = $configSkew;
        $this->options['configCodeLength'] = $configCodeLength;
        $this->options['configAlg'] = $configAlg;
        $this->options['metadata'] = $metadata;
    }
    /**
     * The algorithm used when `factor_type` is `push`. Algorithm supported: `ES256`
     *
     * @param string $bindingAlg The algorithm used when `factor_type` is `push`. Algorithm supported: `ES256`
     * @return $this Fluent Builder
     */
    public function setBindingAlg(string $bindingAlg) : self
    {
        $this->options['bindingAlg'] = $bindingAlg;
        return $this;
    }
    /**
     * The Ecdsa public key in PKIX, ASN.1 DER format encoded in Base64.  Required when `factor_type` is `push`
     *
     * @param string $bindingPublicKey The Ecdsa public key in PKIX, ASN.1 DER format encoded in Base64.  Required when `factor_type` is `push`
     * @return $this Fluent Builder
     */
    public function setBindingPublicKey(string $bindingPublicKey) : self
    {
        $this->options['bindingPublicKey'] = $bindingPublicKey;
        return $this;
    }
    /**
     * The ID that uniquely identifies your app in the Google or Apple store, such as `com.example.myapp`. It can be up to 100 characters long.  Required when `factor_type` is `push`.
     *
     * @param string $configAppId The ID that uniquely identifies your app in the Google or Apple store, such as `com.example.myapp`. It can be up to 100 characters long.  Required when `factor_type` is `push`.
     * @return $this Fluent Builder
     */
    public function setConfigAppId(string $configAppId) : self
    {
        $this->options['configAppId'] = $configAppId;
        return $this;
    }
    /**
     * @param string $configNotificationPlatform
     * @return $this Fluent Builder
     */
    public function setConfigNotificationPlatform(string $configNotificationPlatform) : self
    {
        $this->options['configNotificationPlatform'] = $configNotificationPlatform;
        return $this;
    }
    /**
     * For APN, the device token. For FCM, the registration token. It is used to send the push notifications. Must be between 32 and 255 characters long.  Required when `factor_type` is `push`.
     *
     * @param string $configNotificationToken For APN, the device token. For FCM, the registration token. It is used to send the push notifications. Must be between 32 and 255 characters long.  Required when `factor_type` is `push`.
     * @return $this Fluent Builder
     */
    public function setConfigNotificationToken(string $configNotificationToken) : self
    {
        $this->options['configNotificationToken'] = $configNotificationToken;
        return $this;
    }
    /**
     * The Verify Push SDK version used to configure the factor  Required when `factor_type` is `push`
     *
     * @param string $configSdkVersion The Verify Push SDK version used to configure the factor  Required when `factor_type` is `push`
     * @return $this Fluent Builder
     */
    public function setConfigSdkVersion(string $configSdkVersion) : self
    {
        $this->options['configSdkVersion'] = $configSdkVersion;
        return $this;
    }
    /**
     * The shared secret for TOTP factors encoded in Base32. This can be provided when creating the Factor, otherwise it will be generated.  Used when `factor_type` is `totp`
     *
     * @param string $bindingSecret The shared secret for TOTP factors encoded in Base32. This can be provided when creating the Factor, otherwise it will be generated.  Used when `factor_type` is `totp`
     * @return $this Fluent Builder
     */
    public function setBindingSecret(string $bindingSecret) : self
    {
        $this->options['bindingSecret'] = $bindingSecret;
        return $this;
    }
    /**
     * Defines how often, in seconds, are TOTP codes generated. i.e, a new TOTP code is generated every time_step seconds. Must be between 20 and 60 seconds, inclusive. The default value is defined at the service level in the property `totp.time_step`. Defaults to 30 seconds if not configured.  Used when `factor_type` is `totp`
     *
     * @param int $configTimeStep Defines how often, in seconds, are TOTP codes generated. i.e, a new TOTP code is generated every time_step seconds. Must be between 20 and 60 seconds, inclusive. The default value is defined at the service level in the property `totp.time_step`. Defaults to 30 seconds if not configured.  Used when `factor_type` is `totp`
     * @return $this Fluent Builder
     */
    public function setConfigTimeStep(int $configTimeStep) : self
    {
        $this->options['configTimeStep'] = $configTimeStep;
        return $this;
    }
    /**
     * The number of time-steps, past and future, that are valid for validation of TOTP codes. Must be between 0 and 2, inclusive. The default value is defined at the service level in the property `totp.skew`. If not configured defaults to 1.  Used when `factor_type` is `totp`
     *
     * @param int $configSkew The number of time-steps, past and future, that are valid for validation of TOTP codes. Must be between 0 and 2, inclusive. The default value is defined at the service level in the property `totp.skew`. If not configured defaults to 1.  Used when `factor_type` is `totp`
     * @return $this Fluent Builder
     */
    public function setConfigSkew(int $configSkew) : self
    {
        $this->options['configSkew'] = $configSkew;
        return $this;
    }
    /**
     * Number of digits for generated TOTP codes. Must be between 3 and 8, inclusive. The default value is defined at the service level in the property `totp.code_length`. If not configured defaults to 6.  Used when `factor_type` is `totp`
     *
     * @param int $configCodeLength Number of digits for generated TOTP codes. Must be between 3 and 8, inclusive. The default value is defined at the service level in the property `totp.code_length`. If not configured defaults to 6.  Used when `factor_type` is `totp`
     * @return $this Fluent Builder
     */
    public function setConfigCodeLength(int $configCodeLength) : self
    {
        $this->options['configCodeLength'] = $configCodeLength;
        return $this;
    }
    /**
     * @param string $configAlg
     * @return $this Fluent Builder
     */
    public function setConfigAlg(string $configAlg) : self
    {
        $this->options['configAlg'] = $configAlg;
        return $this;
    }
    /**
     * Custom metadata associated with the factor. This is added by the Device/SDK directly to allow for the inclusion of device information. It must be a stringified JSON with only strings values eg. `{\\\"os\\\": \\\"Android\\\"}`. Can be up to 1024 characters in length.
     *
     * @param array $metadata Custom metadata associated with the factor. This is added by the Device/SDK directly to allow for the inclusion of device information. It must be a stringified JSON with only strings values eg. `{\\\"os\\\": \\\"Android\\\"}`. Can be up to 1024 characters in length.
     * @return $this Fluent Builder
     */
    public function setMetadata(array $metadata) : self
    {
        $this->options['metadata'] = $metadata;
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
        return '[Twilio.Verify.V2.CreateNewFactorOptions ' . $options . ']';
    }
}
