<?php
declare(strict_types=1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;

class Page implements ActionInterface
{
    protected $p;

    /**
     * @param PageFactory $result
     */
    public function __construct(\Magento\Framework\View\Result\PageFactory $result)
    {
        $this->p = $result;
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
       $p= $this->p->create();
       $p->getConfig()->getTitle()->set('ppp');
       return $p;
    }
}
