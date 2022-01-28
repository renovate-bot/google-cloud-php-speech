<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1p1beta1/cloud_speech_adaptation.proto

namespace Google\Cloud\Speech\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message sent by the client for the `GetPhraseSet` method.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1p1beta1.GetPhraseSetRequest</code>
 */
class GetPhraseSetRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the phrase set to retrieve. Format:
     * `projects/{project}/locations/{location}/phraseSets/{phrase_set}`
     * Speech-to-Text supports three locations: `global`, `us` (US North America),
     * and `eu` (Europe). If you are calling the `speech.googleapis.com`
     * endpoint, use the `global` location. To specify a region, use a
     * [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints) with matching `us` or
     * `eu` location value.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the phrase set to retrieve. Format:
     *           `projects/{project}/locations/{location}/phraseSets/{phrase_set}`
     *           Speech-to-Text supports three locations: `global`, `us` (US North America),
     *           and `eu` (Europe). If you are calling the `speech.googleapis.com`
     *           endpoint, use the `global` location. To specify a region, use a
     *           [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints) with matching `us` or
     *           `eu` location value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1P1Beta1\CloudSpeechAdaptation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the phrase set to retrieve. Format:
     * `projects/{project}/locations/{location}/phraseSets/{phrase_set}`
     * Speech-to-Text supports three locations: `global`, `us` (US North America),
     * and `eu` (Europe). If you are calling the `speech.googleapis.com`
     * endpoint, use the `global` location. To specify a region, use a
     * [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints) with matching `us` or
     * `eu` location value.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the phrase set to retrieve. Format:
     * `projects/{project}/locations/{location}/phraseSets/{phrase_set}`
     * Speech-to-Text supports three locations: `global`, `us` (US North America),
     * and `eu` (Europe). If you are calling the `speech.googleapis.com`
     * endpoint, use the `global` location. To specify a region, use a
     * [regional endpoint](https://cloud.google.com/speech-to-text/docs/endpoints) with matching `us` or
     * `eu` location value.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

