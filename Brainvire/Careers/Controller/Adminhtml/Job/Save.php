<?php


namespace Brainvire\Careers\Controller\Adminhtml\Job;


use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Backend\App\Action;

class Save extends \Magento\Backend\App\Action
{
    /**
     * @var \Brainvire\Careers\Model\JobFactory
     */
    var $jobFactory;
    var $_filesystem;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Brainvire\Careers\Model\JobFactory $jobFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Brainvire\Careers\Model\JobFactory $jobFactory,
        \Magento\Framework\Filesystem $filesystem
    ) {
        parent::__construct($context);
        $this->jobFactory = $jobFactory;
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
            $this->_redirect('job/job/addrow');
            return;
        }

            $model = $this->jobFactory->create();


            if (isset($data['id'])) {
                $model->setJobId($data['id']);
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


        $this->_redirect('job/job/index');
    }


}