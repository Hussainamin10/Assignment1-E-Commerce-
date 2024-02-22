<?php

namespace app\models;

class Counter{
    public $count;

    public function __construct(){
        $filename = '/resources/counter.txt';
        if(file_exists($filename)){
            $file_handle = fopen($filename, 'r');
            flock($file_handle, LOCK_SH);
            $count = fread($file_handle, filesize($filename));
            fclose($file_handle);
        } else {
            $count = '{"count":0}';
        }
        $this->$count = json_decode($count, true)['count'];

    }

    public function increment(){
        $this->count++;
    }

    public function write(){
        $filename = 'resources/counter.txt';
        $count = json_encode($this);
        $file_handle = fopen($filename, 'w');//do we need to append or write to the file?
        flock($file_handle, LOCK_EX);
        fwrite($file_handle, $count . "\n");
        flock($file_handle, LOCK_UN);
        fclose($file_handle);
}

public function __toString(){
    return json_encode($this);
}
}