<?php

namespace timofeev;

use core\LogAbstract;
use core\LogInterface;


class MyLog extends LogAbstract implements LogInterface
{

    public static function log($str)
    {
        LogAbstract::Instance()->_log($str);
    }

    public  function _log($str)
    {
        array_push( $this->log,$str);
    }


    public static function write()
    {
        LogAbstract::Instance()->_write();
    }

    public function _write()
    {
        foreach (LogAbstract::Instance()->log as $value) {
            echo $value;
        }
    }
}
