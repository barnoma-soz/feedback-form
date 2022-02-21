<?php

namespace App\FeedbackForm\Connectors;

use App\FeedbackForm\FeedbackFormConnector;

class FileConnector implements FeedbackFormConnector
{
    public function send($data): void
    {
        logger(__METHOD__);

        // Запись в файл
        //
    }
}
