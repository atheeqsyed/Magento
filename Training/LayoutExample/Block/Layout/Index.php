<?php
namespace Training\LayoutExample\Block\Layout;

use Magento\Framework\View\Element\Template;


class Index extends Template
{
protected function _prepareLayout()
{
     parent::_prepareLayout(); // TODO: Change the autogenerated stub
    $pageMainTitle = $this->getLayout()->getBlock('page.main.title');
    if ($pageMainTitle) {
        $pageMainTitle->setPageTitle('Magento Developer');
    }
    return $this;
}
public function getSubTitle() : string

{
    /**
     * @retrun string
     *
     */
    return 'Learn Magento Basics';
}

public function getNodeHtml(): string {
    return $this->getLayout()->createBlock(Note::class)->toHtml();
}
}

