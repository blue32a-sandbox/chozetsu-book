<?php

namespace Chozetsu\Ch08\Proxy;

class JobWorker
{
    public function __construct(
        protected MailerInterface $mailer
    ) { }

    public function process(): void
    {
        // process

        $reportMail = new Mail();
        $this->mailer->send($reportMail);

        // post process
    }
}
