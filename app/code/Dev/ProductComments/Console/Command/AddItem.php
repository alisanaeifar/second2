<?php
declare(strict_types=1);
namespace Dev\ProductComments\Console\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Dev\ProductComments\Model\ItemFactory;
use Magento\Framework\Console\Cli;
/**
 * Class AddItem
 * @package Dev\ProductComments\Console\Command
 */
class AddItem extends Command
{
    const INPUT_KEY_COMMAND= 'command';
    /**
     * @var ItemFactory
     */
    private $itemFactory;
    /**
     * AddItem constructor.
     * @param ItemFactory $itemFactory
     */
    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
        parent::__construct();
    }
    protected function configure()
    {
        $this->setName('dev:item:add')
            ->addArgument(
                self::INPUT_KEY_COMMAND,
                InputArgument::REQUIRED,
                'Item command'
            );
        parent::configure();
    }
    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|null
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $item = $this->itemFactory->create();
        $item->setName($input->getArgument(self::INPUT_KEY_COMMAND));
        $item->setIsObjectNew(true);
        $item->save();
        return Cli::RETURN_SUCCESS;
    }
}
