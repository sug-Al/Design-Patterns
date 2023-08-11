<?php

namespace Observer;

use Observer\PublisherOneImplementation;
use Observer\PublisherTwoImplementation;

use Observer\SubscriberOneImplementation;
use Observer\SubscriberTwoImplementation;
use Observer\SubscriberThreeImplementation;

class StateChanger {

    private PublisherOneImplementation $publisherOne;
    private PublisherTwoImplementation $publisherTwo;

    private SubscriberOneImplementation $subscriberOne;
    private SubscriberTwoImplementation $subscriberTwo;
    private SubscriberTHreeImplementation $subscriberThree;

    public function changeStateOfPublisherOne() 
    {
        $this->publisherOne = new PublisherOneImplementation;
    
        $this->subscriberOne = new SubscriberOneImplementation;
        $this->subscriberThree = new SubscriberThreeImplementation;

        $this->publisherOne->addSubscriber($this->subscriberOne);
        $this->publisherOne->addSubscriber($this->subscriberThree);
        
        $data = [
            "id" => 1,
            "name" => "Hris",
            "age" => "22"
        ];
        $this->publisherOne->notify($data);
        $this->publisherOne->removeSubscriber($this->subscriberThree);
    }

    public function changeStateOfPublisherTwo() 
    {
        $this->publisherTwo = new PublisherTwoImplementation;

        $this->subscriberTwo = new SubscriberTwoImplementation;
        $this->publisherTwo->addSubscriber($this->subscriberTwo);

        $this->subscriberThree = new SubscriberThreeImplementation;
        $this->publisherTwo->addSubscriber($this->subscriberThree);

        $data = [
            1 => "red",
            2 => "fire"
        ];
        $this->publisherTwo->notify($data);
    }

}