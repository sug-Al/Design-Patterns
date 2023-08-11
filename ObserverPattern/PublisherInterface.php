<?php

namespace Observer;

use Observer\SubscriberInterface;

interface PublisherInterface {

    public function addSubscriber(SubscriberInterface $newSubscriber);

    public function removeSubscriber(SubscriberInterface $subscriber);

    public function notify($data);

}