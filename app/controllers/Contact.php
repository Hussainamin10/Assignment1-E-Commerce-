<?php
namespace app\controllers;


class Contact extends \app\core\Controller
{

    function index()
    {
        $this->view('Main/menu');

        $this->view('Contact/index');
    }

    function write()
    {
        print_r($_POST);

        $text = new \app\models\Message();

        $text->email = $_POST['email'];
        $text->message = $_POST['message'];
        $text->IP = $_SERVER['REMOTE_ADDR'];

        $text->write();

        header('location:/Contact/read');

    }


    function read()
    {
        $this->view('Main/menu');


        $text = \app\models\Message::read();
        $this->view('Contact/read', $text);

    }
}
