<?php

require_once '../vendor/autoload.php';
use Symfony\Component\EventDispatcher\EventDispatcher;
use EventDispatchers\Subscribers\DemoSubscriber;
use EventDispatchers\Events\DemoEvent;
 
// init event dispatcher
$dispatcher = new EventDispatcher();
 
// register subscriber
$subscriber = new DemoSubscriber();
$dispatcher->addSubscriber($subscriber);
 
// dispatch
$dispatcher->dispatch(DemoEvent::NAME, new DemoEvent());