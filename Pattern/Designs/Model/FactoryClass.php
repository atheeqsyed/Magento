<?php

namespace Pattern\Designs\Model;

/**
 * Class Session
 * @package Pattern\Designs\Model
 * @SuppressWarnings(PHPMD.CookieAndSessionMisuse)
 */
class FactoryClass extends \Magento\Framework\Session\SessionManager
{
    /**
     * @return mixed|null
     */
    public function getAddToCart()
    {
        if ($this->hasAddToCart()) {
            $data = $this->getData('Pattern_add_to_cart');
            $this->unsetData('Pattern_add_to_cart');
            return $data;
        }
        return null;
    }
    /**
     * @return bool
     */
    public function hasAddToCart()
    {
        return $this->hasData('add_to_cart');
    }
}
