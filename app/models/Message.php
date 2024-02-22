<?php
namespace app\models;

class Message{
	public $name;
	public $email;
	public $IP;

	public function read(){
        $filename = 'resources/messages.txt';
		$records = file($filename);
        return $records;
	}
    public function write(){
        $filename = 'resources/messages.txt';
        $message = json_encode($this);
        $file_handle = fopen($filename, 'a');
        flock($file_handle, LOCK_EX);
        fwrite($file_handle, $message . "\n");
        flock($file_handle, LOCK_UN);
        fclose($file_handle);
	}

}