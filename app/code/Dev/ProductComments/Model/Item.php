<?php
declare(strict_types=1);
namespace Dev\ProductComments\Model;
use Magento\Framework\Model\AbstractModel;
/**
 * Class Item
 * @package Dev\ProductComments\Model
 */
class Item extends AbstractModel{
    public function _construct(){
        $this->_init(ResourceModel\Item::class);
    }
}
?>
