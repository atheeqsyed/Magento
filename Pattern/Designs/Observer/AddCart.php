<?php

use Magento\Framework\Event\ObserverInterface;

class AddCart implements ObserverInterface
{
    /**
     * @var \Pattern\Designs\Model\FactoryClass
     */
    protected $obclass;

    /**
     * AddToCart constructor.
     * @param \Pattern\Designs\Model\FactoryClass $obclass
     */
    public function __construct(
        \Pattern\Designs\Model\FactoryClass $obclass,

    ) {
        $this->obclass = $obclass;
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $items = $observer->getItems();
        $this->obclass->create()->setAddToCart();
    }

}
