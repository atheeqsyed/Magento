<?php

namespace Training\IfConfigExample\Controller\Index;

use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\ForwardFactory;

/**
 * Class Index
 *
 * @package Training\IfConfig\Controller\Index\Index
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    protected $resultpageFactory;
    /**
     * @peam ForwardFactory
     */
    protected $resultForwardFactory;
    /**
     * Index constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param PageFactory $resultForwardFactory
     * @param ForwardFactory $resultpageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultpageFactory,
        ForwardFactory $resultForwardFactory)
    {
        $this->resultpageFactory = $resultpageFactory;
        $this->resultForwardFactory=  $resultForwardFactory;
    }

    /**
     * @return Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        /**
         * @var Magento\Framework\View\Result\Page $resultPage
         */
        return $this->resultpageFactory->create();
    }
}
