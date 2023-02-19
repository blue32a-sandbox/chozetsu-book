<?php

namespace Chozetsu\Ch08\Proxy;

interface MailerInterface
{
    public function send(Mail $mail): void;
}
