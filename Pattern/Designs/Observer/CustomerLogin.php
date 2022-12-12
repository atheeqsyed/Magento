<?php
namespace Pattern\Designs\Observer;

use Psr\Log\LoggerInterface;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CustomerLogin implements ObserverInterface
{
    protected $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function execute(Observer $observer)
    {
        $this->logger->debug('Implemented Observer'); // print var\log\debug.log
        $this->logger->info('Implemented Observer');  // print var\log\system.log
        echo "Customer LoggedIn";
        $customer = $observer->getEvent()->getCustomer();
        echo $customer->getName(); //Get customer name
        exit;
    }
}
