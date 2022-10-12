<?php
declare(strict_types=1);
namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\Controller\Result\RawFactory;

class Index implements ActionInterface
{
    /**
     *@var RawFactory
     */

    protected $resultFactory;

    /**
     * @param RawFactory $resultFactory
     */

    public function __construct(RawFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }

    public function execute()
    {
        /**
         * @var $page Raw
         **
         */
        $p= $this->resultFactory->create()->setContents('Example-');
        return $p;
         //   ->setHeader('Content-Type', 'text/xml')
           // ->setContents('<root><name>Atheeq</name><job>Magento Developer</job></root>');
    }
}
