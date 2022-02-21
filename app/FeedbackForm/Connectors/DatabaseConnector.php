<?php

namespace App\FeedbackForm\Connectors;

use App\FeedbackForm\FeedbackFormConnector;

class DatabaseConnector implements FeedbackFormConnector
{
    public function send($data): void
    {
        logger(__METHOD__);

        // Сохранение в базу данных
        //
    }
}
