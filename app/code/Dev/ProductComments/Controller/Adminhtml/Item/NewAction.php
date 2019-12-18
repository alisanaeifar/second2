<?php
declare(strict_types=1);
namespace Dev\ProductComments\Controller\Adminhtml\Item;
use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

/**
 * Class NewAction
 * @package Dev\ProductComments\Controller\Adminhtml\Item
 */
class NewAction extends Action
{
    /**
     * @return ResponseInterface|ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
