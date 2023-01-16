<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store_search.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.GroupBySorter</code>
 */
class GroupBySorter extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.GroupKeySort group_key_sort = 1;</code>
     */
    private $group_key_sort = null;
    private $has_group_key_sort = false;
    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.RowCountSort row_count_sort = 2;</code>
     */
    private $row_count_sort = null;
    private $has_row_count_sort = false;
    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.SubAggSort sub_agg_sort = 3;</code>
     */
    private $sub_agg_sort = null;
    private $has_sub_agg_sort = false;

    public function __construct() {
        \GPBMetadata\TableStoreSearch::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.GroupKeySort group_key_sort = 1;</code>
     * @return \Aliyun\OTS\ProtoBuffer\Protocol\GroupKeySort
     */
    public function getGroupKeySort()
    {
        return $this->group_key_sort;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.GroupKeySort group_key_sort = 1;</code>
     * @param \Aliyun\OTS\ProtoBuffer\Protocol\GroupKeySort $var
     * @return $this
     */
    public function setGroupKeySort($var)
    {
        GPBUtil::checkMessage($var, \Aliyun\OTS\ProtoBuffer\Protocol\GroupKeySort::class);
        $this->group_key_sort = $var;
        $this->has_group_key_sort = true;

        return $this;
    }

    public function hasGroupKeySort()
    {
        return $this->has_group_key_sort;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.RowCountSort row_count_sort = 2;</code>
     * @return \Aliyun\OTS\ProtoBuffer\Protocol\RowCountSort
     */
    public function getRowCountSort()
    {
        return $this->row_count_sort;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.RowCountSort row_count_sort = 2;</code>
     * @param \Aliyun\OTS\ProtoBuffer\Protocol\RowCountSort $var
     * @return $this
     */
    public function setRowCountSort($var)
    {
        GPBUtil::checkMessage($var, \Aliyun\OTS\ProtoBuffer\Protocol\RowCountSort::class);
        $this->row_count_sort = $var;
        $this->has_row_count_sort = true;

        return $this;
    }

    public function hasRowCountSort()
    {
        return $this->has_row_count_sort;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.SubAggSort sub_agg_sort = 3;</code>
     * @return \Aliyun\OTS\ProtoBuffer\Protocol\SubAggSort
     */
    public function getSubAggSort()
    {
        return $this->sub_agg_sort;
    }

    /**
     * Generated from protobuf field <code>optional .aliyun.OTS.ProtoBuffer.Protocol.SubAggSort sub_agg_sort = 3;</code>
     * @param \Aliyun\OTS\ProtoBuffer\Protocol\SubAggSort $var
     * @return $this
     */
    public function setSubAggSort($var)
    {
        GPBUtil::checkMessage($var, \Aliyun\OTS\ProtoBuffer\Protocol\SubAggSort::class);
        $this->sub_agg_sort = $var;
        $this->has_sub_agg_sort = true;

        return $this;
    }

    public function hasSubAggSort()
    {
        return $this->has_sub_agg_sort;
    }

}
