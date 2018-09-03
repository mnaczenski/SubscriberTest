<?php

namespace SubscriberTest\Subscriber;

use Doctrine\Common\Collections\ArrayCollection;
use Enlight\Event\SubscriberInterface;
use Shopware\Components\Theme\LessDefinition;

/**
 * Class Less
 *
 * @package SubscriberTest\Subscriber
 */
class SubscriberTest implements SubscriberInterface
{
    /**
     * @return array
     */
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Action_PreDispatch' => 'onPreDispatch'
        ];
    }

    /**
     * Provides the less files for compression
     *
     * @return ArrayCollection
     */
    public function onPreDispatch()
    {
        die('test');
    }
}
