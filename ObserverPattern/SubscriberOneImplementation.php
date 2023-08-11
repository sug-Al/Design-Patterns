<?php

namespace Observer;

use Observer\SubscriberInterface;

class SubscriberOneImplementation implements SubscriberInterface{

    public $name = "One";

    public function update($data)
    {
        if (!empty($data)) {
            echo "Subscriber " . $this->name . " Notified!" . PHP_EOL;
            print_r($data);
        }
    }
}