<?php

namespace Training\ViewModelExample\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class DeliveryMessage implements ArgumentInterface

{
    public function getMessage(): string
    {
        return " <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, necessitatibus?. *View Model* </strong>";
    }
}
