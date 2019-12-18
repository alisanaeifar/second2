<?php
declare(strict_types=1);
namespace Dev\ProductComments\Block;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Dev\ProductComments\Model\Config;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;

/**
 * Class CustomTab
 * @package Dev\ProductComments\Block
 */
class CustomTab extends Template{
    /**
     * @var Config
     */
    public $configfile;
    /**
     * @var Product
     */
    protected $_product = null;
    /**
     * Core registry
     *
     * @var Registry
     */
    protected $_coreRegistry = null;
    /**
     * @var ProductRepositoryInterface $productRepository
     */
    protected $productRepository;
    /**
     * @var DataObjectHelper $dataObjectHelper
     */
    protected $dataObjectHelper;
    /**
     * @var ProductFactory
     */
    protected $_productFactory;
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param ProductRepositoryInterface $productRepository
     * @param DataObjectHelper $dataObjectHelper
     * @param ProductFactory $productFactory
     * @param Registry $registry
     * @param array $data
     */
    public function __construct(
        Config $Config,
        \Magento\Framework\View\Element\Template\Context $context,
        ProductRepositoryInterface $productRepository,
        DataObjectHelper $dataObjectHelper,
        ProductFactory $productFactory,
        Registry $registry,
        array $data = []
    ) {
        $this->configfile = $Config;
        $this->_coreRegistry = $registry;
        $this->productRepository = $productRepository;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->_productFactory = $productFactory;
        parent::__construct($context, $data);
    }
    /**
     * @return Product
     */
    public function getProduct()
    {
        if (!$this->_product) {
            $this->_product = $this->_coreRegistry->registry('product');
        }
        return $this->_product;
    }
}

