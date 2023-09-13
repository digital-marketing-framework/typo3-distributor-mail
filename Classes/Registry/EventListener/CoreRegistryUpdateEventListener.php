<?php

namespace DigitalMarketingFramework\Typo3\Distributor\Mail\Registry\EventListener;

use DigitalMarketingFramework\Distributor\Mail\DistributorMailInitialization;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct()
    {
        parent::__construct(new DistributorMailInitialization());
    }
}
