<?php


namespace Brainvire\Careers\Controller\Adminhtml\Job;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class AddRow extends \Magento\Backend\App\Action
{

    /**
     * @var \Magento\Framework\Registry
     */
    private $coreRegistry;

    /**
     * @var \Brainvire\Careers\Model\JobFactory
     */
    private $jobFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Magento\Framework\Registry $coreRegistry,
     * @param \Brainvire\Careers\Model\JobFactory $jobFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\Registry $coreRegistry,
        \Brainvire\Careers\Model\JobFactory $jobFactory
    ) {
        parent::__construct($context);
        $this->coreRegistry = $coreRegistry;
        $this->jobFactory = $jobFactory;
    }
    /**
     * Mapped Grid List page.
     * @return \Magento\Backend\Model\View\Result\Page
     */

    public function execute()
    {
        $rowId = (int) $this->getRequest()->getParam('id');
        $rowData = $this->jobFactory->create();
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        if ($rowId) {
            $rowData = $rowData->load($rowId);
            $rowTitle = $rowData->getTitle();
            if (!$rowData->getJobId()) {
                $this->messageManager->addError(__('row data no longer exist.'));
                $this->_redirect('job/job/rowdata');
                return;
            }
        }
        $this->coreRegistry->register('row_data', $rowData);
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $title = $rowId ? __('Edit Job').$rowTitle : __('Add Job');
        $resultPage->getConfig()->getTitle()->prepend($title);
        return $resultPage;
    }
}