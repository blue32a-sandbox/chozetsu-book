<?php

namespace Chozetsu\Ch08\Proxy;

class LoggingMailerProxy implements MailerInterface
{
    public function __construct(
        protected MailerInterface $target,
        protected LoggerInterface $logger
    ) { }

    public function send(Mail $mail): void
    {
        $this->logger->info("Before send " . $mail->address);
        $this->target->send($mail);
        $this->logger->info("After send " . $mail->address);
    }
}
