<?php

namespace Observer;

use Observer\PublisherInterface;
use Observer\SubscriberInterface;

class PublisherOneImplementation implements PublisherInterface {
    
    private $subscriberList = [];

    public function addSubscriber(SubscriberInterface $newSubscriber)
    {
        echo $newSubscriber->name . " subscribed to publisher one!" . PHP_EOL;
        array_push($this->subscriberList, $newSubscriber);        
    }

    public function removeSubscriber(SubscriberInterface $subscriber)
    {
        if (in_array($subscriber, $this->subscriberList)) {
            $key = array_keys($this->subscriberList, $subscriber);            
            unset($this->subscriberList[$key[0]]);
            echo "Removed subscriber " . $subscriber->name . PHP_EOL;
        }
    }

    public function notify($data)
    {        
        foreach ($this->subscriberList as $sList) {
            $sList->update($data); 
        }
    }
}