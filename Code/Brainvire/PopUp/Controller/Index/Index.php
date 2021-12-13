<?php

namespace Brainvire\PopUp\Controller\Index;

use Brainvire\PopUp\Model\Hii;
use Magento\Framework\ObjectManager\ObjectManager;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        ObjectManager $obj)
    {
        $this->_pageFactory = $pageFactory;
        $this->_objectManager=$obj;
        return parent::__construct($context);
    }

    public function execute()
    {
        $micreobj=$this->_objectManager->get('\Brainvire\PopUp\Model\Micreprocessor');
        echo $micreobj->speed=10;
        $micreobj=$this->_objectManager->create('\Brainvire\PopUp\Model\Micreprocessor');
        echo $micreobj->speed;
        exit();
        $micro=new \Brainvire\PopUp\Model\Micreprocessor(Hii::class);
        $speed=100;
        echo $speed;
        exit();
        return $this->_pageFactory->create();
    }
}
