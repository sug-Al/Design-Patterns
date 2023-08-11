<?php

namespace Observer;

use Observer\SubscriberInterface;

class SubscriberThreeImplementation implements SubscriberInterface{
    
    public $name = "Three";

    public function update($data)
    {
        if (!empty($data)) {
            echo "Subscriber " . $this->name . " Notified!" . PHP_EOL;
            print_r($data);
        }
    }
}