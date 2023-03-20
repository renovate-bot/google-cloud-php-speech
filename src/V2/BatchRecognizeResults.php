<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v2/cloud_speech.proto

namespace Google\Cloud\Speech\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Output type for Cloud Storage of BatchRecognize transcripts. Though this
 * proto isn't returned in this API anywhere, the Cloud Storage transcripts will
 * be this proto serialized and should be parsed as such.
 *
 * Generated from protobuf message <code>google.cloud.speech.v2.BatchRecognizeResults</code>
 */
class BatchRecognizeResults extends \Google\Protobuf\Internal\Message
{
    /**
     * Sequential list of transcription results corresponding to sequential
     * portions of audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v2.SpeechRecognitionResult results = 1;</code>
     */
    private $results;
    /**
     * Metadata about the recognition.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.RecognitionResponseMetadata metadata = 2;</code>
     */
    private $metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Speech\V2\SpeechRecognitionResult>|\Google\Protobuf\Internal\RepeatedField $results
     *           Sequential list of transcription results corresponding to sequential
     *           portions of audio.
     *     @type \Google\Cloud\Speech\V2\RecognitionResponseMetadata $metadata
     *           Metadata about the recognition.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V2\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Sequential list of transcription results corresponding to sequential
     * portions of audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v2.SpeechRecognitionResult results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Sequential list of transcription results corresponding to sequential
     * portions of audio.
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v2.SpeechRecognitionResult results = 1;</code>
     * @param array<\Google\Cloud\Speech\V2\SpeechRecognitionResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V2\SpeechRecognitionResult::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * Metadata about the recognition.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.RecognitionResponseMetadata metadata = 2;</code>
     * @return \Google\Cloud\Speech\V2\RecognitionResponseMetadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Metadata about the recognition.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v2.RecognitionResponseMetadata metadata = 2;</code>
     * @param \Google\Cloud\Speech\V2\RecognitionResponseMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V2\RecognitionResponseMetadata::class);
        $this->metadata = $var;

        return $this;
    }

}

