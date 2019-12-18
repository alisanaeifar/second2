<?php
declare(strict_types=1);
namespace Dev\ProductComments\Controller\Index;
use Exception;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Stdlib\DateTime\DateTime;
use Dev\ProductComments\Model\Item;
/**
 * Class Save
 * @package Dev\ProductComments\Controller\Index
 */
class Save extends Action
{
    /**
     * @var Item
     */
    protected $model;
    /**
     * Save constructor.
     * @param Context $context
     * @param Item $model
     */
    public function __construct(
        Context $context,
        Item $model
    )
    {
        $this->model = $model;
        parent::__construct($context);
    }
    /**
     * @return ResponseInterface|ResultInterface
     * @throws Exception
     */
    public function execute()
    {
        $query['name'] = $this->getRequest()->getPostValue("name");
        $query['email'] = $this->getRequest()->getPostValue("email");
        if ($query) {
            $this->model->setData($query);
            $this->model->Save();
            $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $redirect->setUrl($this->_redirect->getRefererUrl());
            $this->messageManager->addSuccess(__('You submitted your Comment successfully.'));
            return $redirect;
        } else {
            $redirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $redirect->setUrl($this->_redirect->getRefererUrl());
            $this->messageManager->addError(__('Failed To Submit  Please Provide Valid Data.'));
            return $redirect;
        }
    }
}
