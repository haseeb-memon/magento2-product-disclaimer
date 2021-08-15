<?php
/**
 * Copyright © Haseeb Memon All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Company\Disclaimer\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * @param \Magento\Framework\App\Helper\Context                 $context
     * @param \Magento\Framework\App\Config\ScopeConfigInterface    $scopeConfig
     */
    public function __construct(
        \Magento\Framework\App\Helper\Context               $context,
        \Magento\Framework\App\Config\ScopeConfigInterface  $scopeConfig
    ) {
        $this->scopeConfig  =   $scopeConfig;
        parent::__construct($context);
    }

    /**
     * @return string
     */
    public function getConfigValue($config_path) {
        $storeScope     =   \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue($config_path, $storeScope);
    }

    /**
     * @return string
     */
    public function isEnabled()
    {
        $storeScope     =   \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue('disclaimer/general/is_enabled', $storeScope);
    }

    /**
     * @return string
     */
    public function getContent()
    {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
        return $this->scopeConfig->getValue('disclaimer/general/content', $storeScope);
    }
}

