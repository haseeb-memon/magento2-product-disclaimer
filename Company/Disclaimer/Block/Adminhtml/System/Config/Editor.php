<?php
/**
 * Copyright © Haseeb Memon All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Company\Disclaimer\Block\Adminhtml\System\Config;

class Editor extends \Magento\Config\Block\System\Config\Form\Field
{

    /**
     * @var \Magento\Cms\Model\Wysiwyg\Config
     */
    protected $_wysiwygConfig;
    
    /**
     * Constructor
     *
     * @param \Magento\Backend\Block\Template\Context   $context
     * @param \Magento\Cms\Model\Wysiwyg\Config         $wysiwygConfig
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context         $context,
        \Magento\Cms\Model\Wysiwyg\Config               $wysiwygConfig,
        array $data = []
    ) {
        $this->_wysiwygConfig   =   $wysiwygConfig;
        parent::__construct($context, $data);
    }


    protected function _getElementHtml(\Magento\Framework\Data\Form\Element\AbstractElement $element)
    {
        $element->setWysiwyg(true);
        $element->setConfig($this->_wysiwygConfig->getConfig($element)); 
        // If you want to remove specific button then use this below code in setConfig()
        /** * $this->_wysiwygConfig->getConfig(['add_variables' => true,'add_widgets' => false,'add_images' => true,]) */
        return parent::_getElementHtml($element);
    }
}

