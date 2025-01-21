<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Mail\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Mail\DistributorMailInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\EventListener\AbstractDistributorRegistryUpdateEventListener;
use DigitalMarketingFramework\Typo3\Mail\Manager\MailManager;

class DistributorRegistryUpdateEventListener extends AbstractDistributorRegistryUpdateEventListener
{
    public function __construct(MailManager $mailManager)
    {
        parent::__construct(new DistributorMailInitialization($mailManager, 'dmf_distributor_mail'));
    }
}
