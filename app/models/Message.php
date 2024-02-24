<?php
namespace app\models;

class Message
{
    public $email;
    public $message;
    public $IP;

    public function __construct($object = null)
    {
        if ($object == null)
            return;
        $this->email = $object->email;
        $this->message = $object->message;
        $this->IP = $object->IP;
    }
    public static function read()
    {
        $filename = 'resources/messages.txt';
        $records = file($filename);
        foreach ($records as $key => $value) {
            $object = json_decode($value);
            $text = new \app\models\Message($object);
            $records[$key] = $text;
        }
        return $records;
    }
    public function write()
    {
        $filename = 'resources/messages.txt';
        $message = json_encode($this);
        $file_handle = fopen($filename, 'a');
        flock($file_handle, LOCK_EX);
        fwrite($file_handle, $message . "\n");
        flock($file_handle, LOCK_UN);
        fclose($file_handle);
    }

}
