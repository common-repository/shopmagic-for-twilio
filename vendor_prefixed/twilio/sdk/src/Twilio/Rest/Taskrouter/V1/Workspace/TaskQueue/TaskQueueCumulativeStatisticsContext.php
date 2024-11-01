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
namespace ShopMagicTwilioVendor\Twilio\Rest\Taskrouter\V1\Workspace\TaskQueue;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
use ShopMagicTwilioVendor\Twilio\Serialize;
class TaskQueueCumulativeStatisticsContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    /**
     * Initialize the TaskQueueCumulativeStatisticsContext
     *
     * @param Version $version Version that contains the resource
     * @param string $workspaceSid The SID of the Workspace with the TaskQueue to fetch.
     * @param string $taskQueueSid The SID of the TaskQueue for which to fetch statistics.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $workspaceSid, $taskQueueSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['workspaceSid' => $workspaceSid, 'taskQueueSid' => $taskQueueSid];
        $this->uri = '/Workspaces/' . \rawurlencode($workspaceSid) . '/TaskQueues/' . \rawurlencode($taskQueueSid) . '/CumulativeStatistics';
    }
    /**
     * Fetch the TaskQueueCumulativeStatisticsInstance
     *
     * @param array|Options $options Optional Arguments
     * @return TaskQueueCumulativeStatisticsInstance Fetched TaskQueueCumulativeStatisticsInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Taskrouter\V1\Workspace\TaskQueue\TaskQueueCumulativeStatisticsInstance
    {
        $options = new \ShopMagicTwilioVendor\Twilio\Values($options);
        $params = \ShopMagicTwilioVendor\Twilio\Values::of(['EndDate' => \ShopMagicTwilioVendor\Twilio\Serialize::iso8601DateTime($options['endDate']), 'Minutes' => $options['minutes'], 'StartDate' => \ShopMagicTwilioVendor\Twilio\Serialize::iso8601DateTime($options['startDate']), 'TaskChannel' => $options['taskChannel'], 'SplitByWaitTime' => $options['splitByWaitTime']]);
        $payload = $this->version->fetch('GET', $this->uri, $params);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Taskrouter\V1\Workspace\TaskQueue\TaskQueueCumulativeStatisticsInstance($this->version, $payload, $this->solution['workspaceSid'], $this->solution['taskQueueSid']);
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
        return '[Twilio.Taskrouter.V1.TaskQueueCumulativeStatisticsContext ' . \implode(' ', $context) . ']';
    }
}
