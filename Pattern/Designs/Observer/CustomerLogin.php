<?php
namespace Pattern\Designs\Observer;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CustomerLogin implements ObserverInterface
{

    public function execute(Observer $observer)
    {
        echo "Customer LoggedIn";
        $customer = $observer->getEvent()->getCustomer();
        echo $customer->getName(); //Get customer name
        exit;
    }
}
