<?php

use Magento\Customer\CustomerData\SectionSourceInterface;

class AddCart implements SectionSourceInterface
{
    /**
     * @var \Pattern\Designs\Model\FactoryClass
     */
    protected $fcSession;

    /**
     * AddToCart constructor.
     * @param \Pattern\Designs\Model\FactoryClass $fcSession
     */
    public function __construct(
        \Pattern\Designs\Model\FactoryClass $fcSession
    ) {
        $this->fcSession = $fcSession;
        // Singleton pattern apply
        //use the getInstance method to access the instance of your object and call its methods.
        $instance = \Pattern\Designs\Model\SingletonClass::getInstance();
    }

    /**
     * Get data
     *
     * @return array
     */
    public function getSectionData()
    {

        $data = [
            'events' => []
        ];

        if ($this->fcSession->create()->hasAddToCart()) {
            // Get the add-to-cart information since it's unique to the user
            // but might be displayed on a cached page
            $data['events'][] = [
                'eventName' => 'AddToCart',
                'eventAdditional' => $this->fcSession->create()->getAddToCart()
            ];
        }
        return $data;
    }
}
