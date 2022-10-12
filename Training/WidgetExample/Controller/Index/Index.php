<?php
namespace Training\WidgetExample\Controller\Index;

use Dotdigitalgroup\Email\Test\Unit\Plugin\Magento22MailClassTestDouble;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\TestFramework\Event\Magento;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param ForwardFactory
     */
    protected $resultForwardFactory;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     * @param \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory
     *
     */
    public function __construct(
        Context $context,
    PageFactory $resultPageFactory,
    ForwardFactory $resultForwardFactory)
    {
       $this ->resultPageFactory =$resultPageFactory;
       $this->resultForwardFactory = $resultPageFactory;
       parent::__construct($context);

    }

    /**
     * @return Magento\Framework\View\Result\Page
     */

    public function execute()
    {
        /**
         *@var Magento\Framework\View\Result\Page $resultPage
         */
        return $this->resultPageFactory->create();
    }
}
