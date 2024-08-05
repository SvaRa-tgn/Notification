<?php

namespace App\Services;

require_once __DIR__ . '/../../vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class RabbitService
{
    /**
     * @throws \Exception
     */
    public function rabbitConnect($message): void
    {
        $connection = new AMQPStreamConnection('rabbitmq', 5672, 'guest', 'guest');
        $channel = $connection->channel();

        $channel->queue_declare('notification', false, true, false, false);

        $msg = new AMQPMessage($message);
        $channel->basic_publish($msg, '', 'notification');

        $channel->close();
        $connection->close();
    }
}
