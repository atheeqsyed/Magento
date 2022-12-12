<?php
namespace Pattern\Designs\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Customer\Model\AddressFactory;

class CustomerAddressRepository extends AbstractModel
{
    /**
     * @var AddressFactory
     */
    protected $addressFactory;

    /**
     * CustomerAddressRepository constructor.
     * @param AddressFactory $addressFactory
     */
    public function __construct(
        AddressFactory $addressFactory
    ) {
        $this->addressFactory = $addressFactory;
    }

    /**
     * @param int $customerId
     * @return \Magento\Customer\Model\Address[]
     */
    public function getAddressesByCustomerId($customerId)
    {
        $addresses = [];
        $collection = $this->addressFactory->create()->getCollection()
            ->addAttributeToFilter('parent_id', $customerId);

        foreach ($collection as $address) {
            $addresses[] = $address;
        }

        return $addresses;
    }
}
