<?php
namespace Pattern\Designs\Controller;
use Psr\Log\LoggerInterface;
use Pattern\Designs\Model\FactoryCls;

class FactoryController
{
    protected $logger;
    /**
     * @var FactoryCls
     */
    protected $factoryCls;

    /**
     * @param FactoryCls $factoryCls;
     */
    public function __construct(FactoryCls $factoryCls, LoggerInterface $logger)
    {
        $this->logger = $logger;
        $this->factoryCls = $factoryCls;
    }

    public function execute()
    {
        // Create a new instance of your module class using the factory
        $myModule = $this->factoryCls->create();
        $this->logger->debug('Implemented Factory Class'); // print var\log\debug.log
        $this->logger->info('Implemented Factory Class');  // print var\log\system.log
    }

}
