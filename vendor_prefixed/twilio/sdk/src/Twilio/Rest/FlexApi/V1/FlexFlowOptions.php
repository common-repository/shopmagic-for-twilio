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
abstract class FlexFlowOptions
{
    /**
     * @param string $contactIdentity The channel contact's Identity.
     * @param bool $enabled Whether the new Flex Flow is enabled.
     * @param string $integrationType
     * @param string $integrationFlowSid The SID of the Studio Flow. Required when `integrationType` is `studio`.
     * @param string $integrationUrl The URL of the external webhook. Required when `integrationType` is `external`.
     * @param string $integrationWorkspaceSid The Workspace SID for a new Task. Required when `integrationType` is `task`.
     * @param string $integrationWorkflowSid The Workflow SID for a new Task. Required when `integrationType` is `task`.
     * @param string $integrationChannel The Task Channel SID (TCXXXX) or unique name (e.g., `sms`) to use for the Task that will be created. Applicable and required when `integrationType` is `task`. The default value is `default`.
     * @param int $integrationTimeout The Task timeout in seconds for a new Task. Default is 86,400 seconds (24 hours). Optional when `integrationType` is `task`, not applicable otherwise.
     * @param int $integrationPriority The Task priority of a new Task. The default priority is 0. Optional when `integrationType` is `task`, not applicable otherwise.
     * @param bool $integrationCreationOnMessage In the context of outbound messaging, defines whether to create a Task immediately (and therefore reserve the conversation to current agent), or delay Task creation until the customer sends the first response. Set to false to create immediately, true to delay Task creation. This setting is only applicable for outbound messaging.
     * @param bool $longLived When enabled, Flex will keep the chat channel active so that it may be used for subsequent interactions with a contact identity. Defaults to `false`.
     * @param bool $janitorEnabled When enabled, the Messaging Channel Janitor will remove active Proxy sessions if the associated Task is deleted outside of the Flex UI. Defaults to `false`.
     * @param int $integrationRetryCount The number of times to retry the Studio Flow or webhook in case of failure. Takes integer values from 0 to 3 with the default being 3. Optional when `integrationType` is `studio` or `external`, not applicable otherwise.
     * @return CreateFlexFlowOptions Options builder
     */
    public static function create(string $contactIdentity = \ShopMagicTwilioVendor\Twilio\Values::NONE, bool $enabled = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, string $integrationType = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationFlowSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationUrl = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationWorkspaceSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationWorkflowSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationChannel = \ShopMagicTwilioVendor\Twilio\Values::NONE, int $integrationTimeout = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, int $integrationPriority = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, bool $integrationCreationOnMessage = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, bool $longLived = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, bool $janitorEnabled = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, int $integrationRetryCount = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE) : \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\CreateFlexFlowOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\CreateFlexFlowOptions($contactIdentity, $enabled, $integrationType, $integrationFlowSid, $integrationUrl, $integrationWorkspaceSid, $integrationWorkflowSid, $integrationChannel, $integrationTimeout, $integrationPriority, $integrationCreationOnMessage, $longLived, $janitorEnabled, $integrationRetryCount);
    }
    /**
     * @param string $friendlyName The `friendly_name` of the Flex Flow resources to read.
     * @return ReadFlexFlowOptions Options builder
     */
    public static function read(string $friendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE) : \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\ReadFlexFlowOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\ReadFlexFlowOptions($friendlyName);
    }
    /**
     * @param string $friendlyName A descriptive string that you create to describe the Flex Flow resource.
     * @param string $chatServiceSid The SID of the chat service.
     * @param string $channelType
     * @param string $contactIdentity The channel contact's Identity.
     * @param bool $enabled Whether the new Flex Flow is enabled.
     * @param string $integrationType
     * @param string $integrationFlowSid The SID of the Studio Flow. Required when `integrationType` is `studio`.
     * @param string $integrationUrl The URL of the external webhook. Required when `integrationType` is `external`.
     * @param string $integrationWorkspaceSid The Workspace SID for a new Task. Required when `integrationType` is `task`.
     * @param string $integrationWorkflowSid The Workflow SID for a new Task. Required when `integrationType` is `task`.
     * @param string $integrationChannel The Task Channel SID (TCXXXX) or unique name (e.g., `sms`) to use for the Task that will be created. Applicable and required when `integrationType` is `task`. The default value is `default`.
     * @param int $integrationTimeout The Task timeout in seconds for a new Task. Default is 86,400 seconds (24 hours). Optional when `integrationType` is `task`, not applicable otherwise.
     * @param int $integrationPriority The Task priority of a new Task. The default priority is 0. Optional when `integrationType` is `task`, not applicable otherwise.
     * @param bool $integrationCreationOnMessage In the context of outbound messaging, defines whether to create a Task immediately (and therefore reserve the conversation to current agent), or delay Task creation until the customer sends the first response. Set to false to create immediately, true to delay Task creation. This setting is only applicable for outbound messaging.
     * @param bool $longLived When enabled, Flex will keep the chat channel active so that it may be used for subsequent interactions with a contact identity. Defaults to `false`.
     * @param bool $janitorEnabled When enabled, the Messaging Channel Janitor will remove active Proxy sessions if the associated Task is deleted outside of the Flex UI. Defaults to `false`.
     * @param int $integrationRetryCount The number of times to retry the Studio Flow or webhook in case of failure. Takes integer values from 0 to 3 with the default being 3. Optional when `integrationType` is `studio` or `external`, not applicable otherwise.
     * @return UpdateFlexFlowOptions Options builder
     */
    public static function update(string $friendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $chatServiceSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $channelType = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $contactIdentity = \ShopMagicTwilioVendor\Twilio\Values::NONE, bool $enabled = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, string $integrationType = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationFlowSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationUrl = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationWorkspaceSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationWorkflowSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationChannel = \ShopMagicTwilioVendor\Twilio\Values::NONE, int $integrationTimeout = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, int $integrationPriority = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, bool $integrationCreationOnMessage = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, bool $longLived = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, bool $janitorEnabled = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, int $integrationRetryCount = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE) : \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\UpdateFlexFlowOptions
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\FlexApi\V1\UpdateFlexFlowOptions($friendlyName, $chatServiceSid, $channelType, $contactIdentity, $enabled, $integrationType, $integrationFlowSid, $integrationUrl, $integrationWorkspaceSid, $integrationWorkflowSid, $integrationChannel, $integrationTimeout, $integrationPriority, $integrationCreationOnMessage, $longLived, $janitorEnabled, $integrationRetryCount);
    }
}
class CreateFlexFlowOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $contactIdentity The channel contact's Identity.
     * @param bool $enabled Whether the new Flex Flow is enabled.
     * @param string $integrationType
     * @param string $integrationFlowSid The SID of the Studio Flow. Required when `integrationType` is `studio`.
     * @param string $integrationUrl The URL of the external webhook. Required when `integrationType` is `external`.
     * @param string $integrationWorkspaceSid The Workspace SID for a new Task. Required when `integrationType` is `task`.
     * @param string $integrationWorkflowSid The Workflow SID for a new Task. Required when `integrationType` is `task`.
     * @param string $integrationChannel The Task Channel SID (TCXXXX) or unique name (e.g., `sms`) to use for the Task that will be created. Applicable and required when `integrationType` is `task`. The default value is `default`.
     * @param int $integrationTimeout The Task timeout in seconds for a new Task. Default is 86,400 seconds (24 hours). Optional when `integrationType` is `task`, not applicable otherwise.
     * @param int $integrationPriority The Task priority of a new Task. The default priority is 0. Optional when `integrationType` is `task`, not applicable otherwise.
     * @param bool $integrationCreationOnMessage In the context of outbound messaging, defines whether to create a Task immediately (and therefore reserve the conversation to current agent), or delay Task creation until the customer sends the first response. Set to false to create immediately, true to delay Task creation. This setting is only applicable for outbound messaging.
     * @param bool $longLived When enabled, Flex will keep the chat channel active so that it may be used for subsequent interactions with a contact identity. Defaults to `false`.
     * @param bool $janitorEnabled When enabled, the Messaging Channel Janitor will remove active Proxy sessions if the associated Task is deleted outside of the Flex UI. Defaults to `false`.
     * @param int $integrationRetryCount The number of times to retry the Studio Flow or webhook in case of failure. Takes integer values from 0 to 3 with the default being 3. Optional when `integrationType` is `studio` or `external`, not applicable otherwise.
     */
    public function __construct(string $contactIdentity = \ShopMagicTwilioVendor\Twilio\Values::NONE, bool $enabled = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, string $integrationType = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationFlowSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationUrl = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationWorkspaceSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationWorkflowSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationChannel = \ShopMagicTwilioVendor\Twilio\Values::NONE, int $integrationTimeout = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, int $integrationPriority = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, bool $integrationCreationOnMessage = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, bool $longLived = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, bool $janitorEnabled = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, int $integrationRetryCount = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE)
    {
        $this->options['contactIdentity'] = $contactIdentity;
        $this->options['enabled'] = $enabled;
        $this->options['integrationType'] = $integrationType;
        $this->options['integrationFlowSid'] = $integrationFlowSid;
        $this->options['integrationUrl'] = $integrationUrl;
        $this->options['integrationWorkspaceSid'] = $integrationWorkspaceSid;
        $this->options['integrationWorkflowSid'] = $integrationWorkflowSid;
        $this->options['integrationChannel'] = $integrationChannel;
        $this->options['integrationTimeout'] = $integrationTimeout;
        $this->options['integrationPriority'] = $integrationPriority;
        $this->options['integrationCreationOnMessage'] = $integrationCreationOnMessage;
        $this->options['longLived'] = $longLived;
        $this->options['janitorEnabled'] = $janitorEnabled;
        $this->options['integrationRetryCount'] = $integrationRetryCount;
    }
    /**
     * The channel contact's Identity.
     *
     * @param string $contactIdentity The channel contact's Identity.
     * @return $this Fluent Builder
     */
    public function setContactIdentity(string $contactIdentity) : self
    {
        $this->options['contactIdentity'] = $contactIdentity;
        return $this;
    }
    /**
     * Whether the new Flex Flow is enabled.
     *
     * @param bool $enabled Whether the new Flex Flow is enabled.
     * @return $this Fluent Builder
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->options['enabled'] = $enabled;
        return $this;
    }
    /**
     * @param string $integrationType
     * @return $this Fluent Builder
     */
    public function setIntegrationType(string $integrationType) : self
    {
        $this->options['integrationType'] = $integrationType;
        return $this;
    }
    /**
     * The SID of the Studio Flow. Required when `integrationType` is `studio`.
     *
     * @param string $integrationFlowSid The SID of the Studio Flow. Required when `integrationType` is `studio`.
     * @return $this Fluent Builder
     */
    public function setIntegrationFlowSid(string $integrationFlowSid) : self
    {
        $this->options['integrationFlowSid'] = $integrationFlowSid;
        return $this;
    }
    /**
     * The URL of the external webhook. Required when `integrationType` is `external`.
     *
     * @param string $integrationUrl The URL of the external webhook. Required when `integrationType` is `external`.
     * @return $this Fluent Builder
     */
    public function setIntegrationUrl(string $integrationUrl) : self
    {
        $this->options['integrationUrl'] = $integrationUrl;
        return $this;
    }
    /**
     * The Workspace SID for a new Task. Required when `integrationType` is `task`.
     *
     * @param string $integrationWorkspaceSid The Workspace SID for a new Task. Required when `integrationType` is `task`.
     * @return $this Fluent Builder
     */
    public function setIntegrationWorkspaceSid(string $integrationWorkspaceSid) : self
    {
        $this->options['integrationWorkspaceSid'] = $integrationWorkspaceSid;
        return $this;
    }
    /**
     * The Workflow SID for a new Task. Required when `integrationType` is `task`.
     *
     * @param string $integrationWorkflowSid The Workflow SID for a new Task. Required when `integrationType` is `task`.
     * @return $this Fluent Builder
     */
    public function setIntegrationWorkflowSid(string $integrationWorkflowSid) : self
    {
        $this->options['integrationWorkflowSid'] = $integrationWorkflowSid;
        return $this;
    }
    /**
     * The Task Channel SID (TCXXXX) or unique name (e.g., `sms`) to use for the Task that will be created. Applicable and required when `integrationType` is `task`. The default value is `default`.
     *
     * @param string $integrationChannel The Task Channel SID (TCXXXX) or unique name (e.g., `sms`) to use for the Task that will be created. Applicable and required when `integrationType` is `task`. The default value is `default`.
     * @return $this Fluent Builder
     */
    public function setIntegrationChannel(string $integrationChannel) : self
    {
        $this->options['integrationChannel'] = $integrationChannel;
        return $this;
    }
    /**
     * The Task timeout in seconds for a new Task. Default is 86,400 seconds (24 hours). Optional when `integrationType` is `task`, not applicable otherwise.
     *
     * @param int $integrationTimeout The Task timeout in seconds for a new Task. Default is 86,400 seconds (24 hours). Optional when `integrationType` is `task`, not applicable otherwise.
     * @return $this Fluent Builder
     */
    public function setIntegrationTimeout(int $integrationTimeout) : self
    {
        $this->options['integrationTimeout'] = $integrationTimeout;
        return $this;
    }
    /**
     * The Task priority of a new Task. The default priority is 0. Optional when `integrationType` is `task`, not applicable otherwise.
     *
     * @param int $integrationPriority The Task priority of a new Task. The default priority is 0. Optional when `integrationType` is `task`, not applicable otherwise.
     * @return $this Fluent Builder
     */
    public function setIntegrationPriority(int $integrationPriority) : self
    {
        $this->options['integrationPriority'] = $integrationPriority;
        return $this;
    }
    /**
     * In the context of outbound messaging, defines whether to create a Task immediately (and therefore reserve the conversation to current agent), or delay Task creation until the customer sends the first response. Set to false to create immediately, true to delay Task creation. This setting is only applicable for outbound messaging.
     *
     * @param bool $integrationCreationOnMessage In the context of outbound messaging, defines whether to create a Task immediately (and therefore reserve the conversation to current agent), or delay Task creation until the customer sends the first response. Set to false to create immediately, true to delay Task creation. This setting is only applicable for outbound messaging.
     * @return $this Fluent Builder
     */
    public function setIntegrationCreationOnMessage(bool $integrationCreationOnMessage) : self
    {
        $this->options['integrationCreationOnMessage'] = $integrationCreationOnMessage;
        return $this;
    }
    /**
     * When enabled, Flex will keep the chat channel active so that it may be used for subsequent interactions with a contact identity. Defaults to `false`.
     *
     * @param bool $longLived When enabled, Flex will keep the chat channel active so that it may be used for subsequent interactions with a contact identity. Defaults to `false`.
     * @return $this Fluent Builder
     */
    public function setLongLived(bool $longLived) : self
    {
        $this->options['longLived'] = $longLived;
        return $this;
    }
    /**
     * When enabled, the Messaging Channel Janitor will remove active Proxy sessions if the associated Task is deleted outside of the Flex UI. Defaults to `false`.
     *
     * @param bool $janitorEnabled When enabled, the Messaging Channel Janitor will remove active Proxy sessions if the associated Task is deleted outside of the Flex UI. Defaults to `false`.
     * @return $this Fluent Builder
     */
    public function setJanitorEnabled(bool $janitorEnabled) : self
    {
        $this->options['janitorEnabled'] = $janitorEnabled;
        return $this;
    }
    /**
     * The number of times to retry the Studio Flow or webhook in case of failure. Takes integer values from 0 to 3 with the default being 3. Optional when `integrationType` is `studio` or `external`, not applicable otherwise.
     *
     * @param int $integrationRetryCount The number of times to retry the Studio Flow or webhook in case of failure. Takes integer values from 0 to 3 with the default being 3. Optional when `integrationType` is `studio` or `external`, not applicable otherwise.
     * @return $this Fluent Builder
     */
    public function setIntegrationRetryCount(int $integrationRetryCount) : self
    {
        $this->options['integrationRetryCount'] = $integrationRetryCount;
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
        return '[Twilio.FlexApi.V1.CreateFlexFlowOptions ' . $options . ']';
    }
}
class ReadFlexFlowOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $friendlyName The `friendly_name` of the Flex Flow resources to read.
     */
    public function __construct(string $friendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE)
    {
        $this->options['friendlyName'] = $friendlyName;
    }
    /**
     * The `friendly_name` of the Flex Flow resources to read.
     *
     * @param string $friendlyName The `friendly_name` of the Flex Flow resources to read.
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
        return '[Twilio.FlexApi.V1.ReadFlexFlowOptions ' . $options . ']';
    }
}
class UpdateFlexFlowOptions extends \ShopMagicTwilioVendor\Twilio\Options
{
    /**
     * @param string $friendlyName A descriptive string that you create to describe the Flex Flow resource.
     * @param string $chatServiceSid The SID of the chat service.
     * @param string $channelType
     * @param string $contactIdentity The channel contact's Identity.
     * @param bool $enabled Whether the new Flex Flow is enabled.
     * @param string $integrationType
     * @param string $integrationFlowSid The SID of the Studio Flow. Required when `integrationType` is `studio`.
     * @param string $integrationUrl The URL of the external webhook. Required when `integrationType` is `external`.
     * @param string $integrationWorkspaceSid The Workspace SID for a new Task. Required when `integrationType` is `task`.
     * @param string $integrationWorkflowSid The Workflow SID for a new Task. Required when `integrationType` is `task`.
     * @param string $integrationChannel The Task Channel SID (TCXXXX) or unique name (e.g., `sms`) to use for the Task that will be created. Applicable and required when `integrationType` is `task`. The default value is `default`.
     * @param int $integrationTimeout The Task timeout in seconds for a new Task. Default is 86,400 seconds (24 hours). Optional when `integrationType` is `task`, not applicable otherwise.
     * @param int $integrationPriority The Task priority of a new Task. The default priority is 0. Optional when `integrationType` is `task`, not applicable otherwise.
     * @param bool $integrationCreationOnMessage In the context of outbound messaging, defines whether to create a Task immediately (and therefore reserve the conversation to current agent), or delay Task creation until the customer sends the first response. Set to false to create immediately, true to delay Task creation. This setting is only applicable for outbound messaging.
     * @param bool $longLived When enabled, Flex will keep the chat channel active so that it may be used for subsequent interactions with a contact identity. Defaults to `false`.
     * @param bool $janitorEnabled When enabled, the Messaging Channel Janitor will remove active Proxy sessions if the associated Task is deleted outside of the Flex UI. Defaults to `false`.
     * @param int $integrationRetryCount The number of times to retry the Studio Flow or webhook in case of failure. Takes integer values from 0 to 3 with the default being 3. Optional when `integrationType` is `studio` or `external`, not applicable otherwise.
     */
    public function __construct(string $friendlyName = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $chatServiceSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $channelType = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $contactIdentity = \ShopMagicTwilioVendor\Twilio\Values::NONE, bool $enabled = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, string $integrationType = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationFlowSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationUrl = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationWorkspaceSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationWorkflowSid = \ShopMagicTwilioVendor\Twilio\Values::NONE, string $integrationChannel = \ShopMagicTwilioVendor\Twilio\Values::NONE, int $integrationTimeout = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, int $integrationPriority = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE, bool $integrationCreationOnMessage = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, bool $longLived = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, bool $janitorEnabled = \ShopMagicTwilioVendor\Twilio\Values::BOOL_NONE, int $integrationRetryCount = \ShopMagicTwilioVendor\Twilio\Values::INT_NONE)
    {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['chatServiceSid'] = $chatServiceSid;
        $this->options['channelType'] = $channelType;
        $this->options['contactIdentity'] = $contactIdentity;
        $this->options['enabled'] = $enabled;
        $this->options['integrationType'] = $integrationType;
        $this->options['integrationFlowSid'] = $integrationFlowSid;
        $this->options['integrationUrl'] = $integrationUrl;
        $this->options['integrationWorkspaceSid'] = $integrationWorkspaceSid;
        $this->options['integrationWorkflowSid'] = $integrationWorkflowSid;
        $this->options['integrationChannel'] = $integrationChannel;
        $this->options['integrationTimeout'] = $integrationTimeout;
        $this->options['integrationPriority'] = $integrationPriority;
        $this->options['integrationCreationOnMessage'] = $integrationCreationOnMessage;
        $this->options['longLived'] = $longLived;
        $this->options['janitorEnabled'] = $janitorEnabled;
        $this->options['integrationRetryCount'] = $integrationRetryCount;
    }
    /**
     * A descriptive string that you create to describe the Flex Flow resource.
     *
     * @param string $friendlyName A descriptive string that you create to describe the Flex Flow resource.
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName) : self
    {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }
    /**
     * The SID of the chat service.
     *
     * @param string $chatServiceSid The SID of the chat service.
     * @return $this Fluent Builder
     */
    public function setChatServiceSid(string $chatServiceSid) : self
    {
        $this->options['chatServiceSid'] = $chatServiceSid;
        return $this;
    }
    /**
     * @param string $channelType
     * @return $this Fluent Builder
     */
    public function setChannelType(string $channelType) : self
    {
        $this->options['channelType'] = $channelType;
        return $this;
    }
    /**
     * The channel contact's Identity.
     *
     * @param string $contactIdentity The channel contact's Identity.
     * @return $this Fluent Builder
     */
    public function setContactIdentity(string $contactIdentity) : self
    {
        $this->options['contactIdentity'] = $contactIdentity;
        return $this;
    }
    /**
     * Whether the new Flex Flow is enabled.
     *
     * @param bool $enabled Whether the new Flex Flow is enabled.
     * @return $this Fluent Builder
     */
    public function setEnabled(bool $enabled) : self
    {
        $this->options['enabled'] = $enabled;
        return $this;
    }
    /**
     * @param string $integrationType
     * @return $this Fluent Builder
     */
    public function setIntegrationType(string $integrationType) : self
    {
        $this->options['integrationType'] = $integrationType;
        return $this;
    }
    /**
     * The SID of the Studio Flow. Required when `integrationType` is `studio`.
     *
     * @param string $integrationFlowSid The SID of the Studio Flow. Required when `integrationType` is `studio`.
     * @return $this Fluent Builder
     */
    public function setIntegrationFlowSid(string $integrationFlowSid) : self
    {
        $this->options['integrationFlowSid'] = $integrationFlowSid;
        return $this;
    }
    /**
     * The URL of the external webhook. Required when `integrationType` is `external`.
     *
     * @param string $integrationUrl The URL of the external webhook. Required when `integrationType` is `external`.
     * @return $this Fluent Builder
     */
    public function setIntegrationUrl(string $integrationUrl) : self
    {
        $this->options['integrationUrl'] = $integrationUrl;
        return $this;
    }
    /**
     * The Workspace SID for a new Task. Required when `integrationType` is `task`.
     *
     * @param string $integrationWorkspaceSid The Workspace SID for a new Task. Required when `integrationType` is `task`.
     * @return $this Fluent Builder
     */
    public function setIntegrationWorkspaceSid(string $integrationWorkspaceSid) : self
    {
        $this->options['integrationWorkspaceSid'] = $integrationWorkspaceSid;
        return $this;
    }
    /**
     * The Workflow SID for a new Task. Required when `integrationType` is `task`.
     *
     * @param string $integrationWorkflowSid The Workflow SID for a new Task. Required when `integrationType` is `task`.
     * @return $this Fluent Builder
     */
    public function setIntegrationWorkflowSid(string $integrationWorkflowSid) : self
    {
        $this->options['integrationWorkflowSid'] = $integrationWorkflowSid;
        return $this;
    }
    /**
     * The Task Channel SID (TCXXXX) or unique name (e.g., `sms`) to use for the Task that will be created. Applicable and required when `integrationType` is `task`. The default value is `default`.
     *
     * @param string $integrationChannel The Task Channel SID (TCXXXX) or unique name (e.g., `sms`) to use for the Task that will be created. Applicable and required when `integrationType` is `task`. The default value is `default`.
     * @return $this Fluent Builder
     */
    public function setIntegrationChannel(string $integrationChannel) : self
    {
        $this->options['integrationChannel'] = $integrationChannel;
        return $this;
    }
    /**
     * The Task timeout in seconds for a new Task. Default is 86,400 seconds (24 hours). Optional when `integrationType` is `task`, not applicable otherwise.
     *
     * @param int $integrationTimeout The Task timeout in seconds for a new Task. Default is 86,400 seconds (24 hours). Optional when `integrationType` is `task`, not applicable otherwise.
     * @return $this Fluent Builder
     */
    public function setIntegrationTimeout(int $integrationTimeout) : self
    {
        $this->options['integrationTimeout'] = $integrationTimeout;
        return $this;
    }
    /**
     * The Task priority of a new Task. The default priority is 0. Optional when `integrationType` is `task`, not applicable otherwise.
     *
     * @param int $integrationPriority The Task priority of a new Task. The default priority is 0. Optional when `integrationType` is `task`, not applicable otherwise.
     * @return $this Fluent Builder
     */
    public function setIntegrationPriority(int $integrationPriority) : self
    {
        $this->options['integrationPriority'] = $integrationPriority;
        return $this;
    }
    /**
     * In the context of outbound messaging, defines whether to create a Task immediately (and therefore reserve the conversation to current agent), or delay Task creation until the customer sends the first response. Set to false to create immediately, true to delay Task creation. This setting is only applicable for outbound messaging.
     *
     * @param bool $integrationCreationOnMessage In the context of outbound messaging, defines whether to create a Task immediately (and therefore reserve the conversation to current agent), or delay Task creation until the customer sends the first response. Set to false to create immediately, true to delay Task creation. This setting is only applicable for outbound messaging.
     * @return $this Fluent Builder
     */
    public function setIntegrationCreationOnMessage(bool $integrationCreationOnMessage) : self
    {
        $this->options['integrationCreationOnMessage'] = $integrationCreationOnMessage;
        return $this;
    }
    /**
     * When enabled, Flex will keep the chat channel active so that it may be used for subsequent interactions with a contact identity. Defaults to `false`.
     *
     * @param bool $longLived When enabled, Flex will keep the chat channel active so that it may be used for subsequent interactions with a contact identity. Defaults to `false`.
     * @return $this Fluent Builder
     */
    public function setLongLived(bool $longLived) : self
    {
        $this->options['longLived'] = $longLived;
        return $this;
    }
    /**
     * When enabled, the Messaging Channel Janitor will remove active Proxy sessions if the associated Task is deleted outside of the Flex UI. Defaults to `false`.
     *
     * @param bool $janitorEnabled When enabled, the Messaging Channel Janitor will remove active Proxy sessions if the associated Task is deleted outside of the Flex UI. Defaults to `false`.
     * @return $this Fluent Builder
     */
    public function setJanitorEnabled(bool $janitorEnabled) : self
    {
        $this->options['janitorEnabled'] = $janitorEnabled;
        return $this;
    }
    /**
     * The number of times to retry the Studio Flow or webhook in case of failure. Takes integer values from 0 to 3 with the default being 3. Optional when `integrationType` is `studio` or `external`, not applicable otherwise.
     *
     * @param int $integrationRetryCount The number of times to retry the Studio Flow or webhook in case of failure. Takes integer values from 0 to 3 with the default being 3. Optional when `integrationType` is `studio` or `external`, not applicable otherwise.
     * @return $this Fluent Builder
     */
    public function setIntegrationRetryCount(int $integrationRetryCount) : self
    {
        $this->options['integrationRetryCount'] = $integrationRetryCount;
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
        return '[Twilio.FlexApi.V1.UpdateFlexFlowOptions ' . $options . ']';
    }
}
