<?php
/**
 * Copyright © Haseeb Memon All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Company\Disclaimer\Block\Product;

class Disclaimer extends \Magento\Framework\View\Element\Template
{
    /**
     * @var $helper
     */
    protected $helper;

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param \Company\Disclaimer\Helper\Data                   $helper
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context    $context,
        \Company\Disclaimer\Helper\Data                     $helper,
        array $data = []
    ) {
        $this->helper   =   $helper;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getProductDisclaimer()
    {
        if($this->helper->isEnabled())
        {
            return $this->helper->getContent();
        }
    }
}

