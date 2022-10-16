<?php
namespace Training\DependencyExample\Controller\Index;


use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\PageFactory;

class Index implements ActionInterface
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    public function __construct(PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }

    protected PageFactory $pageFactory;

    public function execute()
    {
       $page = $this->pageFactory->create();
       $page->getConfig()->getTitle()->set('Dependency Injection In Magento');
       return $page;
    }
}
