<?php
namespace app\controllers;

class Count{

function index(){
    $counter = new \app\models\Counter();
    $counter->increment();
    $counter->write();
    echo $counter;

}
}