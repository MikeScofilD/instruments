<?php
interface NotificationInterface
{
    public function send($receiver, $content);
}
