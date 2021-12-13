<?php


namespace Brainvire\Details\Controller\Index;

class Details extends \Magento\Framework\App\Action\Action
{

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $pageFactory;
    protected $_scopeConfig;
    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
//        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->pageFactory = $pageFactory;
//        $this->_scopeConfig = $scopeConfig;
        parent::__construct($context);
    }
    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $pageFactory = $this->pageFactory->create();
        // Add page title
        $pageFactory ->getConfig()->getTitle()->set(__('Brainvire'));
//        $config_val =  $this->_scopeConfig->getValue('details/general/title', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
//        echo $config_val;
        return $this->pageFactory->create();
    }
}