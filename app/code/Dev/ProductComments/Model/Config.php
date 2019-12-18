<?php
declare(strict_types=1);
namespace Dev\ProductComments\Model;
use Magento\Framework\App\Config\ScopeConfigInterface;
class Config
{
    const XML_PATH_ENABLED = 'commenting/general/enable';
    private $config;
    public function __construct(ScopeConfigInterface $config)
    {
        $this->config = $config;
    }
    public function isEnabled()
    {
        return $this->config->getValue(self::XML_PATH_ENABLED);
    }
}
