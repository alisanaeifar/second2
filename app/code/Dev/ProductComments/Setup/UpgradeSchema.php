<?php
declare(strict_types=1);
namespace Dev\ProductComments\Setup;
use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
/**
 * Class UpgradeSchema
 * @package Dev\ProductComments\Setup
 */
class UpgradeSchema implements UpgradeSchemaInterface
{
    /**
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '1.0.1', '<')){
            $setup->getConnection()->addColumn(
                $setup->getTable('dev_product_item'),
                'email',
                [
                    'type' => Table::TYPE_TEXT,
                    'nullable' => true,
                    'comment' => 'Item Email'
                ]
            );
        }
        $setup->endSetup();
    }
}
