<?php

declare(strict_types=1);

namespace Training\WidgetExample\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class TItle extends Template implements BlockInterface
{
    protected $_template = 'widget/title.phmtl';

}
