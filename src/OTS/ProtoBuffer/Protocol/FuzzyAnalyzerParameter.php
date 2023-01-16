<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store_search.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.FuzzyAnalyzerParameter</code>
 */
class FuzzyAnalyzerParameter extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>optional int32 min_chars = 1;</code>
     */
    private $min_chars = 0;
    private $has_min_chars = false;
    /**
     * Generated from protobuf field <code>optional int32 max_chars = 2;</code>
     */
    private $max_chars = 0;
    private $has_max_chars = false;

    public function __construct() {
        \GPBMetadata\TableStoreSearch::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>optional int32 min_chars = 1;</code>
     * @return int
     */
    public function getMinChars()
    {
        return $this->min_chars;
    }

    /**
     * Generated from protobuf field <code>optional int32 min_chars = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMinChars($var)
    {
        GPBUtil::checkInt32($var);
        $this->min_chars = $var;
        $this->has_min_chars = true;

        return $this;
    }

    public function hasMinChars()
    {
        return $this->has_min_chars;
    }

    /**
     * Generated from protobuf field <code>optional int32 max_chars = 2;</code>
     * @return int
     */
    public function getMaxChars()
    {
        return $this->max_chars;
    }

    /**
     * Generated from protobuf field <code>optional int32 max_chars = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxChars($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_chars = $var;
        $this->has_max_chars = true;

        return $this;
    }

    public function hasMaxChars()
    {
        return $this->has_max_chars;
    }

}
