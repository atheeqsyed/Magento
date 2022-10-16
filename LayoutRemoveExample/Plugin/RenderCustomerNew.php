<?php
declare(strict_types=1);
namespace Training\LayoutRemoveExample\Plugin;
use Magento\Framework\App\RequestInterface;

class RenderCustomerNew
{
    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * RenderCustomerNew contructor.
     *
     * @param RequestInterface $request
     */

    public function __construct(RequestINterface $request)
    {
        $this->request = $request;
    }

    public function afterAttribute(\Magento\Framework\Data\Structure $subject, $result, $elementId, $attribute)
    {
        if ($this->request->getFullActionName() === 'customer_account_login'){
        if ($elementId === 'customer.new' && $attribute === 'display'){
            return 'false';
        }
    }
        return$result;
    }
}
