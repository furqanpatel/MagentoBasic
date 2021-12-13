<?php


namespace Brainvire\Careers\Controller\Job;


use Magento\Framework\App\ResponseInterface;

class Apply extends \Magento\Framework\App\Action\Action
{

    /**
     * Execute action based on request and return result
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}