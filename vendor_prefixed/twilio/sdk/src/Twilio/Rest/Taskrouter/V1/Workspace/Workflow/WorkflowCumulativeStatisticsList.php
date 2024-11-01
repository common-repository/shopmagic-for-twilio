<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Taskrouter
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace ShopMagicTwilioVendor\Twilio\Rest\Taskrouter\V1\Workspace\Workflow;

use ShopMagicTwilioVendor\Twilio\ListResource;
use ShopMagicTwilioVendor\Twilio\Version;
class WorkflowCumulativeStatisticsList extends \ShopMagicTwilioVendor\Twilio\ListResource
{
    /**
     * Construct the WorkflowCumulativeStatisticsList
     *
     * @param Version $version Version that contains the resource
     * @param string $workspaceSid The SID of the Workspace with the resource to fetch.
     * @param string $workflowSid Returns the list of Tasks that are being controlled by the Workflow with the specified Sid value.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, string $workspaceSid, string $workflowSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['workspaceSid' => $workspaceSid, 'workflowSid' => $workflowSid];
    }
    /**
     * Constructs a WorkflowCumulativeStatisticsContext
     */
    public function getContext() : \ShopMagicTwilioVendor\Twilio\Rest\Taskrouter\V1\Workspace\Workflow\WorkflowCumulativeStatisticsContext
    {
        return new \ShopMagicTwilioVendor\Twilio\Rest\Taskrouter\V1\Workspace\Workflow\WorkflowCumulativeStatisticsContext($this->version, $this->solution['workspaceSid'], $this->solution['workflowSid']);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.Taskrouter.V1.WorkflowCumulativeStatisticsList]';
    }
}
