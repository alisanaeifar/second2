<?php

declare(strict_types=1);

namespace Dev\ProductComments\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Class Config
 * @package Dev\ProductComments\Model
 */
class Config
{
    const XML_PATH_ENABLED = 'commenting/general/enable';
    /**
     * @var ScopeConfigInterface
     */
    private $config;
    /**
     * Config constructor.
     * @param ScopeConfigInterface $config
     */
    public function __construct(ScopeConfigInterface $config)
    {
        $this->config = $config;
    }
    /**
     * @return mixed
     */
    public function isEnabled()
    {
        return $this->config->getValue(self::XML_PATH_ENABLED);
    }
}
