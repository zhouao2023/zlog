<?php

namespace Test;


class Test

{

    //添加一个日志用于调试
    protected function zlog($data,$type='pay')
    {
        $data = is_array($data) ? print_r($data, true) : $data;

        $filename = dirname(__DIR__).DS.'runtime/zlog/'.date("Y-m-d").$type.'.txt';
        // 判断文件夹是否存在
        if (!file_exists($filename)) {
            // 创建文件
            $file = fopen($filename, 'w');
            fclose($file);

            // 设置文件权限为 777
            chmod($filename, 0777);
        }
        file_put_contents($filename, date("Y-m-d H:i:s") . " " . $data . "\r\n", FILE_APPEND | LOCK_EX);
    }
}