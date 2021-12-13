<?php


namespace Brainvire\Careers\Controller\Adminhtml\Form;


use Magento\Framework\App\ResponseInterface;

class View extends  \Magento\Backend\App\Action
{

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        // TODO: Implement execute() method.
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}