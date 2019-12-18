<?php
declare(strict_types=1);
namespace Dev\ProductComments\Model\ResourceModel\Item;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Dev\ProductComments\Model\Item;
use Dev\ProductComments\Model\ResourceModel\Item as ItemResource;
/**
 * Class Collection
 * @package Dev\ProductComments\Model\ResourceModel\Item
 */
class Collection extends AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';
    protected function _construct()
    {
        $this->_init("Dev\ProductComments\Model\Item", "Dev\ProductComments\Model\ResourceModel\Item");
    }
}
