<?php


namespace Brainvire\Careers\Controller\Adminhtml\Form;


use Magento\Backend\App\Action;
use Magento\Framework\UrlInterface;

class Delete extends Action
{
    protected $_model;


    public function __construct(
        Action\Context $context,
        \Brainvire\Careers\Model\Form $model,
        UrlInterface $urlBuilder
    ) {
        parent::__construct($context);
        $this->_model = $model;
        $this->urlBuilder = $urlBuilder;
    }



    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->_model;
                $model->load($id);

                $model->delete();
                $this->messageManager->addSuccess(__('Form details deleted'));
                return $resultRedirect->setPath('*/*/');
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
            }
        }
        $this->messageManager->addError(__('Form details does not exist'));
        return $resultRedirect->setPath('*/*/');
    }
}