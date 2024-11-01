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
namespace ShopMagicTwilioVendor\Twilio\Rest\Taskrouter\V1\Workspace\Worker;

use ShopMagicTwilioVendor\Twilio\Exceptions\TwilioException;
use ShopMagicTwilioVendor\Twilio\Options;
use ShopMagicTwilioVendor\Twilio\Values;
use ShopMagicTwilioVendor\Twilio\Version;
use ShopMagicTwilioVendor\Twilio\InstanceContext;
use ShopMagicTwilioVendor\Twilio\Serialize;
class ReservationContext extends \ShopMagicTwilioVendor\Twilio\InstanceContext
{
    /**
     * Initialize the ReservationContext
     *
     * @param Version $version Version that contains the resource
     * @param string $workspaceSid The SID of the Workspace with the WorkerReservation resource to fetch.
     * @param string $workerSid The SID of the reserved Worker resource with the WorkerReservation resource to fetch.
     * @param string $sid The SID of the WorkerReservation resource to fetch.
     */
    public function __construct(\ShopMagicTwilioVendor\Twilio\Version $version, $workspaceSid, $workerSid, $sid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['workspaceSid' => $workspaceSid, 'workerSid' => $workerSid, 'sid' => $sid];
        $this->uri = '/Workspaces/' . \rawurlencode($workspaceSid) . '/Workers/' . \rawurlencode($workerSid) . '/Reservations/' . \rawurlencode($sid) . '';
    }
    /**
     * Fetch the ReservationInstance
     *
     * @return ReservationInstance Fetched ReservationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch() : \ShopMagicTwilioVendor\Twilio\Rest\Taskrouter\V1\Workspace\Worker\ReservationInstance
    {
        $payload = $this->version->fetch('GET', $this->uri);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Taskrouter\V1\Workspace\Worker\ReservationInstance($this->version, $payload, $this->solution['workspaceSid'], $this->solution['workerSid'], $this->solution['sid']);
    }
    /**
     * Update the ReservationInstance
     *
     * @param array|Options $options Optional Arguments
     * @return ReservationInstance Updated ReservationInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []) : \ShopMagicTwilioVendor\Twilio\Rest\Taskrouter\V1\Workspace\Worker\ReservationInstance
    {
        $options = new \ShopMagicTwilioVendor\Twilio\Values($options);
        $data = \ShopMagicTwilioVendor\Twilio\Values::of(['ReservationStatus' => $options['reservationStatus'], 'WorkerActivitySid' => $options['workerActivitySid'], 'Instruction' => $options['instruction'], 'DequeuePostWorkActivitySid' => $options['dequeuePostWorkActivitySid'], 'DequeueFrom' => $options['dequeueFrom'], 'DequeueRecord' => $options['dequeueRecord'], 'DequeueTimeout' => $options['dequeueTimeout'], 'DequeueTo' => $options['dequeueTo'], 'DequeueStatusCallbackUrl' => $options['dequeueStatusCallbackUrl'], 'CallFrom' => $options['callFrom'], 'CallRecord' => $options['callRecord'], 'CallTimeout' => $options['callTimeout'], 'CallTo' => $options['callTo'], 'CallUrl' => $options['callUrl'], 'CallStatusCallbackUrl' => $options['callStatusCallbackUrl'], 'CallAccept' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['callAccept']), 'RedirectCallSid' => $options['redirectCallSid'], 'RedirectAccept' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['redirectAccept']), 'RedirectUrl' => $options['redirectUrl'], 'To' => $options['to'], 'From' => $options['from'], 'StatusCallback' => $options['statusCallback'], 'StatusCallbackMethod' => $options['statusCallbackMethod'], 'StatusCallbackEvent' => $options['statusCallbackEvent'], 'Timeout' => $options['timeout'], 'Record' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['record']), 'Muted' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['muted']), 'Beep' => $options['beep'], 'StartConferenceOnEnter' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['startConferenceOnEnter']), 'EndConferenceOnExit' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['endConferenceOnExit']), 'WaitUrl' => $options['waitUrl'], 'WaitMethod' => $options['waitMethod'], 'EarlyMedia' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['earlyMedia']), 'MaxParticipants' => $options['maxParticipants'], 'ConferenceStatusCallback' => $options['conferenceStatusCallback'], 'ConferenceStatusCallbackMethod' => $options['conferenceStatusCallbackMethod'], 'ConferenceStatusCallbackEvent' => $options['conferenceStatusCallbackEvent'], 'ConferenceRecord' => $options['conferenceRecord'], 'ConferenceTrim' => $options['conferenceTrim'], 'RecordingChannels' => $options['recordingChannels'], 'RecordingStatusCallback' => $options['recordingStatusCallback'], 'RecordingStatusCallbackMethod' => $options['recordingStatusCallbackMethod'], 'ConferenceRecordingStatusCallback' => $options['conferenceRecordingStatusCallback'], 'ConferenceRecordingStatusCallbackMethod' => $options['conferenceRecordingStatusCallbackMethod'], 'Region' => $options['region'], 'SipAuthUsername' => $options['sipAuthUsername'], 'SipAuthPassword' => $options['sipAuthPassword'], 'DequeueStatusCallbackEvent' => \ShopMagicTwilioVendor\Twilio\Serialize::map($options['dequeueStatusCallbackEvent'], function ($e) {
            return $e;
        }), 'PostWorkActivitySid' => $options['postWorkActivitySid'], 'EndConferenceOnCustomerExit' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['endConferenceOnCustomerExit']), 'BeepOnCustomerEntrance' => \ShopMagicTwilioVendor\Twilio\Serialize::booleanToString($options['beepOnCustomerEntrance']), 'JitterBufferSize' => $options['jitterBufferSize']]);
        $headers = \ShopMagicTwilioVendor\Twilio\Values::of(['If-Match' => $options['ifMatch']]);
        $payload = $this->version->update('POST', $this->uri, [], $data, $headers);
        return new \ShopMagicTwilioVendor\Twilio\Rest\Taskrouter\V1\Workspace\Worker\ReservationInstance($this->version, $payload, $this->solution['workspaceSid'], $this->solution['workerSid'], $this->solution['sid']);
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
        return '[Twilio.Taskrouter.V1.ReservationContext ' . \implode(' ', $context) . ']';
    }
}
