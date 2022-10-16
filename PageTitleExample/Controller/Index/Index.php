<?php

namespace Training\PageTitleExample\Controller\Index;



use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\ForwardFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    protected PageFactory $pageFactory;

    /**
     * Index constructor.
     *
     * @param PageFactory $pageFactory
     */
    public function __construct(PageFactory $resultpageFactory)
    {
        $this->pageFactory = $resultpageFactory;
    }

    public function execute()
    {
        $page = $this->resultpageFactory->create();
        $page->getConfig()->getTitle()->set('Page Title Example');
        $page->getLayout()->getBlock('page.main.title')->setPageTitle('Magento 2 Training set from Controller');
        return $page;
    }
}
