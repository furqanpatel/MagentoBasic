<?php


namespace Brainvire\Careers\Block;
use  Magento\Framework\View\Element\Template\Context;
use Brainvire\Careers\Model\JobFactory;
class JobData extends \Magento\Framework\View\Element\Template
{
    protected $jobFactory;
    public function __construct(
        Context $context,
        JobFactory $jobFactory
    ) {
        $this->jobFactory = $jobFactory;
        parent::__construct($context);
    }



    public function getJobCollection()
    {
        $jobFactory = $this->jobFactory->create();
        $collection = $jobFactory->getCollection();
         $collection->addFieldToFilter('is_active','1');
//        echo $collection->getSelect();
//        exit();
        //$carfactory->setOrder('car_id','ASC');
        $collection->addFieldToSelect('*')->load();

        return $collection->getItems();
    }

}