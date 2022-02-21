<?php

namespace App\FeedbackForm;

class FeedbackFormFactory
{
    public static function build($connectorName): FeedbackFormConnector
    {
        $connectorName = ucfirst($connectorName);
        $connector = '\\App\\FeedbackForm\Connectors\\' . $connectorName . 'Connector';

        return new $connector();
    }
}
