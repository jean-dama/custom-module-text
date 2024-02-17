<?php
namespace CustomModule\CustomText\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;

class CustomText extends \Magento\Framework\View\Element\Template
{
    protected $scopeConfig;

    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig,
        array $data = []
    ) {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context, $data);
    }

    public function getCustomText()
    {
        return $this->scopeConfig->getValue('customtext/general/custom_text');
    }
}
