<?php


namespace Brainvire\Careers\Controller\Adminhtml\Form;


use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Backend\App\Action;

class Save extends \Magento\Backend\App\Action
{
    /**
     * @var \Brainvire\Careers\Model\FormFactory
     */
    var $formFactory;
    var $_filesystem;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Brainvire\Careers\Model\FormFactory $formFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Brainvire\Careers\Model\FormFactory $formFactory,
        \Magento\Framework\Filesystem $filesystem
    ) {
        parent::__construct($context);
        $this->formFactory = $formFactory;
        $this->_filesystem = $filesystem;
    }

    /**
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        $resultRedirect = $this->resultRedirectFactory->create();
        $data = $this->getRequest()->getPostValue();

        if (!$data) {
            $this->_redirect('job/form/addrow');
            return;
        }

            $model = $this->formFactory->create();


            if (isset($data['id'])) {
                $model->setAppId($data['id']);
            }
            $model->setData($data);
            try {
                $model->save();
                $this->messageManager->addSuccessMessage(__('You saved the Customform.'));

                if ($this->getRequest()->getParam('back')) {
                    return $resultRedirect->setPath('*/*/edit', ['id' => $model->getId()]);
                }
                return $resultRedirect->setPath('*/*/');
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the Customform.'));
            }


        $this->_redirect('job/form/index');
    }


}