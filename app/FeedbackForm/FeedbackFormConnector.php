<?php

namespace App\FeedbackForm;

interface FeedbackFormConnector
{
    public function send($data): void;
}
