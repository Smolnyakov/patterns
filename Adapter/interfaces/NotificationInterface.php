<?php

namespace Adapter\interfaces;

interface NotificationInterface
{
    public function sendNotification(string $text);
}