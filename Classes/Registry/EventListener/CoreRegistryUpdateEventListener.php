<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Mail\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Mail\DistributorMailInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;
use DigitalMarketingFramework\Typo3\Mail\Manager\MailManager;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct(MailManager $mailManager)
    {
        parent::__construct(new DistributorMailInitialization($mailManager, 'dmf_distributor_mail'));
    }
}
