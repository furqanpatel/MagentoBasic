<?php


namespace Brainvire\Details\Block\Index;

class Details extends \Magento\Framework\View\Element\Template
{
    protected $detailsHelper;
    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Brainvire\Details\Helper\Data $detailsHelper,
        array $data = []
    ) {
        $this->detailsHelper = $detailsHelper;
        parent::__construct($context, $data);
    }
    public function getTitle()
    {
        return $this->detailsHelper->getGeneralConfig('title');
    }
    public function getEmail()
    {
        return $this->detailsHelper->getGeneralConfig('email');
    }
    public function getPhone()
    {
        return $this->detailsHelper->getGeneralConfig('phone');
    }
    public function getAddress()
    {
        return $this->detailsHelper->getGeneralConfig('address');
    }

}