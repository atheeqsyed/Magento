<?php
namespace Pattern\Designs\Model;

use Magento\Framework\ObjectManagerInterface;

class FactoryCls
{
    /**
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @param ObjectManagerInterface $objectManager
     */
    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Create new MyModule instance
     *
     * @param array $data
     * @return MyModuleInterface
     */
    public function create(array $data = [])
    {
        return $this->objectManager->create(MyModule::class, $data);
    }
}
