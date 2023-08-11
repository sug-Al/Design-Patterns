<?php

namespace Observer;

use Observer\SubscriberInterface;

class SubscriberTwoImplementation implements SubscriberInterface{

    public $name = "Two";

    public function update($data)
    {
        if (!empty($data)) {
            echo "Subscriber " . $this->name . " Notified!" . PHP_EOL;
            print_r($data);
        }
    }
}