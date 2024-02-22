<?php
namespace app\controllers;


class Contact extends \app\core\Controller
{

    function index()
    {
        $this->view('Main/menu');

        //showing the register view
        $this->view('Contact/index');
    }

    function read()
    {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $messageText = $_POST['message'] ?? '';
        $ip = $_SERVER['REMOTE_ADDR'] ?? '';

        $message = new \app\models\Message();

        $message->name = $name;
        $message->email = $email;
        $message->message = $messageText;
        $message->ip = $ip;

        $message->write();
        header('location:/Contact/read');
    }
}
/*
    Problems:

    1) The pictures won't load in the view
    2) In the menu navigation when we try to open the contact us or read message
    it is not opening
    3) Contact controller
*/