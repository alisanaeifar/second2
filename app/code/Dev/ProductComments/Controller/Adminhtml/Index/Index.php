<?php
declare(strict_types=1);
namespace Dev\ProductComments\Controller\Adminhtml\Index;
use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Controller\ResultInterface;

/**
 * Class Index
 * @package Dev\ProductComments\Controller\Adminhtml\Index
 */
class Index extends Action
{
    /**
     * @return ResponseInterface|ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}

