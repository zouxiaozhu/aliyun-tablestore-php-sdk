<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store_search.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.SingleWordAnalyzerParameter</code>
 */
class SingleWordAnalyzerParameter extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>optional bool case_sensitive = 1;</code>
     */
    private $case_sensitive = false;
    private $has_case_sensitive = false;
    /**
     * Generated from protobuf field <code>optional bool delimit_word = 2;</code>
     */
    private $delimit_word = false;
    private $has_delimit_word = false;

    public function __construct() {
        \GPBMetadata\TableStoreSearch::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>optional bool case_sensitive = 1;</code>
     * @return bool
     */
    public function getCaseSensitive()
    {
        return $this->case_sensitive;
    }

    /**
     * Generated from protobuf field <code>optional bool case_sensitive = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setCaseSensitive($var)
    {
        GPBUtil::checkBool($var);
        $this->case_sensitive = $var;
        $this->has_case_sensitive = true;

        return $this;
    }

    public function hasCaseSensitive()
    {
        return $this->has_case_sensitive;
    }

    /**
     * Generated from protobuf field <code>optional bool delimit_word = 2;</code>
     * @return bool
     */
    public function getDelimitWord()
    {
        return $this->delimit_word;
    }

    /**
     * Generated from protobuf field <code>optional bool delimit_word = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDelimitWord($var)
    {
        GPBUtil::checkBool($var);
        $this->delimit_word = $var;
        $this->has_delimit_word = true;

        return $this;
    }

    public function hasDelimitWord()
    {
        return $this->has_delimit_word;
    }

}
