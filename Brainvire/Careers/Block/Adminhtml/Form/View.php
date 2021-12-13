<?php
namespace Brainvire\Careers\Block\Adminhtml\Form;
use Brainvire\Careers\Model\FormFactory;
use Magento\Backend\Block\Template;
use Magento\Cms\Model\Template\FilterProvider;
class View extends Template
{
    protected $formFactory;
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        FormFactory $formFactory,
        FilterProvider $filterProvider
    ) {
        $this->formFactory = $formFactory;
        $this->_filterProvider = $filterProvider;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Form View Page'));

        return parent::_prepareLayout();
    }


    public function getSingleData()
    {
        $id = $this->getRequest()->getParam('id');
        $formFactory = $this->formFactory->create();
        $singleData = $formFactory->load($id);
        if($singleData->getAppId()){
            return $singleData;
        }else{
            return false;
        }
    }
}