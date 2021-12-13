<?php
//
//
//namespace Brainvire\Careers\Model;
//use Magento\Framework\Exception\NoSuchEntityException;
//use Brainvire\Careers\Api\Data\JobInterface;
//use Brainvire\Careers\Api\CustomInterface;
//
//class JobInfo implements CustomInterface
//{
//    protected $jobFactory;
//
//    public function __construct(
//        Context $context,
//        \Brainvire\Careers\Model\JobFactory $jobFactory,
//        array $data = array()
//    )
//    {
//        $this->jobFactory = $jobFactory;
//        parent::__construct($context, $data);
//    }
//    public function getCollection(){
//
//        return $this->jobFactory->create()->getCollection();
//
//    }
//    /**
//     * GET for Post api
//     * @return \Brainvire\Careers\Api\Data\JobInterface
//     */
//    public function customGetMethod($id)
//    {
//        // TODO: Implement customGetMethod() method.
//    }
//}