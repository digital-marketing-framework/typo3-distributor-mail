<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Mail\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Core\Registry\RegistryInterface;
use DigitalMarketingFramework\Distributor\Mail\DataDispatcher\MailDataDispatcher;
use DigitalMarketingFramework\Distributor\Mail\DistributorMailInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\EventListener\AbstractDistributorRegistryUpdateEventListener;
use DigitalMarketingFramework\Typo3\Distributor\Mail\Manager\MailManager;

class DistributorRegistryUpdateEventListener extends AbstractDistributorRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorMailInitialization());
    }

    protected function initPlugins(RegistryInterface $registry): void
    {
        parent::initPlugins($registry);
        $registry->registerDataDispatcher(MailDataDispatcher::class, [
            new MailManager(),
        ]);
    }
}
