<?php declare(strict_types=1);

namespace ale10257\rabbitmq\events;

use ale10257\rabbitmq\components\Consumer;
use PhpAmqpLib\Message\AMQPMessage;
use yii\base\Event;

class RabbitMQPublisherEvent extends Event
{
    const BEFORE_PUBLISH = 'before_publish';
    const AFTER_PUBLISH  = 'after_publish';

    /**
     * @var AMQPMessage
     */
    public $message;

    /**
     * @var Consumer
     */
    public $producer;
}
