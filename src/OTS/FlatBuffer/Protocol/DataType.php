<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace Aliyun\OTS\FlatBuffer\Protocol;

class DataType
{
    const NONE = 0;
    const LONG = 1;
    const BOOLEAN = 2;
    const DOUBLE = 3;
    const STRING = 4;
    const BINARY = 5;
    const STRING_RLE = 6;

    private static $names = array(
        DataType::NONE=>"NONE",
        DataType::LONG=>"LONG",
        DataType::BOOLEAN=>"BOOLEAN",
        DataType::DOUBLE=>"DOUBLE",
        DataType::STRING=>"STRING",
        DataType::BINARY=>"BINARY",
        DataType::STRING_RLE=>"STRING_RLE",
    );

    public static function Name($e)
    {
        if (!isset(self::$names[$e])) {
            throw new \Exception();
        }
        return self::$names[$e];
    }
}