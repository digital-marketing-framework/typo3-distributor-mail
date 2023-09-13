<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Mail\Manager;

use DigitalMarketingFramework\Distributor\Mail\Manager\MailManagerInterface;
use Symfony\Component\Mime\Email;
use TYPO3\CMS\Core\Mail\Mailer;
use TYPO3\CMS\Core\Mail\MailMessage;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class MailManager implements MailManagerInterface
{
    protected function getMailer(): Mailer
    {
        return GeneralUtility::makeInstance(Mailer::class);
    }

    public function createMessage(): Email
    {
        return GeneralUtility::makeInstance(MailMessage::class);
    }

    public function sendMessage(Email $message): void
    {
        if ($message instanceof MailMessage) {
            $message->send();
            return;
        }
        $this->getMailer()->send($message);
    }
}